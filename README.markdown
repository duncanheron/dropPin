### dropPin v1
A quick and simple tool to drop markers onto static images avoiding the use of annoying area maps.

### HTML
<div id="map"></div>

### Basic use - dropping a pin
    $('#map').dropPin({
        fixedHeight:495,
        fixedWidth:700
    });
### Displaying already dropped pins
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
    foreach($mapItems as $map)
    {
        $mapPins[] = array(
        "id" => $map['id'],
        "title" => $map['title'],					
        "xcoord" => $map['xcoord'],
        "ycoord" => $map['ycoord']
        );
    }
    $('#map').dropPin('showPins2',{
        fixedHeight:495,
        fixedWidth:700,
        cursor: 'pointer',
        pinclass: 'qtipinfo',
        pinDataSet: <?php echo '{"markers": '.json_encode($mapPins).'}' ;?>
    });

### Options
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
### Authors and Contributors
Duncan Heron