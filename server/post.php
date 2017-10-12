<?php
	ini_set("session.save_path", "/var/www/html/Final/sessionData");
	session_start();

	if(isset($_SESSION['user_id'])){
		$statuspost = isset($_POST['tweet'])?$_POST['tweet']:null;
		$statuspost = htmlspecialchars($statuspost);

		$_SESSION['tweet'] = $statuspost." #CM0677";
		
		header("Location: twitter_login.php");
	} else {
		header("Location: ../index.php");
	}
?>