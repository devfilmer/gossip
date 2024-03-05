<?php
session_start();

//echo $_SESSION['uname'];
?>

<!DOCTYPE html>
<html>
<head><script data-ad-client="ca-pub-9264799538995539" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><meta charset="UTF-8">
  <meta name="description" content="Commentary on latest news, celebrities, politics, and gossip">
  <meta name="keywords" content="news,celebrities,politics,gossip,spoiled, pickle, George, floyd, Rayshard, Brooks, Rober, Fuller, Amaud, Arbury, Sean, Reid"><!-- Global site tag (gtag.js) - Google Analytics -->
	
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-44249223-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-44249223-13');
</script>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="picklestyle.css">	
<title>Cycle Of Violence</title>
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
	  <img src="images/rayshardbrooks.png" style="display:none"/>
	 
	  <a target="_blank" href="https://www.amazon.com/gp/product/B07VGRJDFY/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B07VGRJDFY&linkCode=as2&tag=rougride2016-20&linkId=632608605da18b3a9541869dff7a95f7"><h1>Get Your Game On!</h1><br><img src="images/nintendoswitch.jpg"/></a> <br>
	  
	
	
  </div>
	

	
	

  <div class="col-6 col-s-9">
    <h1>Cycle Of Violence!</h1>
   <p>
	<img src="images/rayshardbrooks.png"/>
   </p>
    <p>

		I’ll never forget the day I saw the news discussing the hanging of Robert Fuller in Los Angeles on 10 June 2020.   Even though we don't know the situation yet, it came on the heels of the I can’t breathe, George Floyd, protests.... and before I could process hanging, another black man, Rashard Brooks, was killed by police in Atlanta, GA on Friday on 12 June 2020.  All of this marching... all of these protests... all of this world wide recognition of black lives matter and we still have a clear case of police brutality in Atlanta, GA and an unclear, unthinkable, hanging that needs to be explained in Los Angeles.  
<br> <br>

		<img src="images/georgefloyd3.png"/>
		<br><br>
Hate is hate.  Brutality is brutality... Look, you can’t have a confrontation with someone at a drive through and then when they take off running, shoot them in the back and call it police work.  There are now images of protesters piling up who have endured a myriad of injuries to their bodies at the hands of law enforcement.  Shooting bean bags and rubber bullets are taking their toll... and the people are getting tired of it.  

<br> <br>
		<img src="images/rayshardbrooks2.png" style="width:50%"/><img src="images/seanreid.png" style="width:50%"/><br><br>

If we look throughout history, we can always find moments that appear to account for a shift in one direction or another.... whether it be a battle that ultimately results in victory for one side or another or an incident that causes people to think differently about a social issue, there’s always that moment. I thought we had already had that moment after Amaud Arbury.  I definitely thought that after George Floyd, that moment had come... and then came ...  That’s when I realized the list is much much longer than that.  There are names that never even got national attention.  There are some that got national but there was no movement like what’s happening with the George Floyd protests .  

<br> <br>
		<img src="images/Ahmaud.png"/>
<br><br>

And that’s when it hit me, police brutality fuel by racism is a pandemic  just like the Coronavirus.  Maybe someone should make a map tracker for that at Johns Hopkins.  Maybe they should be deploying the National Guard for that.   Maybe there needs to be a stimulus check for that... because America has tried everything else.  We’ve had civil rights movements.  We’ve lost lives. We’ve passed laws.  We’ve had affirmative action.  We’ve had minority scholarship programs... and African Americans are still lying on the ground with a knees on their necks and bullets in their backs.
		
		<br><br>
		<img src="images/robertfuller.png"/><br><br>

<br> <br>
It’s time for a change America!  If you see or hear something, do something.  With the Coronavirus, we need to put the mask on.  With racism and police brutality, we need to take the mask off.  Expose it for what it is... an unacceptable crime of inhumanity.<br><br>

		<?php	
		if(isset($_SESSION['uname'])){
      echo '<br><h2>For members only:</h2><br> <hr style="height: 5px" color="#C75000"><br>What I am afraid of now is the possibility that the younger generation will not have the patience to protest peacefully.  The cycle of violence is broadcast to us all now 24 hours a day.  We can see much of the injustice of our society on an unprecedented level. Sadly, we are also aware of many incidents that are not making national television and this is where the danger is.  People are fed up with racism, police brutality, lack of opportunity, and injustice.  They want equality.  They want recognition... They want affirmation and acceptance... And they want it now.    <img src="images/floydprotests/floydprotest5.png" style="width: 30%; padding: 10px 0px 10px 10px; float: right"/>My fear now is that the stage is now set for the people to retaliate.  Simply because their system has failed them... And that retaliation will be met with uncompromising force which will lead to more violence, more pain, and more loss of life.  But look on the bright side... The issues are now reaching every dinner table in America... And maybe, just maybe, the America will be a better place after this.<br> <hr style="height: 5px" color="#C75000">';
		}
		else{
			echo'<h2><span style = "color:green">Members can</span> <a href = "login4.php">log in here for more on this article.</a><h2><br><h2><span style="color:red">Not a member? </span> <a href="picklesignup.php"><br>Sign Up Here!</a></h2>';
		}
	   ?>

		
		

		<br><br>
		

	    Did you like this article?  If so, click the like button below to follow us on facebook.<br><br>
		
		<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FSpoiled-Pickle-108307937409209%2F&width=400&layout=standard&action=like&size=large&share=true&height=35&appId=567212453919469" width="400" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>


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

