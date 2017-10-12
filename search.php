<?php
	//include 'server/db_conn.php';
  	require_once('functions.php');

	echo pageIni("Search Bands - TipTop Music");
	echo nav();
?>
		<main>
			<section id="search-blocks">
				<h1>Search Results</h1>
				<article>
				</article>
			</section>
		</main>
<?php
	echo footer();
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="server/js/index.js"></script>
<?php
	echo pageEnd();
?>