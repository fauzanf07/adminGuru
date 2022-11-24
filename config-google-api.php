<?php 
	require_once 'vendor/autoload.php';	
	require_once 'server.php';	
	$clientID = "162998556341-adcfjivoriaiqkeql7d1rvle8eqk9a3c.apps.googleusercontent.com";
	$clientSecret = "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";
	$redirectUri = $mainUrl. "backend/login/signinWithGoogle.php";

	$client = new Google_Client();
	$client->setClientId($clientID);
	$client->setClientSecret($clientSecret);
	$client->setRedirectUri($redirectUri);
	$client->addScope("email");
	$client->addScope("profile");

 ?>