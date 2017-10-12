$(document).ready(function(){
	$("nav > ul > li > #search").click(function(){
		$("#search-nav").toggle();
	});
	var lat = 54.974606;
	var lon = -1.604476;
	var origin = new google.maps.LatLng(lat, lon);

	function getFeed(){
		$.getJSON("./server/twitter.php", function(data){
			var feed = $("#twitter-feed > div");

			$.each(data.statuses, function(i,tweet){
				feed.append("<div>\n \
					\t<div>\n \
						\t\t<img src='"+tweet.user.profile_image_url+"'>\n \
						\t\t<div>\n \
  							\t\t\t<h2>"+tweet.user.name+"</h2>\n \
  							\t\t\t<h3>"+timeFormat(tweet.created_at)+"</h3>\n \
  						\t\t</div>\n \
  					\t</div>\n \
  					\t<p>"+tweet.text+"</p>\n \
  				</div>\n");
			});
		});
	}
	getFeed();

	$("#twitter-feed").on("click", "#refresh", function(){
		$("#twitter-feed > div").empty();
		getFeed();
	});
	
	function timeFormat(time){
		time = time.replace(/(\+[0-9]{4}\s)/ig, "");
		var parsed_date = Date.parse(time);
		var relative = (arguments.length > 1) ? arguments[1] : new Date();
		var timeago = parseInt(((relative.getTime() - parsed_date) / 1000)-(60*60));
		if(timeago < 60){
			return "less than a minute ago";
		}
		else if(timeago < 120){
			return "about a minute ago";
		}
		else if(timeago < (45*60)){
			return (parseInt(timeago / 60)).toString() + "m";
		}
		else if(timeago < (90*60)){
			return (parseInt(timeago / 3600)).toString() + "h";
		}
		else if(timeago < (24*60*60)){
			return (parseInt(timeago / 3600)).toString()+"h";
		}
		else if(timeago < (48*60*60)){
			return "1d";
		}
		else{
			return (parseInt(timeago / 86400)).toString()+"d";
		}
	}

	var map;
	function initialize(){
		var myplace = new google.maps.LatLng(lat,lon)
	 	var mapProp = {
	 		center:myplace,
	 		zoom:6,
	 		mapTypeId:google.maps.MapTypeId.ROADMAP
	 	};
	 	map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
	 	var marker = new google.maps.Marker({
				position: myplace
			});
		marker.setMap(map);

	 	$.getJSON("./server/locations.php", function(data){
			$.each(data, function(i, loc){
				var location = loc.Location;
				var add = loc.Address;
				var pc = loc.Postcode;

				var geocoder = new google.maps.Geocoder();
				var getlatlong = add+", "+pc;

				geocoder.geocode({'address': getlatlong}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
					    var latitude = results[0].geometry.location.lat();
					    var longitude = results[0].geometry.location.lng();

					    latlong = new google.maps.LatLng(latitude, longitude);
						var marker = new google.maps.Marker({
							position: latlong,
							icon: "./img/gmicon.png"
						});
						marker.setMap(map);
				    } 
				}); 
			});
		});
		
	}
	google.maps.event.addDomListener(window, 'load', initialize);

	$("#gigs > article > ul > #distances").hover(function (response, status){
		var postcode = $(this).data("postcode");
		var address = $(this).data("address");
		var location = $(this).data("location");

		var service = new google.maps.DistanceMatrixService();
		var destinationA = address + ", "+postcode;

		service.getDistanceMatrix({
			origins: [origin],
			destinations: [destinationA],
			travelMode: google.maps.TravelMode.WALKING,
			unitSystem: google.maps.UnitSystem.METRIC,
			avoidHighways: false,
			avoidTolls: false
		}, callback);

		function callback (response, status){
			if(status == google.maps.DistanceMatrixStatus.OK){
				var origins = response.originAddresses;
				var destinations = response.destinationAddresses;
	
				for (var i=0; i < origins.length; i++){
					var results = response.rows[i].elements;
					for(var j = 0; j < results.length; j++){
						var element = results[j];
						var distance = element.distance.text;
						var duration = element.duration.text;
						var from = origins[i];
						var to = destinations[j];
	
						$("#gigs > article > p").text("Distance to "+location+": "+distance);
					}
				}
			}
		}
	});
});