<?php

	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js" ></script></script>
	<link rel="stylesheet" href="dropPin/dropPin.css" type="text/css" />
	<script type="text/javascript" src="dropPin/dropPin.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {

	    $('#map').dropPin({
			  	fixedHeight:413,
			  	fixedWidth:700,
			  	cursor: 'crosshair',
			  	pinclass: 'qtipinfo'
		});

	});
	</script>
	<p><a href="index.php">Show stored pins on a map</a> | <a href="multi.php">Try dropping multiple pins on a map</a></p>
	<div id="map"></div><br />