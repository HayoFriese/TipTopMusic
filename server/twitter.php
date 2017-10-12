<?php
		ini_set("session.save_path", "/var/www/html/Final/sessionData");
		session_start();

		require "twitteroauth/autoload.php";
		use Abraham\TwitterOAuth\TwitterOAuth;

		$bandname = $_SESSION['bandname'];

		$consumer_key		=	"sYWU0EdPk21Tqs4tSIhHv9VyF";
		$consumer_secret	=	"tUjY7tjq2I78W7ZHsgcNfPk4N6Ad01XAo4PDlB29lQe1Y0PQnn";
		$accessToken		=	"860894052203581440-Nbv3xH0zrONV8abqIxe4nJy1VEQJS6d";
		$accessTokenSercret	=	"dLHAMFtuO68bn70BUGQGYPZGzALXm7CZ5pOAnik8m8NsV";

		$connection = new TwitterOAuth($consumer_key, $consumer_secret, $accessToken, $accessTokenSercret);
		$content = $connection->get("account/verify_credentials");
		$statuses = $connection->get("search/tweets", array("q" => "\"$bandname\" filter:safe"));
		$status = json_encode($statuses, JSON_PRETTY_PRINT);
		echo $status;
?>