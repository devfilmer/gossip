<?php
session_start();

//echo $_SESSION['uname'];
?>

<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
  <meta name="description" content="Commentary on latest news, celebrities, politics, and gossip">
  <meta name="keywords" content="news,celebrities,politics,gossip,spoiled, pickle, movies, upcoming"><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-44249223-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-44249223-13');
</script>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="picklestyle.css">	
<title>Movie Watch</title>
</head>
<body>

<div class="header">
  <h1>Spoiled Pickle</h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <?php include 'picklepublicmenu.php';?>
		<?php include 'picklemenu.php';?>
    </ul>
	  <br><br>
	  <a target="_blank" href="https://www.amazon.com/gp/product/B07VGRJDFY/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B07VGRJDFY&linkCode=as2&tag=rougride2016-20&linkId=632608605da18b3a9541869dff7a95f7"><h1>Get Your Game On!</h1><br><img src="images/nintendoswitch.jpg"/></a> <br>
	  
	  <a target="_blank"  href="https://www.amazon.com/gp/product/B07H1YQTC3/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B07H1YQTC3&linkCode=as2&tag=rougride2016-20&linkId=95aa46ea5ea4224b3eefba670b5fe1e7"><img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=US&ASIN=B07H1YQTC3&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL160_&tag=rougride2016-20" >KeySmart Pro - Compact Key Holder w LED Light and Tile Smart Technology</a>
	
  </div>
	

	
	

  <div class="col-6 col-s-9">
    <h1>Movie Watch</h1>
	  <br><br>
	  <div style="height: 510px; width: 100%; overflow-y: scroll">
	<?php
	  $html = "";
	  $url = "https://movieweb.com/rss/movie-trailers/";
	  $xml = simplexml_load_file($url);
		  $html .="<hr><br>";
		  

foreach($xml->channel->children() as $child)
  {
  
	 if ($child->getName() == "item"){
	 $image = $child->enclosure['url'];
		  $title = $child->title;
		  $link =  $child->link;
		  $description = $child->description;
		  $html .= "<a href = '$link'>";
		  $html .= "<p><h2>$title</h2></p>";
		  $html .= "<img src = $image/><br>";
		  $html .= "</a>";
		  $html .= "<p>$description</p><hr><br>";
	 }
	
  }
		  echo $html;
		  /*
	  for ($i=0; $i < 10; $i++)
	  {
		  
		  $image = $xml->channel->item[$i]->enclosure['url'];
		  $title = $xml->channel->item[$i]->title;
		  $link =  $xml->channel->item[$i]->link;
		  $description = $xml->channel->item[$i]->description;
		  $html .= "<a href = '$link'>";
		  $html .= "<p>$title</p>";
		  $html .= "<img src = $image/><br>";
		  $html .= "</a>";
		  $html .= "<p>$description</p><hr><br>";
		  
	  }
	  
	  echo $html;
		  
		  */
		  

	  ?>
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
