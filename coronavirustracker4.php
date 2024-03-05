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
$csvFile = 'corona3.csv';
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

<!---News Style-->
<style>
 table.tableSection {
        display: table;
        width: 100%;
    }
    table.tableSection thead, table.tableSection tbody {
        float: left;
        width: 100%;
    }
    table.tableSection tbody {
        overflow: auto;
        height: 30vh;
    }
    table.tableSection tr {
        width: 100%;
        display: table;
        text-align: left;
    }
    table.tableSection th, table.tableSection td {
        width: 50%;
    }

	#test{
	overflow: auto;
        height: 30vh;
		display:none;
	}
	#result2{
	overflow: auto;
        height: 30vh;
	}
</style>
	
	
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	

var url= 'http://rss.cnn.com/rss/edition_world.rss';
var stuff2 = "";
var objcointelegraph;
$.ajax({
  type: 'GET',
  url: "https://api.rss2json.com/v1/api.json?rss_url=" + url,
  dataType: 'jsonp',
  success: function(data) {
    console.log(data.feed.description); 
    //stuff2 += data.items;    
    console.log(data);
    objcointelegraph = data;
	//alert(data.feed.description);
     //stuff += "<table>";
	
      for(var j=0; j< data.items.length; j++)
	{
		
		
		stuff2 += "<a href = '";
		stuff2 += data.items[j].link;
		stuff2 += "'>";
           stuff2 += data.items[j].title;
		stuff2 += "</a>";
		stuff2 += "<br>";
		stuff2 += "-------------------";
		stuff2 += "<br>";
			
	}
	var thefeed = document.getElementById("test");
		thefeed.innerHTML = "";
		thefeed.innerHTML = stuff2;
	  
	//alert(stuff2);
  }
});

	
</script>
	
	
<script>
	
function bolo(huh){
	//alert("yummy "+huh);
var url= 'http://rss.cnn.com/rss/edition_world.rss';
var stuff2 = "";
var objcointelegraph;
$.ajax({
  type: 'GET',
  url: "https://api.rss2json.com/v1/api.json?rss_url=" + url,
  dataType: 'jsonp',
  success: function(data) {
    console.log(data.feed.description); 
    //stuff2 += data.items;    
    console.log(data);
    objcointelegraph = data;
	//alert(data.feed.description);
     //stuff += "<table>";
	
	 
      for(var j=0; j< data.items.length; j++)
	{
		var str = data.items[j].title;
		//alert(str);
		if (str.search(huh) != -1)
			{
				//alert("now what");
			
		
		stuff2 += "<a href = '";
		stuff2 += data.items[j].link;
		stuff2 += "'>";
           stuff2 += data.items[j].title;
		stuff2 += "</a>";
		stuff2 += "<br>";
		stuff2 += "-------------------";
		stuff2 += "<br>";
			}
			
	}
	var thefeed = document.getElementById("result2");
		
		thefeed.innerHTML += stuff2;
	  //thefeed.innerHTML = "";
	//alert(stuff2);
	  //return (stuff2);
  }
});

	
	
}
</script>
	
	
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="picklestyle.css">	
<title>Coronavirus Tracker</title>
<style>
.button {
  padding: 8px 13px;
  font-size: 12px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #DD8C92;
  border: none;
  border-radius: 8px;
  box-shadow: 0 5px #999;
}

