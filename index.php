<?php
	//include 'server/db_conn.php';
  	require_once('functions.php');

	echo pageIni("Search Bands - TipTop Music");
	echo nav();
?>
		<main>
			<section id="cover" style="background-image: url('img/pexels-photo-325531.jpeg');">
				<h1>LOST SOULS<br />-<br />THE LIFE OF PAULA</h1>
				<a href="#">Read Feature</a>
			</section>
			<section id="about-snip">
				<h1>Lorem ipsum dolor sit amet, mea errem melius in. Usu nisl feugait imperdiet ad, te eam mundi detraxit, ad per movet nostrum indoctum. 
					Prompta eligendi maiestatis id eum.</h1>
				<a href="#"> - MORE INFO -</a>
			</section>
			<section id="home-blocks">
				<article>
					<a href="#">
						<div>
							<p><span></span>Discover</p>
							<p>The Hottest Acts</p>
						</div>
					</a>
					<a href="#">
						<div>
							<p><span></span>Discover</p>
							<p>The Greatest Gigs</p>
						</div>
					</a>
					<a href="#">
						<div>
							<p><span></span>Discover</p>
							<p>The Newest Feature</p>
						</div>
					</a>
					<a href="#">
						<div>
							<p><span></span>Discover</p>
							<p>The Sweetest Community</p>
						</div>
					</a>
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