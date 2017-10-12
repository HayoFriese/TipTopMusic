<?php
  ini_set("session.save_path", "/var/www/html/Final/sessionData");
  session_start();
  require 'auth.php';
  $helper = $fb->getRedirectLoginHelper();
  try {
    $accessToken = $helper->getAccessToken();
  }
  catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
  } catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
  }

  if (isset($accessToken)) {
    // Logged in!
    $_SESSION['facebook_access_token'] = (string) $accessToken;
    if(isset($_SESSION['id'])){
        $bandid = $_SESSION['id'];
        header("Location: ../band.php?id=$bandid");
    } else {
        header("Location: ../index.php");
    }
  } else {
    if(isset($_SESSION['id'])){
        $bandid = $_SESSION['id'];
        $url = "../band.php?id=$bandid";
    } else {
        $url = "../index.php";
    }
    echo "There seems to have been an error. Click <a href=\"".$url."\">Here</a> to return.";
  }
?>