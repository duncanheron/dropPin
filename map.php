<?php 
	$mapItems = array(
			array("id" => 1, "title" => "map pin 1", "xcoord" => "420","ycoord" => "120"),
			array("id" => 2, "title" => "map pin 2", "xcoord" => "429","ycoord" => "129")
			);
	foreach($mapItems as $map)
	{
		$mapPins[] = array(
				"id" => $map['id'],
				"title" => $map['title'],					
				"xcoord" => $map['xcoord'],
				"ycoord" => $map['ycoord']
				);
	}

	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js" ></script></script>
	<link rel="stylesheet" href="dropPin/dropPin.css" type="text/css" />
	<script type="text/javascript" src="dropPin/dropPin.js"></script>	
	<script type="text/javascript">
	$(document).ready(function() {
		
        $('#map').dropPin('showPins2',{
		  	fixedHeight:495,
		  	fixedWidth:700,
		  	cursor: 'pointer',
		  	pinclass: 'qtipinfo',
		  	pinDataSet: <?php echo '{"markers": '.json_encode($mapPins).'}' ;?>
	});

	$('#map2').dropPin({
		  	fixedHeight:495,
		  	fixedWidth:700,
		  	cursor: 'crosshair',
		  	pinclass: 'qtipinfo'					  	
	});
		
	});
	</script>
	<p>Display pins on a map</p>
	<div id="map"></div><br />
	<p>Drop a pin on a map</p>
<<<<<<< HEAD
	<div id="map2"></div>
=======
	<div id="map2"></div>
>>>>>>> f10b191822b0f9bb717715a124ca658fc65436ea
