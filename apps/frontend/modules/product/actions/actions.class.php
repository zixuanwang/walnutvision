<?php
require_once sfConfig::get ( 'sf_lib_dir' ) . '/utility/utility.php';
/**
 * product actions.
 *
 * @package    wepost
 * @subpackage product
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productActions extends sfActions {
	/**
	 * Executes index action
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeIndex(sfWebRequest $request) {
		//$this->forward('default', 'module');
	}
	public function executeUpload(sfWebRequest $request) {
		if(!$this->getUser()->hasAttribute('user')){
			$this->redirect ( $this->generateUrl ( 'default', array ('module' => 'user', 'action' => 'index' ) ) );
		}
		if ($request->isMethod ( 'post' )) {
			$file = $request->getFiles ( 'productImage' );
			$filepath = saveUploadedImage ( $file );
			$image = new Image ();
			$image->setUrl ( $filepath );
			$price = new Price ();
			$price->setPrice ( $request->getParameter ( 'productPrice' ) );
			$price->setStore ( $this->getDefaultStore () );
			$product = new Product ();
			$product->setName ( $request->getParameter ( 'productName' ), 'name' );
			$product->setDescription ( $request->getParameter ( 'productDescription' ) );
			$categories = Doctrine_Core::getTable ( 'Category' )->createQuery ( 'q' )->where ( 'q.id = ?', $request->getParameter ( 'productCategory' ) )->execute ();
			$product->getCategory ()->add ( $categories [0] );
			$product->getPrice ()->add ( $price );
			$product->getUserUpload ()->add ( $this->getUser()->getAttribute('user') );
			$price->setProduct ( $product );
			$image->setProduct ( $product );
			$price->save ();
			$image->save ();
			$product->save ();
			$this->redirect ( $this->generateUrl ( 'default', array ('module' => 'user', 'action' => 'wall' ) ) );
		}
		$this->categories = Doctrine_Core::getTable ( 'Category' )->createQuery ( 'q' )->where ( 'q.level = ?', 0 )->execute ();
	}
	public function getDefaultStore() {
		// default store is returned
		$stores = Doctrine_Core::getTable ( 'Store' )->createQuery ( 'q' )->where ( 'q.id = ?', 1 )->execute ();
		return $stores [0];
	}
}
