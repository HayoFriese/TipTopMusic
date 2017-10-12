<?php
	require_once('../functions.php');

	if(!isset($_SESSION['user_id'])){
		$_SESSION['id'] = isset($_GET['id']) ? $_GET['id']:null;
		echo pageIni2("Oh No! - TipTop Music");
		echo nav2();
?>
	<main>
		<section id="cover">
			<div>
				<h1>OOPS!</h1>
				<h2>You need to log in to access this page!</h2>
				<h2>Would you like to log in?</h2>
			</div>
			<article>
				<a href="twitter_login.php">Yes</a>
				<a href="../search.php">No</a>
			</article>
		</section>
	</main>
<?php
		echo pageEnd();
	} else {
		header("Location: ../search.php");
	}
?>