.button:hover {background-color: #BF6364}

.button:active {
  background-color: #BF6364;
  box-shadow: 0 3px #666;
  transform: translateY(2px);
}
			   
			  </style>
	
	

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
  
  <script src="mapstuff/assets/jquery-1.8.2.js"></script>
  
  <script src="jquery-jvectormap.js"></script>
  
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

  
  <script src="mapstuff/assets/jquery-jvectormap-world-mill-en.js"></script>

    <script src="mapstuff/assets/jquery-jvectormap-us-mill-en.js"></script>
 

	

 
  
	
</head>
<body>

<div class="header">
  <h1>Spoiled Pickle</h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <?php include 'picklepublicmenu.php';?>
	  <li><a href = "coronavirususmap.php">Coronavirus USA Map</a></li>
		<?php include 'picklemenu.php';?>
    </ul>
	  <br> <img src = "images/coronavirusmap.png" style="display: none"/>
	  Spoiled Pickle is pleased to provide our coronavirus tracker for our readers.  We will attempt to keep our map as current as we can.  Please see the tracker below.<br>
	  
	  <div id="test"></div>
	  <!--
	   
	  
	 
	  
	  
	  <a target="_blank"  href="https://www.amazon.com/gp/product/B07H1YQTC3/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B07H1YQTC3&linkCode=as2&tag=rougride2016-20&linkId=95aa46ea5ea4224b3eefba670b5fe1e7"><h1>KeySmart Pro - Compact Key Holder w LED Light and Tile Smart Technology</h1><img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=US&ASIN=B07H1YQTC3&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL160_&tag=rougride2016-20" ></a>-->
	
  </div>
	

	
	

  <div class="col-6 col-s-9" style="vertical-align: top">
	  <div style="position: relative; z-index: 1; width: 100%; background: black; color: white; text-align: center; vertical-align:top; display: inline-block"><div style="z-index: 1; float: left; margin: 15px; width: 50px; position:relative; "><img src = "images/coronavirusimg.png" /></div>
	   <div style=" width: 100%; position:absolute; vertical-align: top"><hr color="#6D2400" width="90%" height="45px"></hr></div>
	  <div style="z-index: 2; width: 80%; position:relative;width: 100%">
		  <h2> Coronavirus Tracker </h2><br><div style="float: right;padding-right: 8px; width: 100%; background: black; color: white; text-align: right; vertical-align: top; display: inline-block; font-size: 10px">
		   Last Updated: 15 March, 2020<br>Datasource: <a href="https://www.worldometers.info/coronavirus/">worldometer.com</a><br><hr color="#6D2400" width="90%" height="45px" style="background-color: black"></hr>
	  </div></div>
	  </div><br>
	 
	  
	   
	  <!-- Coronavirus addition -->
	  <div id="map1" style="width: 100%; height: 300px; display:inline-block"></div><br>
	  
	  
	  <div style="padding-bottom:  -bottom: 5px;background: black; width: 100%; color: white; vertical-align: top; text-align: center">
		  <h3>Superpower Countries</h3>
	  <button id="focus-us" class="button">United States</button>
	  <button id="focus-ru" class="button">Russia</button>
	  <button id="focus-cn" class="button">China</button>
	  <button id="focus-de" class="button">Germany</button>
	  <button id="focus-gb" class="button">United Kingdom</button>
	  <button id="focus-fr" class="button">France</button>
	  <button id="focus-jp" class="button">Japan</button>
	  <button id="focus-il" class="button">Israel</button>
	  <button id="focus-sa" class="button">Saudi Arabia</button>
	  <button id="focus-kr" class="button">South Korea</button>
	  <button id="focus-kp" class="button">North Korea</button>
		  
		 
		 <!-- <button id="clear-map">Clear Map</button>  -->
	  </div>
	  
	  <div style="background: black; width: 100%; color: white; vertical-align: top;text-align: center">
		  <h3>Highest Populated Countries</h3>
  	  <button id="focus-cn2" class="button">Focus on China</button>
	  <button id="focus-in" class="button">Focus on India</button>
	  <button id="focus-us2" class="button">Focus on United States</button>
	  <button id="focus-id" class="button">Focus on Indonesia</button>
	  <button id="focus-pk" class="button">Focus on Pakistan</button>
		
	 <!-- <button id="focus-br">Focus on Brazil</button>-->
	  </div>
	  
	  <!--
	<button id="focus-single">Focus on Australia</button>
  
	<button id="focus-multiple">Focus on Australia and Japan</button>
  
	<button id="focus-coords">Focus on Cyprus</button>
  
	<button id="focus-init">Return to the initial state</button>
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
	  <br><br>
	 
	  

	  <div class"col-3 col-2-12">
	<iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=rougride2016-20&marketplace=amazon&region=US&placement=B07SL6ZXBL&asins=B07SL6ZXBL&linkId=3d44b7f36dafcfc06e6384ec33498ba7&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
		<iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=rougride2016-20&marketplace=amazon&region=US&placement=B084DDDNRP&asins=B084DDDNRP&linkId=b63de9e3d4aeecdee942167d1fab8df1&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
		 <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=rougride2016-20&marketplace=amazon&region=US&placement=B01IW7Z74G&asins=B01IW7Z74G&linkId=9352ce595ccc1eca6774c0d7c1d92b64&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
		<iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=rougride2016-20&marketplace=amazon&region=US&placement=B0053BCML6&asins=B0053BCML6&linkId=49b175de4d8b5ad93bc3093f65aeb95f&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
		
	  </div>
  </div>
</div>


<div id="result" ></div>

<div class="footer">
  <p>Spoiled Pickle is strickly commentary and meant for mature audience consumption.</p>
</div>

<script>
  
	//bolo();
  
	jQuery.noConflict();
  
	jQuery(function(){
    
		var $ = jQuery;

		
		$('#focus-us').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {region: 'US', animate: true});
  
			 });
		
		$('#focus-us2').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {region: 'US', animate: true});
  
			 });
		
		$('#focus-ru').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {region: 'RU', animate: true});
  
			 });
      
		$('#focus-cn').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {region: 'CN', animate: true});
  
			 });
		
		$('#focus-cn2').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {region: 'CN', animate: true});
  
			 });
		
		$('#focus-de').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {region: 'DE', animate: true});
  
			 });
		
		$('#focus-gb').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {region: 'GB', animate: true});
  
			 });
		
		$('#focus-fr').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {region: 'FR', animate: true});
  
			 });
		
		
		$('#focus-jp').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {region: 'JP', animate: true});
  
			 });
		
		$('#focus-il').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {region: 'IL', animate: true});
  
			 });
		
		$('#focus-sa').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {region: 'SA', animate: true});
  
			 });
		
		$('#focus-kr').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {region: 'KR', animate: true});
  
			 });
		
		$('#focus-kp').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {region: 'KP', animate: true});
  
			 });
		
		
		$('#clearmap').click(function(){
        /*
			  var myCustomColors = [];
			  myCustomColors = document.getElementById("#viruscount").innerHTML;

    

             $('#map1').series.regions[0].setValues(myCustomColors);
			*/
			 
 
			     
						});
		
		
		
		
		$('#focus-in').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {region: 'IN', animate: true});
  
			 });
		
		$('#focus-id').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {region: 'ID', animate: true});
  
			 });
		
		$('#focus-pk').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {region: 'PK', animate: true});
  
			 });
		
		$('#focus-br').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {region: 'BR', animate: true});
  
			 });
      

		$('#focus-multiple').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {regions: ['AU', 'JP'], animate: true});
      
						});
      

		$('#focus-coords').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {scale: 7, lat: 35, lng: 33, animate: true});
      
						});
      

		$('#focus-init').click(function(){
        
			$('#map1').vectorMap('set', 'focus', {scale: 1, x: 0.5, y: 0.5, animate: true});
 
			     
						});
		
		
		$('#clear-map').click(function(){
			
			
			// var dummy = (document.getElementById("viruscount").innerHTML);
	//alert(dummy);
			
			
			
			
            //alert('what');
			var mapObject = $('#map1').vectorMap('get', 'mapObject');
			//alert('hello');
 	        //$('#map1').vectorMap.series.regions[0].clear();
			 mapObject.series.regions[0].clear();  
			
			/*
			var myCustomColors = {"AF":16,"AL":42,"DZ":48,"AD":5,"AG":1,"AR":45,"AM":26,"AW":2,"AU":300,"AT":860,"AZ":23,"BS":1,"BH":214,"BD":5,"BY":27,"BE":886,"BT":1,"BO":10,"BA":24,"BR":191,"BN":50,"BG":51,"BF":3,"KH":12,"CM":4,"CA":321,"CF":1,"KY":1,"UU":3,"CL":75,"CN":80849,"CO":34,"CG":1,"CR":35,"HR":49,"CU":4,"CW":2,"CY":33,"CZ":253,"DK":864,"DP":696,"DO":11,"CD":2,"EC":37,"EG":126,"GQ":1,"EE":171,"SZ":1,"ET":4,"FO":11,"FI":244,"FR":5423,"GF":7,"PF":3,"GA":1,"GE":33,"DE":5813,"GH":6,"GI":1,"GR":331,"GP":3,"GU":3,"GT":1,"GN":1,"GY":4,"HN":3,"HK":149,"HU":32,"IS":180,"IN":112,"ID":117,"IR":13938,"IQ":124,"IE":170,"IL":213,"IT":24747,"CI":4,"JM":10,"JP":839,"JO":10,"KZ":9,"KE":3,"KW":112,"LV":30,"LB":99,"LI":7,"LT":12,"LU":77,"MO":11,"MY":428,"MV":13,"MT":21,"MQ":10,"MR":1,"YT":1,"MX":43,"MD":23,"MC":2,"MN":1,"MA":28,"NA":2,"NP":1,"NL":1135,"NZ":8,"NG":2,"MK":19,"NO":1254,"OM":22,"PK":53,"PS":38,"PA":43,"PY":7,"PE":71,"PH":140,"PL":125,"PT":245,"PR":4,"QA":401,"RO":139,"RU":63,"RW":5,"RE":7,"KR":8162,"LC":2,"MF":2,"SM":109,"SA":118,"SN":24,"RS":48,"SC":3,"SG":226,"SK":61,"SI":219,"ZA":61,"ES":7843,"LK":18,"BL":1,"VC":1,"SD":1,"SR":1,"SE":1040,"CH":2217,"TW":59,"TH":114,"TG":1,"TT":2,"TN":20,"TR":18,"VI":1,"AE":98,"GB":1391,"UA":3,"UY":6,"US":3535,"UZ":4,"VA":1,"VE":17,"VN":56};
	*/
	
			//alert("not");
			var myCustomColors = JSON.parse(document.getElementById("viruscount").innerHTML.toString());
			//alert(myCustomColors);
			
			//var myCustomColors = "roach";
			//alert ("here i am again:");
			//alert(dummy);
			//alert("now what");
			//alert(myCustomColors);
			 mapObject.series.regions[0].setValues(myCustomColors);
			
			
			/*
			var string = myCustomColors;
var array = string.split(",");
alert(array[0]);
*/
			
			
			// map.series.regions[0].clear();
   //map.series.regions[0].setValues({'ata' : '#328942'});
			
						});
	
  
   
		$('#map1').click(function(){
			var map = $('#map1').vectorMap('get', 'mapObject');
		        var namenow = map.getRegionName(currentcode);
		        name = namenow;
			
			
			
		    // loadnews2(namenow, currentcode);
			
			
			//alert('bad');
 			//alert(name);
			//var map2 = $('#map1').vectorMap('get', 'mapObject');
			name = map.getRegionName(currentcode);
		
			var modal2 = document.getElementById('myModal');
			modal.style.display = "block";
			
			var country = document.getElementById('saywhat');
			country.innerHTML = name + ": " + currentcode;
			var myinfected = "\""+currentcode.toString()+"\"";
			//alert(myCustomColors2[eval(myinfected)]);
			
			var infected = myCustomColors2[eval(myinfected)];
			if (infected ==null){
			infected = "unknown";}
			var parts=infected.toString().split(".");
            var infectedformatted = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (parts[1] ? "." + parts[1] : "");
			//alert(infectedformatted);
			

			
			var stub = "";
			stub += "<br><div style=\"diplay:inline-block; width:100%; height: 100%; backgroundColor: black: color:white\">OK</div>";
			country.innerHTML = "<h1>" + country.innerHTML +"</h1>"+ "<h2>Number Infected: " + infectedformatted +"</h2>" + "<br><div id='result2'></div>";
			
			var temp = document.getElementById("result2");
			temp.innerHTML = "";
			//loadnews(namenow,currentcode);
			
			bolo(name);
			bolo(currentcode);
			//var temp = document.getElementById("test");
			//var temp2 = document.getElementById("result2");
			//temp2.innerHTML = temp.innerHTML;
			//temp2.innerHTML = "";
			//temp2.innerHTML += bolo(name);
			//temp2.style.alignmentBaseline = "left";
				
		});
		
		
		
		
		
		
		var myCustomColors2 = JSON.parse(document.getElementById("viruscount").innerHTML.toString());
		
		//	 mapObject.series.regions[0].setValues(myCustomColors);
			
			
		
		
		var map = $('#map1').vectorMap({
        //var map = new jvm.Map({
			map: 'world_mill_en',
                        backgroundColor: '#CCCCCC',
			panOnDrag: true,
   
			onRegionClick: function(event,code){
				currentcode = code;
				
				name = code;
      				rookie();
      			    
    			},
                        
			focusOn: {
          
				x: 0.5,
          
				y: 0.5,
          
				scale: 0.75,
          
				animate: true
        
				},
        
			series: {
          
				regions: [{
            
				scale: ['#FFc0cb', '#7F0000'],
            
				normalizeFunction: 'polynomial',
            
				values: myCustomColors2/*{
              
					"AF": 16.63,
              
					"AL": 11.58,
              
					"DZ": 158.97,
              
					"AO": 85.81,
              
					"AG": 1.1,
              "AR": 351.02,
              "AM": 8.83,
              "AU": 1219.72,
              "AT": 366.26,
              "AZ": 52.17,
              "BS": 7.54,
              "BH": 21.73,
              "BD": 105.4,
              "BB": 3.96,
              "BY": 52.89,
              "BE": 461.33,
              "BZ": 1.43,
              "BJ": 6.49,
              "BT": 1.4,
              "BO": 19.18,
              "BA": 16.2,
              "BW": 12.5,
              "BR": 2023.53,
              "BN": 11.96,
              "BG": 44.84,
              "BF": 8.67,
              "BI": 1.47,
              "KH": 11.36,
              "CM": 21.88,
              "CA": 1563.66,
              "CV": 1.57,
              "CF": 2.11,
              "TD": 7.59,
              "CL": 199.18,
              "CN": 5745.13,
              "CO": 283.11,
              "KM": 0.56,
              "CD": 12.6,
              "CG": 11.88,
              "CR": 35.02,
              "CI": 22.38,
              "HR": 59.92,
	       "CU": 12.75,
              "CY": 22.75,
              "CZ": 195.23,
              "DK": 304.56,
              "DJ": 1.14,
              "DM": 0.38,
              "DO": 50.87,
              "EC": 61.49,
              "EG": 216.83,
              "EH": 216.83,
              "SV": 21.8,
              "GQ": 14.55,
              "ER": 2.25,
              "EE": 19.22,
              "ET": 30.94,
              "FJ": 3.15,
              "FI": 231.98,
              "FR": 2555.44,
              "GA": 12.56,
              "GL": 1.04,

              "GM": 1.04,
              "GE": 11.23,
              "DE": 3305.9,
              "GH": 18.06,
              "GR": 305.01,
              "GD": 0.65,
              "GT": 40.77,
              "GN": 4.34,
              "GW": 0.83,
              "GY": 2.2,
              "HT": 6.5,
              "HN": 15.34,
              "HK": 226.49,
              "HU": 132.28,
              "IS": 12.77,
              "IN": 1430.02,
              "ID": 695.06,
              "IR": 337.9,
              "IQ": 84.14,
              "IE": 204.14,
              "IL": 201.25,
              "IT": 2036.69,
              "JM": 13.74,
              "JP": 5390.9,
              "JO": 27.13,
              "KZ": 129.76,
              "KE": 32.42,
              "KI": 0.15,
              "KR": 986.26,
              "KW": 117.32,
              "KG": 4.44,
              "LA": 6.34,
              "LV": 23.39,
              "LB": 39.15,
              "LS": 1.8,
              "LR": 0.98,
              "LY": 77.91,
              "LT": 35.73,
              "LU": 52.43,
              "MK": 9.58,
              "MG": 8.33,
              "MW": 5.04,
              "MY": 218.95,
              "MV": 1.43,
              "ML": 9.08,
              "MT": 7.8,
              "MR": 3.49,
              "MU": 9.43,
              "MX": 1004.04,
              "MD": 5.36,
              "MN": 5.81,
              "ME": 3.88,
              "MA": 91.7,
              "MZ": 10.21,
              "MM": 35.65,
              "NA": 11.45,
              "NP": 15.11,
              "NL": 770.31,
              "NZ": 138,
              "NI": 6.38,
              "NE": 5.6,
              "NG": 206.66,
              "NO": 413.51,
              "OM": 53.78,
              "PK": 174.79,
              "PA": 27.2,
              "PG": 8.81,
              "PY": 17.17,
              "PE": 153.55,
              "PH": 189.06,
              "PL": 438.88,
              "PT": 223.7,
              "QA": 126.52,
              "RO": 158.39,
              "RU": 1476.91,
              "RW": 5.69,
              "WS": 0.55,
              "ST": 0.19,
              "SA": 434.44,
              "SN": 12.66,
              "SO": 12.66,
              "RS": 38.92,
              "SC": 0.92,
              "SL": 1.9,
              "SG": 217.38,
              "SK": 86.26,
              "SI": 46.44,
              "SB": 0.67,
              "ZA": 354.41,
              "ES": 1374.78,
              "LK": 48.24,
              "KN": 0.56,
              "LC": 1,
              "VC": 0.58,
              "SD": 65.93,
              "SR": 3.3,
              "SS": 3.3,
              "SZ": 3.17,
              "SE": 444.59,
              "CH": 522.44,
              "SY": 59.63,
              "TW": 426.98,
              "TJ": 5.58,
              "TZ": 22.43,
              "TH": 312.61,
              "TL": 0.62,
              "TG": 3.07,
              "TO": 0.3,
              "TT": 21.2,
              "TN": 43.86,
              "TR": 729.05,
              "TM": 0,
              "UG": 17.12,
              "UA": 136.56,
              "AE": 239.65,
              "GB": 2258.57,
              "US": 500.18,
              "UY": 40.71,
              "UZ": 37.72,
              "VU": 0.72,
              "VE": 285.21,
              "VN": 101.99,
              "YE": 30.02,
              "ZM": 15.69,
              "ZW": 5.57
			  
			  
            }*/
          }]
        }
      });
    })
  





</script>



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

