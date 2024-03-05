<!DOCTYPE html>
<html>
<head><script data-ad-client="ca-pub-9264799538995539" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><meta charset="UTF-8">
  <meta name="description" content="Commentary on latest news, celebrities, politics, and gossip">
  <meta name="keywords" content="news,celebrities,politics,gossip,spoiled, pickle, members, only, logon">
   <!--<meta http-equiv="refresh" content="5">
  -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-44249223-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-44249223-13');
</script>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="picklestyle.css">	
<title>Spoiled Pickle Membership Portal</title>
<script src="https://d3js.org/d3.v4.min.js"></script>
	
		<script src="http://www.spoiledpickle.com/Chart/samples/utils.js"></script>
	<script src="http://www.spoiledpickle.com/Chart/Chart.bundle.js"></script>
	<style>
	canvas {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	</style>
	<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires"content="-1">
<meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
</head>
<style>
    svg rect {
        fill: orange;
    }

    svg text {
        fill:white;
        font: 10px sans-serif;
        text-anchor: end;
    }
</style>
<body>
	
<?php
// Creams
$bluebell = 0;
$benandjerrys = 0;
$breyers = 0;
$haagendaz = 0;
$edys = 0;
$magnum = 0;
$baskinrobbins = 0;
$halotop = 0;
$bluebunny = 0;

	
	
	

	
	
                /*
		//$url = "http://www.spoiledpickle.com/connection.php?";
		$url = 'http://www.spoiledpickle.com/connection.php?'.'lastname='.$lastname.'&firstname='.$firstname.'&email='.$email;
		echo "alert($url)";
        echo "<script>window.location.href = '$url'; </script>";
        */
        
       //Variables for connecting to your database.
//These variable values come from your hosting account.
$hostname = "p3plcpnl1183.prod.phx3.secureserver.net";
$dbusername = "spoiledpickle";
$dbname = "spoiledpickle";

//These variable values need to be changed by you before deploying
$password = "TheMan333!";
$usertable = "kingofcream";
$yourfield = "Username";
//echo "ya";
//Connecting to your database
mysql_connect($hostname, $dbusername, $password) OR DIE ("Unable to
connect to database! Please try again later.");





mysql_select_db($dbname);

//Fetching from your database table.
$query = "SELECT * FROM $usertable";

$result = mysql_query($query);
$what = array();
if ($result) {
	//echo("we have something");
    $userfound = false;
	
    while($row = mysql_fetch_array($result)) {
        $bluebell = $row["bluebell"];
		$benandjerrys = $row["benandjerrys"];
		$breyers = $row["breyers"];
		$haagendaz = $row["Haagendaz"];
		$edys = $row["edys"];
		$magnum = $row["magnum"];
		$baskinrobbins = $row["baskinrobbins"];
		$halotop = $row["halotop"];
		$bluebunny = $row["bluebunny"];
		//echo "ok";
       
        
    }
	
    //echo ("my username is: ".$username);
	//echo "<br>record found";
	//echo "<br>bluebell votes: ".$bluebell."<br>";
	$what = array($bluebell, $benandjerrys,$breyers, $haagendaz,$edys,$magnum,$baskinrobbins,$halotop,$bluebunny);
	//echo ($what);
}
	
	
   

mysql_close();
	 //echo ("why isn't this working");  
?>		
	
<div class="header">
  <h1>Spoiled Pickle Membership Portal</h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <li><a href = "index.htm">Home</a></li>
      <li><a href = "wtf.htm">WTF</a></li>
      <li><a href = "believe.htm">I Don't Believe This.</a></li>
      <li><a href = "rightthing.htm">Do the Right Thing!</a></li>
      <!--
      
      <li><a href = "conspiracy.htm">Conspiracy Theories</a></li>
      <li><a href = "whatthepeoplethink.php">What the People Think<a/></li>
      <li><a href = "win.htm">Enter to Win</a></li>
      <li><a href = "spoiledgames.htm">Games</a></li>
      <li><a href = "sofa.htm">Sofa</a></li>
      <li><a href = "friend.htm">Friends</a></li>
      
      -->
    </ul>
	  <br><br>
	  <a target="_blank" href="https://www.amazon.com/gp/product/B07VGRJDFY/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B07VGRJDFY&linkCode=as2&tag=rougride2016-20&linkId=632608605da18b3a9541869dff7a95f7"><h1>Get Your Game On!</h1><br><img src="images/nintendoswitch.jpg"/></a> 
	
  </div>
	

	
	

  <div class="col-6 col-s-9">
    <h1>What Is the People's Choice Regarding Ice-Cream</h1><br>
	  <div>
	<table width="100%" cellpadding="10">
		<tr>
			<td colspan = "3"><h1>King of Cream</h1></td>
		<tr>
			<td width="33%" style="vertical-align: top">
	<img src="images/ice-cream.jpg" width="100%"/><br>
	
			</td>
			<td style="font-size:18px; vertical-align: top">So, you wanted to know what the people think.  Well, when it comes to ice cream, our unfolding survey results are below.  It's not to late for you to keep voting for what ice cream is the best.  Spread the Word!  Results are only accessible to members.
			</td>
		</tr>
		<tr height="20px">
			<td colspan="3"></td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center"><div id="container" style="width: 80%; ">
		<canvas id="canvas" width="500" height="500"></canvas>
				</div></td></tr>
		</table>
	</div>
	<script>
// Bar chart
var ctx = document.getElementById("canvas").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  options: {
			   legend: {
			   	display: false
			   }
			   
			},
  data: {
    labels: ["Bluebell", "Ben and Jerry's", "Breyers", "Haagen Daz", "Edys", "Magnum", "Baskin Robbins", "Halo Top", "Blue Bunny"],
    datasets: [{
      //label: 'Current Brand Survey Results',
      data: <? $theplot = "[".$GLOBALS['what'][0].",".$GLOBALS['what'][1].",".$GLOBALS['what'][2].",".$GLOBALS['what'][3].",".$GLOBALS['what'][4].",".$GLOBALS['what'][5].",".$GLOBALS['what'][6].",".$GLOBALS['what'][7].",".$GLOBALS['what'][8]."]";  echo ($theplot); ?>,
	  backgroundColor: ["#94DBD2", "#D2D685","#7E5E2A","#819933","#D07371","#54581D", "#8589D6","#334B1E","#56D23A"],
	  
    }
	/*, {
      label: 'oranges',
      data: [30, 29, 5, 5, 20, 3, 10]
    }*/]
  },
	options: {
        legend: {
			 display: false,
             labels: {
                  fontColor: 'black'
                 }
              },
        title: {
            display: true,
			fontSize: 20,
            fontColor: 'black',
            text: 'King of Cream'
        }     ,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true,
                    fontColor: 'black'
                },
            }],
          xAxes: [{
                ticks: {
                    fontColor: 'black'
                },
            }]
        } 

    }
});
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
<?php 
	
	/*
	echo ("this is a test");
	
	echo ("[".$GLOBALS['what'][0].",".$GLOBALS['what'][1].",".$GLOBALS['what'][2].",".$GLOBALS['what'][3].",".$GLOBALS['what'][4].",".$GLOBALS['what'][5].",".$GLOBALS['what'][6].",".$GLOBALS['what'][7].",".$GLOBALS['what'][8]."]");
	*/
	?>
</body>
</html>

