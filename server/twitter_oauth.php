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


//twitter oauth
$request_token = [];
$request_token['oauth_token'] = $_SESSION['oauth_token'];
$request_token['oauth_token_secret'] = $_SESSION['oauth_token_secret'];

// if (isset($_REQUEST['oauth_token']) && $request_token['oauth_token'] !== $_REQUEST['oauth_token']) {
//   // Abort! Something is wrong.
//   // Something's missing, go back to square 1
//   header('Location: asklog.php');    
// }

//Now we make a TwitterOAuth instance with the temporary request token.
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $request_token['oauth_token'], $request_token['oauth_token_secret']);

//At this point we will use the temporary request token to get the long lived access_token that authorized to act as the user.
$access_token = $connection->oauth("oauth/access_token", array("oauth_verifier" => $_REQUEST['oauth_verifier']));


// Save it in a session var
$_SESSION['access_token'] = $access_token['oauth_token'];
$_SESSION['access_secret'] = $access_secret['oauth_token_secret'];

//Now we make a TwitterOAuth instance with the users access_token
$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

// Let's get the user's info
$user_info = $twitter->get('account/verify_credentials');

$_SESSION['user_id']=$user_info->id;
$uid = $_SESSION['user_id'];
$bandid = $_SESSION['id'];
$tweet = $_SESSION['tweet'];

$status = $twitter->post(
    "statuses/update", [
        "status" => "$tweet"
    ]
);

if(isset($bandid) && $bandid != ""){
	header("Location: ../band.php?id=".$bandid);
} else {
	header("Location: ../index.php");
}
?>