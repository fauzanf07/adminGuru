<?php 
	require_once 'vendor/autoload.php';	
	require_once 'server.php';	
	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
	$dotenv->load();

	$clientID = $_ENV['CLIENTID'];
	$clientSecret = $_ENV['CLIENTSECRET'];;
	$redirectUri = $mainUrl. "backend/login/signinWithGoogle.php";

	$client = new Google_Client();
	$client->setClientId($clientID);
	$client->setClientSecret($clientSecret);
	$client->setRedirectUri($redirectUri);
	$client->addScope("email");
	$client->addScope("profile");

 ?>