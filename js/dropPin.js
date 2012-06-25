(function( $ ){

	var defaults = {
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
    }

    $.extend($.fn, {

                
        dropPin: function(options) {           
                 
            var options =  $.extend(defaults, options);
 			
 			$(this).css({'cursor' : options.cursor, 'background-color' : options.backgroundColor , 'background-image' : "url('"+options.backgroundImage+"')",'height' : options.fixedHeight , 'width' : options.fixedWidth});
 			
 			$(this).bind(options.userevent, function (ev) {
	            
	          	var $img = $(ev.target);
	            var offset = $img.offset();
	            var x = ev.pageX - offset.left;
	            var y = ev.pageY - offset.top;
	        	
	        	
	            $('.pin').remove();            
				
		        var xval = (x - options.xoffset);
		        var yval = (y - options.yoffset);
		        var imgC = $('<img class="pin">');
		        imgC.css('top', yval);
		        imgC.css('left', xval);
		        		        
		        imgC.attr('src',  options.pin);
		        
		        imgC.appendTo(this);
		        $(options.hiddenXid).val(xval);
		        $(options.hiddenYid).val(yval);	
		        	        
	        });				
        	
        },
        placePin: function(options) {           
                 
            var options =  $.extend(defaults, options);
 			
 			$(this).css({'cursor' : options.cursor, 'background-color' : options.backgroundColor , 'background-image' : "url('"+options.backgroundImage+"')",'height' : options.fixedHeight , 'width' : options.fixedWidth});
 			
	        var xval = (options.pinX);
	        var yval = (options.pinY);
	        var imgC = $('<img class="pin">');
	        imgC.css('top', yval);
	        imgC.css('left', xval);
	        		        
	        imgC.attr('src',  options.pin);
	        
	        imgC.appendTo(this);
	        $(options.hiddenXid).val(xval);
	        $(options.hiddenYid).val(yval);	
		    
        },
        placePin2: function(options) {           
                 
            var options =  $.extend(defaults, options);
 			
 			$(this).css({'cursor' : options.cursor, 'background-color' : options.backgroundColor , 'background-image' : "url('"+options.backgroundImage+"')",'height' : options.fixedHeight , 'width' : options.fixedWidth});
 			
 			for(var i=0; i < (options.pinDataSet).markers.length; i++)
 			{
 				var dataPin = options.pinDataSet.markers[i];
 				 				 
		        var imgC = $('<img rel="/map-content.php?id='+dataPin.id+'" class="pin '+options.pinclass+'" style="top:'+dataPin.ycoord+'px;left:'+dataPin.xcoord+'px;">');
		        imgC.attr('src',  options.pin);	
		        imgC.attr('title',  dataPin.title);
		        
		        imgC.appendTo(this);
 			}
 				    
        }
        
    });
    
})( jQuery );
