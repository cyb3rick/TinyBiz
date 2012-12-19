<head>
    <meta charset="utf-8">
    <title>TiniByz | The alternative for small businesses</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      
      /* home.php */
      .carousel-inner {	
			padding-top:10px;
			padding-bottom:20px;		
	  }	  
	  .box-shadow {
		  background-color:white;
		  -moz-box-shadow: 5px 5px 5px #ccc; /* Firefox */
		  -webkit-box-shadow: 5px 5px 5px #ccc; /* Safari, Chrome */
		  box-shadow: 5px 5px 5px #ccc; /* CSS3 */
		  border-radius:5px;
		}
		.front-special-description {
			color: #666;	
			font-size: 12px;		
		}
		/* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
      text-align: justify;
    }
		
    </style>
    
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    
    
    <!-- google geolocation scripts -->
    <script src="http://maps.google.com/maps?file=api&v=2&sensor=false&key=ABQIAAAAcBlCkeOPJin8k-qaQXzU7BQGBuCPWxdxlOb3ZaeDB3q0vlcH5BTABsi26yLfIbuiM1r2veUY3cXjEA" type="text/javascript"></script>
	<script type="text/javascript">
	
		var map = null;
		var geocoder = null;

		// called from body onload, this function initializes the map
		// and centers it at Puerto Rico with a zoom of 8 
		function initialize() {

			$default_zoom_level = 8;
			 
			if (GBrowserIsCompatible()) {
				map = new GMap2(document.getElementById("map_canvas"));
				map.setCenter(new GLatLng(18.220833, -66.590149), $default_zoom_level); // 18.220833/-66.590149 => Lat/Lng of PR, Zoom 8 
				map.addControl(new GLargeMapControl()); // add zooming controls 
				geocoder = new GClientGeocoder();
			}
			
		}

		// parses the coordinates 
		function getLatLng (point) {
			
		     var matchll = /\(([-.\d]*), ([-.\d]*)/.exec( point );
		      if ( matchll ) {
		       var lat = parseFloat( matchll[1] );
		       var lon = parseFloat( matchll[2] );
		       lat = lat.toFixed(6);
		       lon = lon.toFixed(6);
		
		      } else {
		       var message = "<b>Sorry, couldn't find location of </b>:" + point + "";
		       var messagRoboGEO = message;
		      }
		
		     return new GLatLng(lat, lon);
		     
		 }

		// calls getLatLang() and with those coordinates it 
		// places a marker on the map and sets the zoom level
		// to 15 for a more detailed view of the streets. 
		function searchPlace(place) {
			if (geocoder) {
		
				geocoder.getLatLng(place, function(point) {
		
					if (!point) {
						alert(place + " not found");
					} else {
		
						var latLng = getLatLng (point);
						var info = "<h3>"+place+"</h3>Latitude: "+latLng.lat()+"  Longitude:"+latLng.lng();
		
						var marker = new GMarker(point);
						map.addOverlay(marker);
						map.setZoom(15); 
						marker.openInfoWindowHtml(info);
		
					}
				});
			}
		}

	</script>
  </head>
