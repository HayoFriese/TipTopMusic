<?php 
	require_once 'fb-auth/src/Facebook/autoload.php'; 
	//create an authenticated instance of the Facebook class 
	$fb = new Facebook\Facebook([   
		'app_id' => '1424285494258570', 
		'app_secret' => '911dcdd8673cfc92f076f3493df287a0',  
		'default_graph_version' => 'v2.9',   
	]);  
?> 