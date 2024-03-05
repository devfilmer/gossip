<?php
session_start();

//echo $_SESSION['uname'];


if(!isset($_SESSION['uname']) || !isset($_SESSION['pwd'])){
	//echo '<script>window.location.href = "oops.php"</script>';
}

if($_SESSION['package'] == "Spoiled Pickle Gold Plan" || $_SESSION['package'] == "Spoiled Pickle Platinum Plan"){
	
	
	
}
else{
	//echo '<script>window.location.href = "oops.php"</script>';
}
?>

<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
  <meta name="description" content="Commentary on latest news, celebrities, politics, games and gossip">
  <meta name="keywords" content="news,celebrities,politics,gossip,spoiled, pickle, games"><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-44249223-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-44249223-13');
</script>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../picklestyle.css">	
<title>Blood Invaders</title>
	
	<style>
canvas {
   image-rendering: -moz-crisp-edges;
  image-rendering: -webkit-crisp-edges;
  image-rendering: pixelated;  
image-rendering: crisp-edges;
background:black;
width:100%;
height: 80%;
}
</style>

<script src = "Invader.js"></script>
<script src = "Barricade.js"></script>
<script src = "Ship.js"></script>
<script src = "MotherShip.js"></script>
<script src = "Bullet.js"></script>
<script src = "bloodinvadersboard.js"></script>
	
</head>
<body>

<div class="header">
  <h1>Spoiled Pickle</h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <?php include '../picklepublicmenu.php';?>
		<?php include '../picklemenu.php';?>
    </ul>
	  <br><br>
	  <a target="_blank" href="https://www.amazon.com/gp/product/B07VGRJDFY/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B07VGRJDFY&linkCode=as2&tag=rougride2016-20&linkId=632608605da18b3a9541869dff7a95f7"><h1>Get Your Game On!</h1><br><img src="images/nintendoswitch.jpg"/></a> <br>
	  
	
	
  </div>
	

	
	

  <div class="col-6 col-s-9">
	  
	  
   	
	  
	  
	  
	  <audio id = "scratch">
  <source src="scratch.mp3" type="audio/mp3">

Your browser does not support the audio element.
</audio>
<audio id = "motherbuzz">
  <source src="mothershipbuzz.mp3" type="audio/mp3">

Your browser does not support the audio element.
</audio>
<img src = "invader1.png" id="invader1" style = "display:none"/>
<img src = "invader2.png" id="invader2" style = "display:none"/>
<img src = "invader3.png" id="invader3" style = "display:none"/>
<img src = "invader4.png" id="invader4" style = "display:none"/>
<img src = "invader5.png" id="invader5" style = "display:none"/>
<img src = "invader6.png" id="invader6" style = "display:none"/>
<img src = "invader1a.png" id="invader1a" style = "display:none"/>
<img src = "invader2a.png" id="invader2a" style = "display:none"/>
<img src = "invader3a.png" id="invader3a" style = "display:none"/>
<img src = "invader4a.png" id="invader4a" style = "display:none"/>
<img src = "invader5a.png" id="invader5a" style = "display:none"/>
<img src = "invader6a.png" id="invader6a" style = "display:none"/>
<img src = "bullet1.png" id="bullet1" style = "display:none"/>
<div style="width:100%; height:100%">
<canvas id = "gamescreen" ></canvas>
<script>
	
var gscreen = document.getElementById("gamescreen");
	var newheight = gscreen.width;
	gscreen.height = 0.75* newheight;
</script>
</div>
	  
	  
	  
	  
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

