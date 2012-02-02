<?php
session_start();
require_once 'requires.php';
$oauth=new RenRenOauth();
$url=$oauth->getAuthorizeUrl();
echo '<a href="'. $url . '">Authorize</a>';
?>



