<?php
session_start();
require_once 'requires.php';
$oauth=new RenRenOauth();
$code=$_GET['code'];
if(isset($code)){
	$token=$oauth->getAccessToken($code);
	$key = $oauth->getSessionKey($token['access_token']);
	$_SESSION['session_key']=$key['renren_token']['session_key'];
	$_SESSION['uid']=$key['user']['id'];
	header('Location: wall.php');
}
?>