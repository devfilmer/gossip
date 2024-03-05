<!DOCTYPE html>
<html>
<head><script data-ad-client="ca-pub-9264799538995539" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><meta charset="UTF-8">
  <meta name="description" content="Commentary on latest news, celebrities, politics, and gossip">
  <meta name="keywords" content="news,celebrities,politics,gossip,spoiled, pickle,thanksgiving, police, slammed"><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-44249223-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-44249223-13');
</script>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="picklestyle.css">	
</head>
<body>

	
<?php
$servername = "p3plcpnl1183.prod.phx3.secureserver.net";
$username = "spoiledpickle";
$password = "TheMan333!";
$dbname = "spoiledpickle";
$usertable = "kingofcream";

// Creams
$bluebell = 0;
if(isset($_POST['bluebell']))
{$bluebell = 1;
}
$benandjerrys = 0;
if(isset($_POST['benandjerrys']))
{$benandjerrys = 1;
}
$breyers = 0;
if(isset($_POST['breyers']))
{$breyers = 1;
}
$haagendaz = 0;
if(isset($_POST['haagendaz']))
{$haagendaz = 1;
}
$edys = 0;
if(isset($_POST['edys']))
{$edys = 1;
}
$magnum = 0;
if(isset($_POST['magnum']))
{$magnum = 1;
}
$baskinrobbins = 0;
if(isset($_POST['baskinrobbins']))
{$baskinrobbins = 1;
}
$halotop = 0;
if(isset($_POST['halotop']))
{$halotop = 1;
}
$bluebunny = 0;
if(isset($_POST['bluebunny']))
{$bluebunny = 1;
}
	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
$query = "SELECT * FROM $usertable";

//$result = mysql_query($query);
$result = $conn->query($query);
if ($result) {
    $userfound = false;
	
	
	  while($row = $result->fetch_assoc()) {
        
	
	
    //while($row = mysql_fetch_array($result)) {
        $bluebell += $row["bluebell"];
		$benandjerrys += $row["benandjerrys"];
		$breyers += $row["breyers"];
		$haagendaz += $row["Haagendaz"];
		$edys += $row["edys"];
		$magnum += $row["magnum"];
		$baskinrobbins += $row["baskinrobbins"];
		$halotop += $row["halotop"];
		$bluebunny += $row["bluebunny"];
		
       
        
    }
    //echo ("my username is: ".$username);
	//echo "<br>record found";
	//echo "<br>bluebell votes: ".$bluebell."<br>";
}
	


$sql = "Update kingofcream set bluebell=$bluebell, benandjerrys =$benandjerrys, breyers=$breyers,Haagendaz = $haagendaz,edys= $edys,magnum=$magnum,baskinrobbins = $baskinrobbins, halotop = $halotop,bluebunny = $bluebunny WHERE id=0";

if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
	//echo "<br>";
	//echo "blue bell votes: ".$bluebell;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
$conn->close();
?>
	
<div class="header">
  <h1>Spoiled Pickle</h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <li><a href = "index.htm">Home</a></li>
      <li><a href = "wtf.htm">WTF</a></li>
      <li><a href = "believe.htm">I Don't Believe This.</a></li>
      <li><a href = "rightthing.htm">Do the Right Thing!</a></li>
    </ul>
	  
	  <br>
	  
	  
	   <hr style="height: 5px" color="#C75000"><br><a target="_blank"  href="https://www.amazon.com/gp/product/B07PRDGYTW/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B07PRDGYTW&linkCode=as2&tag=rougride2016-20&linkId=f03d7e74d66dcb088919b396a9dc69d5"><h1>Spare No Expense!<br>Get Your Game On!</h1><br><img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=US&ASIN=B07PRDGYTW&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=rougride2016-20" ><h2>Oculus Quest All-in-one VR Gaming Headset – 128GB</h2></a><!---<img src="//ir-na.amazon-adsystem.com/e/ir?t=rougride2016-20&l=am2&o=1&a=B07PRDGYTW"   />--->
	  <br>
	  
	  
	   <hr style="height: 5px" color="#C75000"><br>
	 <div style="vertical-align: text-top">
	  <a href="http://coinbase-consumer.sjv.io/c/1412533/582419/9251" style="vertical-align: text-top"><img src="//a.impactradius-go.com/display-ad/9251-582419" border="0" ></a>
	  </div>
  </div>
	
	

  <div class="col-6 col-s-9">
	  <h1>Thank you for your Vote!<br> Click <a href="kingofcreamresults2.php">here</a> to see current results.</h1>
   <p>
	<img src = "images/thumbsup.jpg"/>
   </p>
    <p>


		
		

 </p>
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

</body>
</html>

