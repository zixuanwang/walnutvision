<?php

/**
 * post actions.
 *
 * @package    wepost
 * @subpackage post
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class postActions extends sfActions {
	/**
	 * Executes index action
	 *
	 * @param sfRequest $request A request object
	 */
	public function executeIndex(sfWebRequest $request) {
		$this->forward ( 'default', 'module' );
	}
	public function executeUpload(sfWebRequest $request) {
		$this->form = new ProductForm ();
		if ($request->isMethod ( 'post' )) {
			$this->form->bind ( $request->getParameter ( 'product' ), $request->getFiles ( 'product' ) );
			if ($this->form->isValid ()) {
				$file = $this->form->getValue ( 'photo' );
				$filename = 'productUrl_' . sha1 ( $file->getOriginalName () );
				$extension = $file->getExtension ( $file->getOriginalExtension () );
				$file->save ( sfConfig::get ( 'sf_upload_dir' ) . '/' . $filename . $extension );
				$this->form->save ();
				$this->redirect ( $this->generateUrl ( 'default', array ('module' => 'user', 'action' => 'home' ) ) );
			}
		}
	}
	public function executeCalcSin(sfWebRequest $request) {
		if ($request->hasParameter ( 'origVal' )) {
			$origVal = $request->getParameter ( 'origVal' );
			$sinVal = sin ( deg2rad ( $origVal ) );
			return $this->renderText ( "sin(" . $origVal . ")=" . $sinVal );
		}
	}
	public function executeCategoryList(sfWebRequest $request)
	{
		if($request->hasParameter('cid'))
		{
			$currentCategory = Doctrine_Core::getTable ( 'Category' )->createQuery ( 'q' )->where ( 'q.id = ?', $request->getParameter ( 'cid' ) )->execute ();
			$this->categories = $currentCategory[0]->getSubcategories ();
		}
		else {
			$this->categories = Doctrine_Core::getTable ( 'Category' )->createQuery ( 'q' )->where ( 'q.level = ?', 0 )->execute ();
		}
		$choiceText = '';
		foreach($this->categories as $category)
		{
			$optionText = '<option value='.$category->getId().'>'.$category->getDescription().'</option>';
			$choiceText = $choiceText.$optionText;
		}
		return $this->renderText($choiceText);
	}
	public function executeTestJs(sfWebRequest $request) {
	
	}
}

?>
