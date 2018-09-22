<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("154041157671-pg3b2cp7muq81hrihhqcfuc7qe97rutb.apps.googleusercontent.com");
	$gClient->setClientSecret("LYB-PnHPsGmq1BMbIGjkzxx8");
	$gClient->setApplicationName("Google Login");
	$gClient->setRedirectUri("http://shirba.mtacloud.co.il/GoogleLogin/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
