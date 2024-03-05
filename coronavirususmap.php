<?php
session_start();

//echo $_SESSION['uname'];
?>
 <?php
	
	function readCSV($csvFile){
	
    $file_handle = fopen($csvFile, 'r');
    while (!feof($file_handle) ) {
        $line_of_text[] = fgetcsv($file_handle, 1024);
		
	    
    }
    fclose($file_handle);
    return $line_of_text;
}
 
 
// Set path to CSV file
$csvFile = 'coronabystate031820.csv';
  //"AR": 351.02,
$csv = readCSV($csvFile);
	 echo ('<div id = "viruscount" style="display:none">');
	 echo ('{');
	 for ($i = 1; $i < count($csv)-1; $i++)  {
		    
           // echo $csv[$i][1] ."<br />";
		   
		    if ($i < count($csv)-2){
		        echo ("\"".$csv[$i][1]."\"".":".$csv[$i][2].",");
			}
		 	else
			{
				echo ("\"".$csv[$i][1]."\"".":".$csv[$i][2]);
			}
        }
	 echo ('}');
     //echo (';');
	     echo ('</div>');
//echo '<pre>';
//print_r($csv);
	//echo ($csv[0][1]);
//echo '</pre>';


	
	/*
$row = 1;
if (($handle = fopen("corona3.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
	*/
?>

<!DOCTYPE html>
<html>
<head><script data-ad-client="ca-pub-9264799538995539" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><meta charset="UTF-8">
 
  <meta name="description" content="Commentary on latest news, celebrities, politics, and gossip">
  <meta name="keywords" content="news,celebrities,politics,gossip,spoiled, pickle, coronavirus, tracker"><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-44249223-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-44249223-13');
</script>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="picklestyle.css">	
  <title>Coronavirus Tracker USA</title>
	
	<!--- Coronavirus Tracker Addition-->
<style>
body {background: #CCCCCC;font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed;/* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 2vh;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	text-align: center;
}

