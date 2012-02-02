<?php

$GLOBALS['THRIFT_ROOT'] = sfConfig::get ( 'sf_lib_dir' ) . '/thrift/';

// Load up all the thrift stuff
require_once $GLOBALS['THRIFT_ROOT'].'Thrift.php';
require_once $GLOBALS['THRIFT_ROOT'].'protocol/TBinaryProtocol.php';
require_once $GLOBALS['THRIFT_ROOT'].'transport/TSocket.php';
require_once $GLOBALS['THRIFT_ROOT'].'transport/TBufferedTransport.php';

// Load the package that we autogenerated for this tutorial
require_once $GLOBALS['THRIFT_ROOT'].'packages/ImageDaemon/ImageDaemon.php';
require_once $GLOBALS['THRIFT_ROOT'].'packages/Hbase/Hbase.php';
require_once sfConfig::get ( 'sf_lib_dir' ) . '/utility/utility.php';

/**
 * walnut actions.
 *
 * @package    wepost
 * @subpackage walnut
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class walnutActions extends sfActions
{
	/**
	 * Executes index action
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeIndex(sfWebRequest $request)
	{
		$conn = new Mongo($this->mServer);         // Connect
		$db = $conn->image;                // Select DB
		$grid = $db->getGridFS();
		$page=$request->getParameter('page',0);
		$imageArray=array();
		$cursor = $grid->find()->limit($this->mImageCount)->skip($this->mImageCount*$page)->sort(array('uploadDate' => -1));
		foreach ($cursor as $obj) {
			$imageArray[]=$this->mPathPrefix . $obj->getFilename();
		}
		$conn->close();                                // Disconnect from Server
		$this->pageArray=array();
		for($i=-3;$i<=3;++$i){
			$p=$page+$i;
			if($p>=0){
				$this->pageArray[]=$p;
			}
		}
		$this->count=$db->image->count();
		$this->imageArray=$this->getImageInfo($imageArray);
	}

	public function executeQuery(sfWebRequest $request)
	{
		if($request->isMethod ( 'post' )){
			$file = $request->getFiles ( 'fileInput' );
			$imagePath = $this->saveUploadedImage ( $file );
			$time_start = microtime(true);
			$this->resultArray=$this->query($imagePath);
			$time_end = microtime(true);
			$this->time = $time_end - $time_start;
		}
	}

	public function executeUpload(sfWebRequest $request){
		$imagePath=$this->saveImage($request);
		$this->resultArray=$this->query($imagePath);
	}

	public function saveImage($request){
		$base=$request->getParameter('image');
		$binary=base64_decode($base);
		header('Content-Type: bitmap; charset=utf-8');
		$filename=sfConfig::get ( 'sf_upload_dir' ) . '/' . uniqueFilename('.jpg');
		$file=fopen($filename,'wb');
		fwrite($file,$binary);
		fclose($file);
		return $filename;
	}

	public function query($imagePath){
		$resultArray=array();
		try{
			$socket = new TSocket('localhost', '9992');
			$socket->setRecvTimeout(20000);
			$transport = new TBufferedTransport($socket);
			$protocol = new TBinaryProtocol($transport);
			$client = new ImageDaemonClient($protocol);
			$transport->open();
			$hashArray=$client->query($imagePath);
			foreach($hashArray as $hash){
				$resultArray[]=$this->mPathPrefix . $hash . '.jpg';
			}
		}catch (TException $tx) {
			echo "ThriftException: ".$tx->getMessage()."\r\n";
		}
		return $resultArray;
	}

	public function saveUploadedImage($file) {
		// This function downsample and rename the uploaded image
		// The image path is returned.
		$type = $file ['type'];
		if (strstr ( $type, '/', true ) != 'image') {
			return null;
		}
		$filename = md5_file ( $file ['tmp_name'] );
		$filepath = sfConfig::get ( 'sf_upload_dir' ) . '/' . $filename . '.jpg';
		system ( 'convert ' . $file ['tmp_name'] . ' -resize 320x320 ' . $filepath );
		return $filepath;
	}
	
	public function getImageInfo($imageArray){
		$ret=array();
		try{
			$socket = new TSocket('localhost', '9090');
			$socket->setRecvTimeout(60000);
			$transport = new TBufferedTransport($socket);
			$protocol = new TBinaryProtocol($transport);
			$client = new HbaseClient($protocol);
			$transport->open();
			$i=0;
			foreach ($imageArray as $imagePath){
				$item=array();
				$item['image']=$imagePath;
				$imageHash=basename($imagePath,'.jpg');
				$productArray=$client->get('image',$imageHash,'d:ii_0');
				$productId=$productArray[0]->value;
				$infoArray=$client->getRowWithColumns('meta', $productId, array('d:u_0','d:t_0','d:lnp_0'));
				$item['title']=$infoArray[0]->columns['d:t_0']->value;
				$item['url']=$infoArray[0]->columns['d:u_0']->value;
				$item['price']=$infoArray[0]->columns['d:lnp_0']->value;
				$ret[$i++]=$item;
			}
			$transport->close();
		}catch(TException $e){
			
		}
		return $ret;
	}


	public $mServer='localhost';
	public $mPathPrefix='http://171.67.76.127/gridfs/';
	public $mImageCount=15;
}