<?php

	?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link rel="stylesheet" href="dropPin/dropPin.css" type="text/css" />
	<script type="text/javascript" src="dropPin/dropPin.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {

	    $('#map').dropPin('dropMulti',{
			  	fixedHeight:413,
			  	fixedWidth:700,
			  	cursor: 'crosshair',
			  	pinclass: 'qtipinfo'
		});

	});
	</script>
	<p><a href="map.php">Try dropping a single pin on a map</a> | <a href="index.php">Show stored pins on a map</a></p>
	<div id="map"></div><br />