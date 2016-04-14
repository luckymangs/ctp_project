<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Creative Project</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<script src='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.js'></script> <!-- link for the mapbox javascript plug-in-->
		<link href='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.css' rel='stylesheet' /> <!--stylesheet for the mapbox. without this the map would design will crash-->
	<style>
		  body { margin:0; padding:0; }
		  #map { height:600px;
		  width:100%; }
		</style>
	</style>

  </head>


	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.php">Night Life Bristol</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="#">Home</a></li>
											<li><a href="index.php">Log Out</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>


				<article id="main">
						<header>
							<h2>Map</h2>
							<p>Locations to some of the bristols clubs, bars & pubs.</p>
						</header>
						<section class="wrapper style5">
						<h4>Map</h4>		
							<section class="spotlight">
							 <div id="map"></div>
							 <script>
								 //api token for the use of the mapbox libraried and features
							L.mapbox.accessToken = 'pk.eyJ1IjoibWFuZ3MiLCJhIjoiY2lteTJzOGl3MDBlYXZ6bHlpeTVtamcwZCJ9.L-MQ5iflwGjcHPt8OZjm1w';
							var map = L.mapbox.map('map', 'mapbox.streets') // linking it with the html and defining the roadtype
								.setView([51.4545, -2.5879 ], 14); //map co-ordinates set to Bristol

							var myLayer = L.mapbox.featureLayer().addTo(map);
									//L.markers is used to put markers on the map
									var geoJson = [{
										type: 'Feature',
										"geometry": { "type": "Point", "coordinates": [-2.59,51.45]},
										"properties": {
											"url": "http://swxbristol.com/",
											"marker-symbol": "star",
											"marker-color": "#ff8888",
											"marker-size": "large",
											"place":"SWX"
										}
									}, {
										type: 'Feature',
										"geometry": { "type": "Point", "coordinates": [-2.57,51.44]},
										"properties": {
											"url": "http://www.motionbristol.com/",
											"marker-color": "#ff8888",
											"place":"Motion"
											
										}
										}, {
										type: 'Feature',
										"geometry": { "type": "Point", "coordinates": [-2.61,51.45]},
										"properties": {
											"url": "http://www.theklabristol.co.uk/",
											"marker-color": "#ff8888",
											"place":"Thekla"
											
										}
										}, {
										type: 'Feature',
										"geometry": { "type": "Point", "coordinates": [-2.60,51.45]},
										"properties": {
											"url": "http://www.basement45.co.uk/",
											"marker-color": "#ff8888",
											"place":"Basement 45"
											
										}
										}, {
										type: 'Feature',
										"geometry": { "type": "Point", "coordinates": [-2.61,51.45]},
										"properties": {
											"url": "http://www.cosies.co.uk/",
											"marker-color": "#ff8888",
											"place":"Cosies"
											
										}
										}, {
										type: 'Feature',
										"geometry": { "type": "Point", "coordinates": [-2.58,51.46]},
										"properties": {
											"url": "http://www.lakota.co.uk/",
											"marker-color": "#ff8888",
											"place":"Lakota"
											
										}
										}, {
										type: 'Feature',
										"geometry": { "type": "Point", "coordinates": [-2.59,51.45]},
										"properties": {
											"url": "http://www.tb2.co.uk/",
											"marker-color": "#ff8888",
											"place":"Timbuk 2"
											
										}
									}, {
										type: 'Feature',
										"geometry": { "type": "Point", "coordinates": [-2.59,51.45]},
										"properties": {
											"url": "http://www.theoldduke.co.uk/",
											"marker-color": "#ff8888",
											"place":"The Old Duke"
										}
						}];

						// can add custom popups to each using our custom feature properties
						myLayer.on('layeradd', function(e) {
							var marker = e.layer,
								feature = marker.feature;

							// this section will allow for customisation of the content
							var popupContent =  '<a target="_blank" class="popup" href="' + feature.properties.url + '">' +
													'<img src="' + feature.properties.image + '" />' +
													feature.properties.place +
												'</a>';

							// http://leafletjs.com/reference.html#popup
							marker.bindPopup(popupContent,{
								closeButton: false,
								minWidth: 320
							});
						});

						// Add features to the map
						myLayer.setGeoJSON(geoJson);
				</script>
						</section>
					</section>
					</article>			

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							
						</section>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<h2>Top Favourites</h2>
								<p>Some of the favourite clubs, pubs and bars in Bristol.</p>
							</header>
							<ul class="features">
								<li>
									<h3>Motion Bristol (Club)</h3>
									<p>Famed DJs in a matrix of old warehouse spaces with a cobbled front courtyard and riverside area.<a href="http://www.motionbristol.com/"> Click here for more info</a>.</p>
								</li>
								<li>
									<h3>Lakota (Club)</h3>
									<p>Lakota provides a platform for the amazing Bristol music scene. We work with promoters of all sizes to bring you some of Bristol's most fun nights out.<a href="http://www.lakota.co.uk/"> Click here for more info</a></p>
								</li>
								<li>
									<h3>Thekla (Club)</h3>
									<p>Thekla is a former cargo ship moored in the Mud Dock area of Bristol's Floating Harbour, England. The ship was built in Germany in 1958 and worked in the coastal trades.<a href="http://www.theklabristol.co.uk/"> Click here for more info</a></p>
								</li>
								<li>
									<h3>Cosies (Wine Bar/Club)</h3>
									<p>Legendary basement venue in the heart of St Pauls that transforms from daytime wine bar to nighttime bass den
								Cosies has a rightful reputation as one of the city's most legendary party spots. A wine bar by day, when night falls Cosies transforms into one of Bristol's best clubs.
								<a href="http://www.cosies.co.uk/">Click here for more info</a></p>
								</li>
								<li>
									<h3>Basement 45 (Club)</h3>
									<p>Guest and resident DJs mix the beats in this, intimate vaulted nightclub with 2-dance floors.<a href="http://www.basement45.co.uk/">Click here for more info </a></p>
								</li>
								<li>
									<h3>SWX (Club)</h3>
									<p>SWX, a new live music, club and events space opened in September 2015. SWX is located on Nelson Street, in the centre of Bristol.<a href="http://swxbristol.com/">Click here for more info</a></p>
								</li>
							</ul>
						</div>
					</section>

				

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>	
	  <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	
	
	</body>
</html>