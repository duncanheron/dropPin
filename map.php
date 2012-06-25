<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/site.inc.php';

pageOpen("map.php");
pageRender();

renderInfoMap();

pageClose();


function renderInfoMap()
{
	global $db;
	
	$sql = "SELECT * FROM map";
	$mapItems = $db->get_results($sql);
	foreach($mapItems as $map)
	{
		$mapPins[] = array(
					"id" => $map->id,
					"title" => $map->title,					
					"xcoord" => $map->xcoord,
					"ycoord" => $map->ycoord
					);
	}
	//bk_debug('{"markers": '.json_encode($mapPins).'}');
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js" ></script></script>
	<link rel="stylesheet" href="/js/dropPin/dropPin.css" type="text/css" />
	<script type="text/javascript" src="/js/dropPin/dropPin.js"></script>
	<script type="text/javascript" src="/js/qtip/jquery.qtip.min.js"></script>
	<link type="text/css" rel="stylesheet" href="/js/qtip/jquery.qtip.css" />
	<script type="text/javascript">
				$(document).ready(function() {
					
			        $('#map').placePin2({
					  	fixedHeight:495,
					  	fixedWidth:700,
					  	cursor: 'pointer',
					  	pinclass: 'qtipinfo',
					  	backgroundImage: '/map/St-Helena-Island-Map.jpg',
					  	pin: '/map/default.png',
					  	pinDataSet: <?php echo '{"markers": '.json_encode($mapPins).'}' ;?>
					});
					
					$('.qtipinfo').each(function() {
						$(this).qtip({				
							content: {
								text: 'Loading...', // The text to use whilst the AJAX request is loading
								ajax: {
									url: $(this).attr('rel'),
									type: 'GET',  // POST or GET
									once: true,							
									success: function(data, status) {
										// Process the data
						 
										// Set the content manually (required!)
										this.set('content.text', data);
									}
								}
							},
							position: {
								at: 'bottom center', // Position the tooltip above the link
								my: 'top center',
								viewport: $(window), // Keep the tooltip on-screen at all times
								effect: false // Disable positioning animation
							},
							show: {
								
								solo: true // Only show one tooltip at a time
							},
							hide: {
								 event:'mouseleave',
								 delay: 900,
								 fixed: true
							},
							style: {
								classes: 'ui-tooltip-wiki ui-tooltip-light ui-tooltip-shadow'
							}
						});
					
					});	
				});
	</script>
	<div id="map"></div>
	<?php	
}
?>