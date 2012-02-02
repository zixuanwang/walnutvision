<?php
require_once sfConfig::get ( 'sf_lib_dir' ) . '/renren/requires.php';

class userActions extends sfActions {
	/**
	 * Executes index action
	 *
	 * @param sfRequest $request A request object
	 */
	// This function authenticate the user from the mobile client.
	// If authentication succeeds, the session of 'user' is set.
	public function executeClientLoginAuthenticate(sfWebRequest $request) {
		if ($request->isMethod ( 'post' )) {
			$username = $request->getParameter ( 'username' );
			$password = $request->getParameter ( 'password' );
			$this->checkUserLogin ( $username, $password );
			$this->content = $this->getUser ()->getAttribute ( 'user' )->toArray ( false );
		}
	}
	public function executeWall(sfWebRequest $request) {
		$this->productArray = Doctrine_Core::getTable ( 'Product' )->createQuery ( 'q' )->orderBy ( 'updated_at DESC' )->limit ( 16 )->execute ();
		$product=new Product();
	}
	
	public function executeIndex(sfWebRequest $request) {
		//$this->forward ( 'default', 'module' );
	}
	public function executeProduct(sfWebRequest $request) {
	
	}
	public function executeHome(sfRequest $request) {
		if ($request->hasParameter ( 'cid' )) {
			$this->categories = Doctrine_Core::getTable ( 'Category' )->createQuery ( 'q' )->where ( 'q.level = ?', 0 )->execute ();
			$currentCategoryArray = Doctrine_Core::getTable ( 'Category' )->createQuery ( 'q' )->where ( 'q.id = ?', $request->getParameter ( 'cid' ) )->execute ();
			$this->currentCategory = $currentCategoryArray [0];
			$this->subcategories = $this->currentCategory->getSubcategories ();
			if ($request->hasParameter ( 'scid' )) {
				$currentSubcategoryArray = Doctrine_Core::getTable ( 'Category' )->createQuery ( 'q' )->where ( 'q.id = ?', $request->getParameter ( 'scid' ) )->execute ();
				$this->currentSubcategory = $currentSubcategoryArray [0];
				$this->subsubcategories = $this->currentSubcategory->getSubcategories ();
			}
		} else {
			$this->categories = Doctrine_Core::getTable ( 'Category' )->createQuery ( 'q' )->where ( 'q.level = ?', 0 )->execute ();
		}
		$this->prepareProduct ();
	
		//$this->brands = Doctrine_Core::getTable ( 'Brand' )->createQuery ( 'q' )->orderBy ( 'q.description ASC' )->execute ();
	}
	public function prepareProduct() {
		$this->products = Doctrine_Core::getTable ( 'Product' )->createQuery ( 'q' )->orderBy ( 'updated_at DESC' )->limit ( 6 )->execute ();
	
	}
	public function executeTest(sfRequest $request) {
		$this->prepareProduct ();
	}
	
	public function executeAbout(sfRequest $request) {
	
	}
	public function executeJoin(sfRequest $request) {
	
	}
	public function executeUpload(sfRequest $request) {
		if ($request->isMethod ( 'post' )) {
			$file = $request->getFiles ( 'product_image' );
			$filepath = $this->saveUploadedImage ( $file );
			$image = new Image ();
			$image->setUrl ( $filepath );
			$price = new Price ();
			$price->setPrice ( $request->getParameter ( 'product_price' ) );
			$price->setStore ( $this->getDefaultStore () );
			$product = new Product ();
			$product->setName ( $request->getParameter ( 'product_name' ), 'name' );
			$product->setDescription ( $request->getParameter ( 'product_description' ) );
			$categories = Doctrine_Core::getTable ( 'Category' )->createQuery ( 'q' )->where ( 'q.id = ?', $request->getParameter ( 'category' ) )->execute ();
			$product->getCategory ()->add ( $categories [0] );
			$product->getPrice ()->add ( $price );
			$product->getUserUpload ()->add ( $this->getDefaultUser () );
			$price->setProduct ( $product );
			$image->setProduct ( $product );
			$price->save ();
			$image->save ();
			$product->save ();
		}
		$this->categories = Doctrine_Core::getTable ( 'Category' )->createQuery ( 'q' )->where ( 'q.level = ?', 0 )->execute ();
	}
	
	public function getDefaultUser() {
		$users = Doctrine_Core::getTable ( 'User' )->createQuery ( 'q' )->where ( 'q.id = ?', 1 )->execute ();
		return $users [0];
	}
	
