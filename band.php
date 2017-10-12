<?php
  	require_once('functions.php');
  	$id = isset($_GET['id'])?$_GET['id']:null;
  	if(isset($_SESSION['user_id'])){
  		$_SESSION['id'] = $id;
  		$img;

  		if($id === null || $id === ""){
  			header("Location: index.php");
  		} else{
  			if($id==="1"){
				$img = "img/Kooks03.jpg";
			} elseif($id === "2"){
				$img = "img/BSSLounge.jpg";
			} elseif($id === "3"){
				$img = "img/unspecified-4.jpeg";
			} else {
				$img = "img/tumblr_inline_ntpbmrjRJd1svf09g_1280.jpg";
			}

			include("server/indieband.php");
			$bandname;

			$json = json_decode($result);
			foreach($json as $item){
			    if($item->ID == $id){
			        $bandname = $item->BandName;
			        $_SESSION['bandname'] = $bandname;
			    }
			}

		echo pageIni($bandname);
		echo nav();

?>
		<main>
			<section id="cover" style="background-image: url('<?php echo $img; ?>');">
				<h1><?php echo $_SESSION['bandname']; ?></h1>
				<a href="#">See Info</a>
			</section>
			<section id="about-snip">
				<h2>About <?php echo $bandname; ?></h2>
				<?php
					require 'server/auth.php';

					if(isset($_SESSION['facebook_access_token'])){
						$accessToken = $_SESSION['facebook_access_token'];
						
						$fbApp = new Facebook\FacebookApp('1424285494258570', '911dcdd8673cfc92f076f3493df287a0');
						$pageUrl;
						
						if($id==="1"){
							$pageUrl = "TheKooksOfficial";
						} elseif($id === "2"){
							$pageUrl = "brokensocialscene";
						} elseif($id === "3"){
							$pageUrl = "girlband";
						} else {
							$pageUrl = str_replace(' ', '', $bandname);
							$pageUrl = strtolower($pageUrl);
						}

						try {
						  	$request = new Facebook\FacebookRequest($fbApp, $accessToken, 'GET', $pageUrl, array("fields"=> "band_members,bio,current_location,hometown,record_label,website"));

							$response = $fb->getClient()->sendRequest($request);
							//the graphedge will contain a collection of events for the page
						   	$graphEdge = $response->getGraphNode();
							//check to see that we have some information returned - if $graphEdge is empty then we don't have
						 	//any event information for tis page
						   	if(isset($graphEdge)) {
								$data = json_decode($graphEdge);
								if(isset($data->bio)){
									$bio = $data->bio;
								} else {
									$bio = "No Bio Available";
								}
								?>
								<article>
								 	<div>
								 		<h3>Details</h3>
								 		<ul>
								 			<li>Label: <?php echo $data->record_label ?></li>
								 			<li>Hometown: <?php echo $data->hometown ?></li>
								 			<li>Current Location: <?php echo $data->current_location ?></li>
								 			<li>Website: <?php echo $data->website ?></li>
								 		</ul>
								 	</div>
								 	<div>
								 		<h3>Members</h3>
								 		<ul>
								 			<?php
								 				if(strpos($data->band_members, "\n") !== false){
								 					$member = explode("\n", $data->band_members);
								 					foreach($member as $value){
									 					echo "<li>$value</li>\n";
									 				}
								 				} elseif(strpos($data->band_members, ", ") !== true){
								 					$member = explode(",", $data->band_members);
								 					foreach($member as $value){
								 						echo "<li>$value</li>\n";
								 					}	
								 				}
								 			?>
								 		</ul>
								 	</div>
								 </article>
								 <div>
								 	<h3>Bio</h3>
								 	<p><?php echo $bio; ?></p>
								</div>
							<?php	
						   	}
						} catch (Facebook\Exceptions\FacebookResponseException $e) {
						  	// When Graph returns an error
						 	echo "<p>Graph returned an error: ".$e->getMessage()."</p>";
						} catch (Facebook\Exceptions\FacebookSDKException $e) {
      						// When validation fails or other local issues
      						echo "<p>Facebook SDK returned an error: ".$e->getMessage()."</p>";
    					}
					} else {	
						$helper = $fb->getRedirectLoginHelper(); 
						$permissions = ['email', 'user_likes']; // optional 
						$loginUrl = $helper->getLoginUrl('http://ec2-34-223-200-193.us-west-2.compute.amazonaws.com/Final/server/login-callback.php', $permissions); 
						echo '<p><a href="'.$loginUrl .'">Log in with Facebook!</a></p>'; 
					}
				?>
			</section>
			<section id="gigs">
				<article>
					<h1>Gigs</h1>
					<p>Hover over a gig to see the distance</p>
					<ul>
					<?php
						include("server/gigs.php");

						$json2 = json_decode($gigs);
						foreach($json2 as $gigs){
						    if($gigs->BandID == $id){
				    		    $location = $gigs->Location;
				    		    $gigdate = $gigs->GigDate;
				    		    $address = $gigs->Address;
				    		    $postcode = $gigs->Postcode;

				    		    echo "<li id=\"distances\" data-location=\"$location\" data-address=\"$address\" data-postcode=\"$postcode\"><p>$location</p><p>$gigdate</p></li>";
						    }
						}

					?>
					</ul>
				</article>
				<article>
						<div id="googleMap"></div>
				</article>
			</section>
			<section id="twitter-feed">
				<h1>Twitter Feed</h1>
				<?php
					if(isset($_SESSION['user_id'])){
						echo "<form method=\"post\" action=\"server/post.php\">";
							echo "<input type=\"text\" name=\"tweet\" max=\"132\" placeholder=\"Share your thoughts!\">\n";
							echo "<input type=\"submit\" name=\"submit\" value=\"Tweet!\">";
						echo "</form>";
					}
				?>
				<p><a id="refresh">Refresh...</a></p>
				<div>

				</div>
			</section>
		</main>
<?php
		echo footer();
?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB0wA7i5yIMCdIuBVlVIzv2clOldFnw4KE"></script>
		<script src="server/js/band.js"></script>
<?php
		echo pageEnd();
		}
  	} else {
  		header("Location: server/asklog.php?id=$id");
  	}
?>