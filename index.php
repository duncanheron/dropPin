<?php
	$mapItems = array(
			array("id" => 1, "title" => "map pin 1", "xcoord" => "420","ycoord" => "120"),
			array("id" => 2, "title" => "map pin 2", "xcoord" => "429","ycoord" => "129"),
			array("id" => 2, "title" => "map pin 3", "xcoord" => "329","ycoord" => "329")
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

		$('#map2').dropPin('showPins',{
			  	fixedHeight:413,
			  	fixedWidth:700,
			  	cursor: 'pointer',
			  	pinclass: 'qtipinfo',
			  	pinDataSet: <?php echo '{"markers": '.json_encode($mapPins).'}' ;?>
		});

	});
	</script>
	<p><a href="map.php">Try dropping a pin on a map</a></p>
	<div id="map2"></div>