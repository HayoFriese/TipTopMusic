<?php
	ini_set("session.save_path", "/var/www/html/Final/sessionData");
	session_start();

	session_destroy(); 

	header("Location: ../index.php");
?>