<?php 
	require_once 'vendor/autoload.php';	
	$clientID = "162998556341-m5bkjc0jbj85j6qofut1u088ft3s4a7f.apps.googleusercontent.com";
	$clientSecret = "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";
	$redirectUri = "https://localhost/adminguru/backend/login/signinWithGoogle.php";

	$client = new Google_Client();
	$client->setClientId($clientID);
	$client->setClientSecret($clientSecret);
	$client->setRedirectUri($redirectUri);
	$client->addScope("email");
	$client->addScope("profile");

 ?>