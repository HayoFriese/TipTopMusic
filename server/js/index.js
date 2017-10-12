$(document).ready(function() {
	$("nav > ul > li > #search").click(function(){
		$("#search-nav").toggle();
	});

	getData();

	function getData(){
		$.ajax({
			type: "GET",
			url: "server/indie.php",
			dataType: 'json',
			success: function(result){
				if(result != "Error"){
					for (var i=0; i < result.length; i++) {
						var band = result[i];
						var name = band.BandName;
						var id = band.ID;
						var img;
						if(id==="1"){
							img = "img/Kooks03.jpg";
						} else if(id === "2"){
							img = "img/BSSLounge.jpg";
						} else if(id === "3"){
							img = "img/unspecified-4.jpeg";
						} else {
							img = "img/tumblr_inline_ntpbmrjRJd1svf09g_1280.jpg";
						}
		
						var html = "<a href=\"band.php?id="+id+"\"> \
								<img src=\""+img+"\"> \
								<div> \
									<h2>"+name+"</h2> \
									<h3>Lorem ipsum dolor sit amet, mea errem melius in. Usu nisl feugait imperdiet ad, te eam mundi detraxit, ad per movet nostrum indoctum. \
							Prompta eligendi maiestatis id eum. Lorem ipsum dolor sit amet, mea errem melius in. Usu nisl feugait imperdiet ad, te eam mundi detraxit, ad per movet nostrum indoctum. \
							Prompta eligendi maiestatis id eum. Lorem ipsum dolor sit amet, mea errem melius in. Usu nisl feugait imperdiet ad, te eam mundi detraxit, ad per movet nostrum indoctum. \
							Prompta eligendi maiestatis id eum.</h3> \
									<p>More Info...</p> \
								</div> \
							</a>";
		
						$("#search-blocks > article").append(html);
					};
				} else {
					var html = "<p>Oops! Looks like they don't exist!</p>";
				}	
			}
		});
	}
});