<?php
require_once sfConfig::get ( 'sf_lib_dir' ) . '/utility/utility.php';
/**
 * android actions.
 *
 * @package    wepost
 * @subpackage android
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class androidActions extends sfActions
{
	/**
	 * Executes index action
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeIndex(sfWebRequest $request)
	{
		$this->forward('default', 'module');
	}
	public function executeMaterial(sfWebRequest $request){
		$materials = Doctrine_Core::getTable ( 'Material' )->createQuery ( 'q' )->execute ();
		$this->content=$materials->toArray(false);
	}
	public function executeColor(sfWebRequest $request){
		$colors = Doctrine_Core::getTable ( 'Color' )->createQuery ( 'q' )->execute ();
		$this->content=$colors->toArray(false);
	}
	
	public function executeCategory(sfWebRequest $request){
		// Generate the category structure for mobile client
		// Three level categories
		$categories = Doctrine_Core::getTable ( 'Category' )->createQuery ( 'q' )->where ( 'q.level = ?', 0 )->execute ();
		$this->content=$categories->toArray(false);
		for($i=0;$i<count($categories);++$i){
			$category=$categories[$i];
			$subcategories=$category->getSubcategories();
			if(count($subcategories)>0){
				$this->content[$i]['subcategory']=$subcategories->toArray(false);
				for($j=0;$j<count($subcategories);++$j){
					$subcategory=$subcategories[$j];
					$subsubcategories=$subcategory->getSubcategories();
					if(count($subsubcategories)>0){
						$this->content[$i]['subcategory'][$j]['subcategory']=$subsubcategories->toArray(false);
					}
				}
			}
		}
	}

	public function executeUpload(sfWebRequest $request){
		$product=new Product();
		$product->setName('TestProduct');
		$product->save();
		$image=new Image();
		$imageName=$this->saveImage($request);
		$image->setUrl($imageName);
		$image->setProductId($product->getId());
		$image->save();
	}

	public function saveImage($request){
		$base=$request->getParameter('image');
		$binary=base64_decode($base);
		header('Content-Type: bitmap; charset=utf-8');
		$filename=uniqueFilename('.jpg');
		$file=fopen(sfConfig::get ( 'sf_upload_dir' ) . '/' . $filename,'wb');
		fwrite($file,$binary);
		fclose($file);
		return $filename;
	}
}