/* Modal Content */
.modal-content {
  background-color: rgb(0,0,0);;
	color: white;
	font-size: 2vw;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
	text-align: center;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style> 
  <link rel="stylesheet" media="all" href="jquery-jvectormap.css"/>
  <style>
    ul {
      padding: 0;
      list-style: none;
    }

    .jvectormap-legend .jvectormap-legend-tick-sample {
      height: 26px;
    }

    .jvectormap-legend-icons {
      background: white;
      border: black 1px solid;
    }

    .jvectormap-legend-icons {
      color: black;
    }
  </style>

  <script src="mapstuff/tests/assets/jquery-1.8.2.js"></script>
  <script src="mapstuff/jquery-jvectormap.js"></script>
  <script src="mapstuff/lib/jquery-mousewheel.js"></script>

  <script src="mapstuff/src/jvectormap.js"></script>

  <script src="mapstuff/src/abstract-element.js"></script>
  <script src="mapstuff/src/abstract-canvas-element.js"></script>
  <script src="mapstuff/src/abstract-shape-element.js"></script>

  <script src="mapstuff/src/svg-element.js"></script>
  <script src="mapstuff/src/svg-group-element.js"></script>
  <script src="mapstuff/src/svg-canvas-element.js"></script>
  <script src="mapstuff/src/svg-shape-element.js"></script>
  <script src="mapstuff/src/svg-path-element.js"></script>
  <script src="mapstuff/src/svg-circle-element.js"></script>
  <script src="mapstuff/src/svg-image-element.js"></script>
  <script src="mapstuff/src/svg-text-element.js"></script>

  <script src="mapstuff/src/vml-element.js"></script>
  <script src="mapstuff/src/vml-group-element.js"></script>
  <script src="mapstuff/src/vml-canvas-element.js"></script>
  <script src="mapstuff/src/vml-shape-element.js"></script>
  <script src="mapstuff/src/vml-path-element.js"></script>
  <script src="mapstuff/src/vml-circle-element.js"></script>
  <script src="mapstuff/src/vml-image-element.js"></script>

  <script src="mapstuff/src/map-object.js"></script>
  <script src="mapstuff/src/region.js"></script>
  <script src="mapstuff/src/marker.js"></script>

  <script src="mapstuff/src/vector-canvas.js"></script>
  <script src="mapstuff/src/simple-scale.js"></script>
  <script src="mapstuff/src/ordinal-scale.js"></script>
  <script src="mapstuff/src/numeric-scale.js"></script>
  <script src="mapstuff/src/color-scale.js"></script>
  <script src="mapstuff/src/legend.js"></script>
  <script src="mapstuff/src/data-series.js"></script>
  <script src="mapstuff/src/proj.js"></script>
  <script src="mapstuff/src/map.js"></script>

  <script src="mapstuff/tests/assets/jquery-jvectormap-us-aea-en.js"></script>
  <script>
	  
	 jQuery.noConflict();
  
	
    var $ = jQuery; 	
		
	  
    $(function(){
		
	 
		
      var markers = [
         /*   [61.18, -149.53],
            [21.18, -157.49],
            {latLng: [40.66, -73.56], name: 'New York City', style: {r: 8, fill: 'yellow'}},
            {latLng: [41.52, -87.37], style: {fill: 'red', r: 10}},
            {latLng: [35.22, -80.84]},
            {latLng: [31.52, -87.37]}*/
          ],
          values1 = [408, 512, 550, 781],
          values2 = [1, 2, 3, 4],
          values3 = {
            '4': 'bank',
            '5': 'factory'
          };
		
		
		
			
		var myCustomColors2 = JSON.parse(document.getElementById("viruscount").innerHTML.toString());
		
      var map = new jvm.Map({
        container: $('#map1'),
        map: 'us_aea_en',
		    backgroundColor: '#CCCCCC',
        labels: {
          regions: {
            render: function(code){
              var doNotShow = ['US-RI', 'US-DC'];

              if (doNotShow.indexOf(code) === -1) {
               // return code.split('-')[1];
              }
            },
            offsets: function(code){
              return {/*
                'CA': [-10, 10],
                'ID': [0, 40],
                'OK': [25, 0],
                'LA': [-20, 0],
                'FL': [45, 0],
                'KY': [10, 5],
                'VA': [15, 5],
                'MI': [30, 30],
                'AK': [50, -25],
                'HI': [25, 50]*/
              }[code.split('-')[1]];
            }
          },
          markers: {
            render: function(index){
              return 'Marker '+index;
            }
          }
        },
        markers: markers,
        series: {
          markers: [/*{
            attribute: 'fill',
            scale: ['#C8EEFF', '#0071A4'],
            normalizeFunction: 'polynomial',
            values: values1,
            legend: {
              vertical: false
            }
          },{
            attribute: 'r',
            scale: [5, 20],
            normalizeFunction: 'polynomial',
            values: values2
          },{
            attribute: 'image',
            scale: {
              bank: 'assets/icon-bank.png',
              factory: 'assets/icon-factory.png'
            },
            values: values3,
            legend: {
              horizontal: true,
              cssClass: 'jvectormap-legend-icons',
              title: 'Business type'
            }
          }*/],
			
	
			
          regions: [{
            scale: ['#FFc0cb', '#7F0000'],
			  normalizeFunction: 'polynomial',
            attribute: 'fill',
            values: myCustomColors2,
            legend: {
              horizontal: true,
              title: 'Density'
            }/*
          },{
            values: {
              "US-NY": 'blue',
              "US-FL": 'blue'
            },
            attribute: 'fill'
          },{
            scale: {
              redGreen: 'assets/bg-red-green.png',
              yellowBlue: 'assets/bg-yellow-blue.png'
            },
            values: {
              "US-TX": 'redGreen',
              "US-CA": 'yellowBlue'
            }   ,
            attribute: 'fill'*/,
           /* legend: {
              horizontal: true,
              cssClass: 'jvectormap-legend-bg',
              title: 'Density',
              labelRender: function(v){
                return {
                  redGreen: 'Low',
                  yellowBlue: 'High'
                }[v];
              }
            }*/
          }]
        },
        regionsSelectable: false,
        markersSelectable: true,
        markersSelectableOne: true,
        selectedRegions: JSON.parse( window.localStorage.getItem('jvectormap-selected-regions') || '[]' ),
        selectedMarkers: JSON.parse( window.localStorage.getItem('jvectormap-selected-markers') || '[]' ),

        onMarkerTipShow: function(event, tip, index){
          tip.html(tip.html()+' (modified marker)');
        },
        onMarkerOver: function(event, index){
          console.log('marker-over', index);
        },
        onMarkerOut: function(event, index){
          console.log('marker-out', index);
        },
        onMarkerClick: function(event, index){
          console.log('marker-click', index);
        },
        onMarkerSelected: function(event, index, isSelected, selectedMarkers){
          console.log('marker-select', index, isSelected, selectedMarkers);
          if (window.localStorage) {
            window.localStorage.setItem(
              'jvectormap-selected-markers',
              JSON.stringify(selectedMarkers)
            );
          }
        },

        onRegionTipShow: function(event, tip, code){
          tip.html(tip.html());
        },
        onRegionOver: function(event, code){
          console.log('region-over', code, map.getRegionName(code));
        },
        onRegionOut: function(event, code){
          console.log('region-out', code);
        },
        onRegionClick: function(event, code){
         // console.log('region-click', code);
			
				currentcode = code;
				
				name = code;
      				rookie();
				
			var map = $('#map1').vectorMap('get', 'mapObject');
		        var namenow = map.getRegionName(currentcode);
		         name = namenow;
			//alert(name);
			//alert('bad');
 			//alert(name);
			//var map2 = $('#map1').vectorMap('get', 'mapObject');
			name = map.getRegionName(currentcode);
		    
			var modal2 = document.getElementById('myModal');
			modal.style.display = "block";
			
			var country = document.getElementById('saywhat');
			country.innerHTML = name + ": " ;
			var myinfected = "\""+currentcode.toString()+"\"";
			//alert(myCustomColors2[eval(myinfected)]);
			
			var infected = myCustomColors2[eval(myinfected)];
			
			var parts=infected.toString().split(".");
            var infectedformatted = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (parts[1] ? "." + parts[1] : "");

			
			var stub = "";
			stub += "<br><div style=\"diplay:inline-block; width:100%; height: 100%; backgroundColor: black: color:white\">OK</div>";
			country.innerHTML = "<h1>" + country.innerHTML +"</h1>"+ "<br><h2>Number Infected: " + infectedformatted +"</h2>";
			
        },
        onRegionSelected: function(event, code, isSelected, selectedRegions){
		
          console.log('region-select', code, isSelected, selectedRegions);
          if (window.localStorage) {
            window.localStorage.setItem(
              'jvectormap-selected-regions',
              JSON.stringify(selectedRegions)
            );
          }
        },
        onViewportChange: function(e, scale, transX, transY){
            console.log('viewportChange', scale, transX, transY);
        }
      });

      $('.list-markers :checkbox').change(function(){
        var index = $(this).closest('li').attr('data-marker-index');

        if ($(this).prop('checked')) {
          map.addMarker( index, markers[index], [values1[index], values2[index], values3[index]] );
        } else {
          map.removeMarkers( [index] );
        }
      });
      $('.button-add-all').click(function(){
        $('.list-markers :checkbox').prop('checked', true);
        map.addMarkers(markers, [values1, values2, values3]);
      });
      $('.button-remove-all').click(function(){
        $('.list-markers :checkbox').prop('checked', false);
        map.removeAllMarkers();
      });
      $('.button-clear-selected-regions').click(function(){
        map.clearSelectedRegions();
      });
      $('.button-clear-selected-markers').click(function(){
        map.clearSelectedMarkers();
      });
      $('.button-remove-map').click(function(){
        map.remove();
      });
      $('.button-change-values').click(function(){
        map.series.regions[1].clear();
        map.series.regions[1].setValues({
          "US-TX": "black",
          "US-CA": "black"
        });
      });
      $('.button-reset-map').click(function(){
        map.reset();
      });
    });
  </script>
</head>
	<!--
<body>
  <div class="map" style="width: 800px; height: 500px"></div>
  <ul class="list-markers">
    <li data-marker-index="0"><label><input checked type="checkbox"/> Marker 1</label></li>
    <li data-marker-index="1"><label><input checked type="checkbox"/> Marker 2</label></li>
    <li data-marker-index="2"><label><input checked type="checkbox"/> Marker 3</label></li>
    <li data-marker-index="3"><label><input checked type="checkbox"/> Marker 4</label></li>
    <li data-marker-index="4"><label><input checked type="checkbox"/> Marker 5</label></li>
    <li data-marker-index="5"><label><input checked type="checkbox"/> Marker 6</label></li>
  </ul>
  <input type="button" value="Add all" class="button-add-all"/>
  <input type="button" value="Remove all" class="button-remove-all"/>
  &nbsp;&nbsp;&nbsp;
  <input type="button" value="Clear selected regions" class="button-clear-selected-regions"/>
  <input type="button" value="Clear selected markers" class="button-clear-selected-markers"/>
  &nbsp;&nbsp;&nbsp;
  <input type="button" value="Remove map" class="button-remove-map"/>
  &nbsp;&nbsp;&nbsp;
  <input type="button" value="Change values" class="button-change-values"/>
  &nbsp;&nbsp;&nbsp;
  <input type="button" value="Reset map" class="button-reset-map"/>
</body>
	-->
	
<body>

<div class="header">
  <h1>Spoiled Pickle</h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <?php include 'picklepublicmenu.php';?>
	  <li><a href = "coronavirustracker.php">Coronavirus World Map</a></li>
		<?php include 'picklemenu.php';?>
    </ul>
	  <br>
	  
	  
	  <img src = "images/coronavirusmap.png" style="display: none"/>
	  
	  Spoiled Pickle is pleased to provide our coronavirus tracker for our readers.  We will attempt to keep our map as current as we can.  Please see the tracker below.<br>
	  <!--
	  <a target="_blank"  href="https://www.amazon.com/gp/product/B003G30D3W/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B003G30D3W&linkCode=as2&tag=rougride2016-20&linkId=16ffc4451ac017f3f5c1ea7252bcf7e3"><h1>Sarah Palin Bobblehead</h1><img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=US&ASIN=B003G30D3W&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL160_&tag=rougride2016-20" ></a>
	  
	  
	  <br><br>
	  -->
	  
	  <!--
	  <a target="_blank"  href="https://www.amazon.com/gp/product/B07H1YQTC3/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B07H1YQTC3&linkCode=as2&tag=rougride2016-20&linkId=95aa46ea5ea4224b3eefba670b5fe1e7"><h1>KeySmart Pro - Compact Key Holder w LED Light and Tile Smart Technology</h1><img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=US&ASIN=B07H1YQTC3&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL160_&tag=rougride2016-20" ></a>

	  -->
	
  </div>
	

	
	

  <div class="col-6 col-s-9" style="vertical-align: top">
	  <div style="position: relative; z-index: 1; width: 100%; background: black; color: white; text-align: center; vertical-align:top; display: inline-block"><div style="z-index: 1; float: left; margin: 15px; width: 50px; position:relative; "><img src = "images/coronavirusimg.png" /></div>
	   <div style=" width: 100%; position:absolute; vertical-align: top"><hr color="#6D2400" width="90%" height="45px"></hr></div>
	  <div style="z-index: 2; width: 80%; position:absolute">
		  <h2> Coronavirus Tracker </h2></div>
	  </div><br>
	    <div style=" width: 100%; position:relative; vertical-align: top; background-color: black; display: inline-block"></div>
	  
	   <div style="float: right;padding-right: 8px; width: 100%; background: black; color: white; text-align: right; vertical-align: top; display: inline-block; font-size: 10px">
		  Last Updated: 18 March, 2020<br>Datasource: <a href="https://www.cdc.gov/coronavirus/2019-ncov/cases-updates/cases-in-us.html#2019coronavirus-summary">Center for Disease Control and Prevention</a><br><hr color="#6D2400" width="90%" height="45px" style="background-color: black"></hr>
	  </div><br>
	  <!-- Coronavirus addition -->
	    <div id="map1" style="width: 100%; height: 400px"></div>
	
	<!--
  <ul class="list-markers">
    <li data-marker-index="0"><label><input checked type="checkbox"/> Marker 1</label></li>
    <li data-marker-index="1"><label><input checked type="checkbox"/> Marker 2</label></li>
    <li data-marker-index="2"><label><input checked type="checkbox"/> Marker 3</label></li>
    <li data-marker-index="3"><label><input checked type="checkbox"/> Marker 4</label></li>
    <li data-marker-index="4"><label><input checked type="checkbox"/> Marker 5</label></li>
    <li data-marker-index="5"><label><input checked type="checkbox"/> Marker 6</label></li>
  </ul>

-->
	
	<!--
  <input type="button" value="Add all" class="button-add-all"/>
  <input type="button" value="Remove all" class="button-remove-all"/>
  &nbsp;&nbsp;&nbsp;
  <input type="button" value="Clear selected regions" class="button-clear-selected-regions"/>
  <input type="button" value="Clear selected markers" class="button-clear-selected-markers"/>
  &nbsp;&nbsp;&nbsp;
  <input type="button" value="Remove map" class="button-remove-map"/>
  &nbsp;&nbsp;&nbsp;
  <input type="button" value="Change values" class="button-change-values"/>
  &nbsp;&nbsp;&nbsp;


  <input type="button" value="Reset map" class="button-reset-map"/>
-->

<!-- Trigger/Open The Modal -->
<button id="myBtn" style="display: none">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p id="saywhat">Some text in the Modal..</p>
  </div>

</div>


<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


	  
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2>We Hate Politics!</h2>
      <p>Yeah, you guessed it.  We will not go easy on politicians on this site.  If they do something stupid, we ain't gonna let off the hook.  If they have to get lit up here, it's going to be like fireworks in the sky.</p>
      <h2>We Love Celebrities!</h2>
      <p>You will always be able to come to our site and get an opinion on what Celebrities are up too.</p>
      <h2>News</h2>
      <p>Whether it be the law of the land or what's going on over seas, we might just weigh in.  If something dumb is going on, we're definitely going to speak upon it.</p>
    </div>
	  <br>
	  <div class"col-3 col-2-12">
		  <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=rougride2016-20&marketplace=amazon&region=US&placement=B07SMLMFC6&asins=B07SMLMFC6&linkId=552ce7a897ccd5e4d0aada82a22c5073&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
		  <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=rougride2016-20&marketplace=amazon&region=US&placement=B078GZM4H8&asins=B078GZM4H8&linkId=ef35c575aac7c6e5ec9472f4b1a7be66&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
		  <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=rougride2016-20&marketplace=amazon&region=US&placement=B07ST7SDSK&asins=B07ST7SDSK&linkId=e0f2d955d4563a337890dbb65b011691&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
		  <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=rougride2016-20&marketplace=amazon&region=US&placement=B012JIOKM4&asins=B012JIOKM4&linkId=e8c73d4c45e525f6538596a4fd7fb0a3&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
		
	  </div>
  </div>
</div>

<div class="footer">
  <p>Spoiled Pickle is strickly commentary and meant for mature audience consumption.</p>
</div>




<script>
  	var place;
	var currentcode;
	var map;
	var name;
	function rookie()
	{
		
     		
		

	}
	
  </script>



</body>	
	
</html>