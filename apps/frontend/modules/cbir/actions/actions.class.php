<?php
require_once sfConfig::get ( 'sf_lib_dir' ) . '/thrift/Thrift.php';
require_once sfConfig::get ( 'sf_lib_dir' ) . '/thrift/protocol/TBinaryProtocol.php';
require_once sfConfig::get ( 'sf_lib_dir' ) . '/thrift/transport/TSocket.php';
require_once sfConfig::get ( 'sf_lib_dir' ) . '/thrift/transport/TBufferedTransport.php';
require_once sfConfig::get ( 'sf_lib_dir' ) . '/thrift/packages/ImageFeatureDaemon/ImageFeatureDaemon.php';
/**
 * cbir actions.
 *
 * @package    wepost
 * @subpackage cbir
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cbirActions extends sfActions
{
	/**
	 * Executes index action
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeIndex(sfWebRequest $request)
	{
		$socket = new TSocket('localhost', '9090');
		$transport = new TBufferedTransport($socket);
		$protocol = new TBinaryProtocol($transport);
		$client = new ImageFeatureDaemonClient($protocol);
		$transport->open();
		$this->foo=$client->getBoWFeature('/home/zxwang/data/image/stanford/image/834945fddb568a5a731b3c9f8a90ebab.jpg');
	}
}
