<?php
if($sf_user->hasAttribute('user')){
	//$user=$sf_user->getAttribute('user');
	//$content=$user->toArray(false);
	//$userArr['id']=$user->getId();
	//$userArr['username']=$user->getUsername();
	//$userArr['realname']=$user->getRealname();
	echo json_encode($sf_data->getRaw('content'));
}
?>