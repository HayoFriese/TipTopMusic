<?php
ini_set("session.save_path", "/var/www/html/Final/sessionData");
session_start();

function pageIni($title){
    $pageIni = <<<PAGEINI
    <!doctype>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Work+Sans" rel="stylesheet" />
		<link href="resources/tiptop.css" type="text/css" rel="stylesheet" />

		<link rel="icon" href="img/favicon.ico" />

		<title>$title</title>

	</head>
	<body>
PAGEINI;
  $pageIni .="\n";
  return $pageIni;
}
function pageIni2($title){
    $pageIni = <<<PAGEINI
    <!doctype>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Work+Sans" rel="stylesheet" />
		<link href="../resources/tiptop.css" type="text/css" rel="stylesheet" />

		<link rel="icon" href="img/favicon.ico" />

		<title>$title</title>

	</head>
	<body>
PAGEINI;
  $pageIni .="\n";
  return $pageIni;
}

function pageEnd(){
	$pageEnd = <<<PAGEEND
		</body>
	</html>
PAGEEND;
	return $pageEnd;
}

function footer(){
	$footerOut = <<<FOOTOUT
		<footer data-ng-controller-"FooterController">
			<div>
				<ul>
					<p>Address</p>
					<li><p>Northumbria Univeristy</p></li>
					<li><p>2 Ellison Pl</p></li>
					<li><p>NE1 8ST</p></li>
					<li><p>Newcastle upon Tyne</p></li>
					<li><p>United Kingdom</p></li>
				</ul>
				<ul>
					<p>Contact Us</p>
					<li>john.doe@email.com</li>
					<li>0191 232 6002</li>
					<li><br /></li>
					<li><a href="#">Inquiries</a></li>
					<li><br /></li>
				</ul>
				<ul>
					<p>Explore</p>
					<li><a href="#">Magazine</a></li>
					<li><a href="#">Sign In</a></li>
					<li><a href="#">Partnerships</a></li>
					<li><a href="#">Author</a></li>
					<li><a href="#">Subscribe</a></li>
				</ul>
				<ul>
					<p>More Info</p>
					<li><a href="#">About Us</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="cloud.php">Cloud Computing</a></li>
					<li><a href="#">Cookie Policy</a></li>
					<li><a href="#">Terms &amp; Conditions</a></li>
				</ul>
			</div>
			<div>
				<p>&copy; TipTop Music, All Rights Reserved</p>
				<ul>
					<li><a href="#"><img src="img/facebook-logo-white.svg"></a></li>
					<li><a href="#"><img src="img/twitter-logo-white.svg"></a></li>
					<li><a href="#"><img src="img/svg-instagram-logo-icon-white.svg"></a></li>
				</ul>
			</div>
		</footer>
FOOTOUT;
	$footerOut .= "\n";
	return $footerOut;
}

function nav(){
	if(isset($_SESSION['user_id'])){
		$nav = <<<NAVIN
		<nav>
			<a href="index.php"><img src="img/logo.png"></a>
			<ul>
				<li><a href="#">Features</a></li>
				<li><a href="search.php?query=artist">Artists</a></li>
				<li><a href="#">Forums</a></li>
				<li><a href="server/logout.php">Sign Out</a></li>
				<li><a href="#">About</a></li>
				<li><a id="search"><img src="img/magnifying-glass.svg"></a></li>
			</ul>
		</nav>	
		<form id="search-nav" action="search.php" method="request">
			<input type="text" name="search" placeholder="Search...">
			<input type="submit" value="Go">
		</form>
NAVIN;
	} else {
		$nav = <<<NAVOUT
		<nav>
			<a href="index.php"><img src="img/logo.png"></a>
			<ul>
				<li><a href="#">Features</a></li>
				<li><a href="search.php?query=artist">Artists</a></li>
				<li><a href="#">Forums</a></li>
				<li><a href="server/twitter_login.php">Sign In</a></li>
				<li><a href="#">About</a></li>
				<li><a id="search"><img src="img/magnifying-glass.svg"></a></li>
			</ul>
		</nav>	
		<form id="search-nav" action="search.php" method="request">
			<input type="text" name="search" placeholder="Search...">
			<input type="submit" value="Go">
		</form>
NAVOUT;
	}
	$nav .= "\n";
	return $nav;
}
function nav2(){
	if(isset($_SESSION['user_id'])){
		$nav = <<<NAVIN
		<nav>
			<a href="../index.php"><img src="../img/logo.png"></a>
			<ul>
				<li><a href="#">Features</a></li>
				<li><a href="../search.php?query=artist">Artists</a></li>
				<li><a href="#">Forums</a></li>
				<li><a href="../server/logout.php">Sign Out</a></li>
				<li><a href="#">About</a></li>
				<li><a id="search"><img src="../img/magnifying-glass.svg"></a></li>
			</ul>
		</nav>	
		<form id="search-nav" action="../search.php" method="request">
			<input type="text" name="search" placeholder="Search...">
			<input type="submit" value="Go">
		</form>
NAVIN;
	} else {
		$nav = <<<NAVOUT
		<nav>
			<a href="../index.php"><img src="../img/logo.png"></a>
			<ul>
				<li><a href="#">Features</a></li>
				<li><a href="../search.php?query=artist">Artists</a></li>
				<li><a href="#">Forums</a></li>
				<li><a href="../server/twitter_login.php">Sign In</a></li>
				<li><a href="#">About</a></li>
				<li><a id="search"><img src="../img/magnifying-glass.svg"></a></li>
			</ul>
		</nav>	
		<form id="search-nav" action="../search.php" method="request">
			<input type="text" name="search" placeholder="Search...">
			<input type="submit" value="Go">
		</form>
NAVOUT;
	}
	$nav .= "\n";
	return $nav;
}
?>