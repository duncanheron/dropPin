### dropPin
A quick and simple tool to drop markers onto static images avoiding the use of annoying area maps.
Store pin co-ordinates and draw them back onto the image with css and jQuery.
Allow users to mark where they live on a map without using Google maps(or similar).
However you choose to use it, have fun....

### HTML
```html
<div id="map"></div>
```
### Basic use - dropping a pin - default user event is .on click
```javascript
$('#map').dropPin({
    fixedHeight:495,
    fixedWidth:700
});
```

### Example 1 - click to add a pin
```html
#include the js and css files
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js" ></script>
<link rel="stylesheet" href="/js/dropPin/dropPin.css" type="text/css" />
<script type="text/javascript" src="/js/dropPin/dropPin.js"></script>

#add the script on document ready
<script type="text/javascript">
    $(document).ready(function() {
	
    $('#map').dropPin({
        fixedHeight:495,
        fixedWidth:700,
        backgroundImage: '/images/{some-image.jpg}',
        pin: '/image/{custom-pin-graphic.png}'
    });
});
  
</script>

#add the html div to insert the image map
<div id="map"></div>
```  

### Example 2 - show a single stored pin
```html
#include the js and css files
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js" ></script>
<link rel="stylesheet" href="/js/dropPin/dropPin.css" type="text/css" />
<script type="text/javascript" src="/js/dropPin/dropPin.js"></script>

#add the script on document ready
<script type="text/javascript">
$(document).ready(function() {
	
    $('#map').dropPin('showPin',{
        fixedHeight:495,
        fixedWidth:700,
        backgroundImage: '/images/{some-image.jpg}',
        pin: '/image/{custom-pin-graphic.png}'
        pinX: <?php echo {pinXcoord} ?>,
        pinY: <?php echo {pinYcoord} ?>
        });
});
  
</script>

#add the html div to insert the image map
<div id="map"></div>
```

### Example 3 - show multiple pins from dataset
```html
#include the js and css files
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js" ></script>
<link rel="stylesheet" href="/js/dropPin/dropPin.css" type="text/css" />
<script type="text/javascript" src="/js/dropPin/dropPin.js"></script>

#get the data for the pins(maybe from a database?)
<?php
    $mapItems = array(
    array(
        "id" => 1,
        "title" => "map pin 1",
        "xcoord" => "420",
        "ycoord" => "120"
        ),
    array(
        "id" => 2,
        "title" => "map pin 2",
        "xcoord" => "429",
        "ycoord" => "129"
        )
    );
?>
#set up an array of pin data for plugin use
<?php
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

#add the script on document ready and pass through the pin dataset
<script type="text/javascript">
$(document).ready(function() {
	
    $('#map').dropPin('showPins',{
        fixedHeight:495,
        fixedWidth:700,
        cursor: 'pointer',
        pinclass: 'qtipinfo',
        pinDataSet: <?php echo '{"markers": '.json_encode($mapPins).'}' ;?>
    });
});
  
</script>

#add the html div to insert the image map
<div id="map"></div>
```
### Options
```javascript
fixedHeight: 500,
fixedWidth: 500,
dropPinPath: '/js/dropPin/',
pin: '/js/dropPin/defaultpin.png',
backgroundImage: '',
backgroundColor: '#9999CC',
xoffset : 10,
yoffset : 30, //need to change this to work out icon heigh/width then subtract margin from it
cursor: 'crosshair',
pinclass: '',
userevent: 'click',
hiddenXid: '#xcoord', //used for saving to db via hidden form field
hiddenYid: '#ycoord', //used for saving to db via hidden form field
pinX: false, //set to value if you pass pin co-ords to overirde click binding to position
pinY: false, //set to value if you pass pin co-ords to overirde click binding to position
pinDataSet: '' //array of pin coordinates for front end render
```
### Author
```
Duncan Heron
```
