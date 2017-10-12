<?php
//These files are directly taken from https://twitteroauth.com/redirect.php
// March 2015
//
// NB Calling header so avoid output
require 'config.php';
require 'twitteroauth/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

ini_set("session.save_path", "/var/www/html/Final/sessionData");
session_start();
if(isset($_SESSION['user_id']) && !isset($_SESSION['tweet'])){
	$bandid = $_SESSION['id'];
	header("Location: ../band.php?id=".$bandid);
} else {
	// The TwitterOAuth instance
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);

	// Requesting authentication tokens, the parameter is the URL we will be redirected to

	$request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));

	// Saving them into the session
	$_SESSION['oauth_token'] = $request_token['oauth_token'];
	$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

	if(isset($_SESSION['oauth_token']) && isset($_SESSION['oauth_token_secret'])){
		// If everything goes well..
		if ($connection->getLastHttpCode()==200){
			// Let's generate the URL and redirect
			$url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
			header('Location: '. $url) ;
			/* Should be finished here.. */
		} else {
		  // It's a bad idea to kill the script, but we've got to know when there's an error.
		  die('Something wrong happened.' . " HTTP Error Code " .  $connection->getLastHttpCode());
		}
	}
}

?>