	public function getDefaultStore() {
		// default store is returned
		$stores = Doctrine_Core::getTable ( 'Store' )->createQuery ( 'q' )->where ( 'q.id = ?', 1 )->execute ();
		return $stores [0];
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
		system ( 'convert ' . $file ['tmp_name'] . ' -resize 640x640 ' . $filepath );
		return $filepath;
	}
	public function executeRegister(sfWebRequest $request) {
		if ($request->isMethod ( 'post' )) {
			$username = $request->getParameter ( 'username' );
			$password = $request->getParameter ( 'password' );
			$realname = $request->getParameter ( 'realname' );
			$sex = $request->getParameter ( 'sex' );
			$age = $request->getParameter ( 'age' );
			$file = $request->getFiles ( 'headurl' );
			$filepath = $this->saveUploadedImage ( $file );
			$user = new User ();
			$user->setUsername ( $username );
			$user->setPassword ( $password );
			$user->setRealname ( $realname );
			$user->setSex ( $sex );
			$user->setAge ( $age );
			$user->setHeadurl ( $filepath );
			$user->save ();
			$this->getUser ()->setAttribute ( 'user', $user );
			$this->redirect ( $this->generateUrl ( 'default', array ('module' => 'user', 'action' => 'wall' ) ) );
		}
	}
	public function executeLoginRenRen(sfWebRequest $request) {
		$oauth = new RenRenOauth ();
		$this->redirect ( $oauth->getAuthorizeUrl () );
		return sfView::NONE;
	}
	public function executeLogin(sfWebRequest $request) {
		if ($request->isMethod ( 'post' )) {
			$username = $request->getParameter ( 'username' );
			$password = $request->getParameter ( 'password' );
			if ($this->checkUserLogin ( $username, $password ) == 1) {
				$this->redirect ( $this->generateUrl ( 'default', array ('module' => 'user', 'action' => 'wall' ) ) );
			}
		}
	}
	// This function execute the actual user authentication, if the username and password are correct, 1 is returned, otherwise 0 is returned.
	// The password is encrypted by MD5.
	// The current user is stored in session.
	public function checkUserLogin($username, $password) {
		$user = Doctrine_Core::getTable ( 'User' )->createQuery ( 'q' )->where ( 'q.username = ?', $username )->andWhere ( 'q.password = ?', md5 ( $password ) )->execute ();
		if (count ( $user ) == 1) {
			$this->getUser ()->setAttribute ( 'user', $user [0] );
			return 1;
		} else {
			return 0;
		}
	}
	public function executeAuthorizeRenRen(sfWebRequest $request) {
		if ($request->hasParameter ( 'code' )) {
			try {
				$oauth = new RenRenOauth ();
				$code = $request->getParameter ( 'code' );
				$token = $oauth->getAccessToken ( $code );
				$key = $oauth->getSessionKey ( $token ['access_token'] );
				// store the session key and user id in the user session
				$this->getUser ()->setAttribute ( 'renren_session_key', $key ['renren_token'] ['session_key'] );
				$this->getUser ()->setAttribute ( 'renren_user_id', $key ['user'] ['id'] );
 				$this->getUser ()->setAttribute ( 'user_type', 'RenRen' );
 				$this->RenRenUserArray = Doctrine_Core::getTable ( 'RenRenUser' )->find ( $key ['user'] ['id']);
 				if (empty ( $this->RenRenUserArray )) {
 					// if the first time
 					$this->firstLogin = true;
 					$this->initRenRen ();
 				} else {
 					// update the database
					$this->firstLogin = false;
					$this->updateRenRen ();
 				}
			} catch ( Exception $e ) {
				$this->foo=$e->getMessage();
			}
		}
		$this->getUser ()->setAttribute ( 'user_id', $this->RenRenUser->getUserId () );
		$this->getUser ()->setAttribute ( 'user_real_name', $this->RenRenUser->getName () );
		$this->redirect ( $this->generateUrl ( 'default', array ('module' => 'user', 'action' => 'wall' ) ) );
	}
	private function initRenRen() {
		$this->user = new User ();
		$this->user->setUsertype ( 'RenRen' );
		$this->user->save ();
		$this->RenRenUser = new RenRenUser ();
		$this->updateUserRenRen ( $this->RenRenUser );
		$this->RenRenUser->save ();
	}
	private function updateRenRen() {
		$this->updateUserRenRen ( $this->RenRenUser );
		$this->RenRenUser->save ();
	}
	
	private function updateUserRenRen(&$user) {
		// pass by reference
		// modify $user in the function
 		$client = new RenRenClient ();
		$client->setSessionKey ( $this->getUser ()->getAttribute ( 'renren_session_key' ) );
		$userProfileInfo = $client->POST ( 'users.getProfileInfo', array ($this->getUser ()->getAttribute ( 'renren_user_id' ), 'base_info, friends_count' ) );
		$user->setId ( $userProfileInfo ['uid'] );
		$user->setName ( $userProfileInfo ['name'] );
		$user->setSex ( $userProfileInfo ['base_info'] ['gender'] );
		$user->setNetworkname ( $userProfileInfo ['network_name'] );
		$user->setHeadurl ( $userProfileInfo ['headurl'] );
		$user->setFriendscount ( $userProfileInfo ['friends_count'] );
		$user->setBirthyear ( $userProfileInfo ['base_info'] ['birth'] ['birth_year'] );
		$user->setBirthmonth ( $userProfileInfo ['base_info'] ['birth'] ['birth_month'] );
		$user->setBirthday ( $userProfileInfo ['base_info'] ['birth'] ['birth_day'] );
		$user->setHometownprovince ( $userProfileInfo ['base_info'] ['hometown'] ['province'] );
		$user->setHometowncity ( $userProfileInfo ['base_info'] ['hometown'] ['city'] );
		if ($this->firstLogin) {
			$user->setUserId ( $this->user->getId () );
		}
	}
}
