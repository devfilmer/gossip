<?php
session_start();

if(!isset($_SESSION['uname']) || !isset($_SESSION['pwd'])){
	echo '<script>window.location.href = "oops.php"</script>';
}

if($_SESSION['package'] != "Spoiled Pickle Gold Plan" || $_SESSION['package'] != "Spoiled Pickle Platinum Plan"){
	
	echo '<script>window.location.href = "oops.php"</script>';
	
}
//echo $_SESSION['uname'];
?>


<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
  <meta name="description" content="Commentary on latest news, celebrities, politics, and gossip">
  <meta name="keywords" content="news,celebrities,politics,gossip"><!-- Global site tag (gtag.js) - Google Analytics -->
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

<div class="header">
  <h1>Spoiled Pickle</h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
     <ul>
      <?php include 'picklepublicmenu.php';?>
		<?php include 'picklemenu.php';?>
    </ul>
	  <br>
	  <a href="https://apps.apple.com/us/developer/rough-rider-productions/id377587714#see-all/i-phone-apps"><h2>FREE FOR NEXT TWO WEEKS!</h2><br><img src= "images/gameplace17.png"/></a>
	  <br>
	  <p>
		  <a href="https://www.amazon.com/dp/B07VRD1TT1/ref=as_li_ss_il?th=1&linkCode=li2&tag=rougride2016-20&linkId=c6ed8250c27ebc8ee608dfd948bf917e&language=en_US" target="_blank"><img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B07VRD1TT1&Format=_SL160_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=rougride2016-20&language=en_US" ><h3>Xbox Wireless Controller - Gears 5 Kait Diaz Limited Edition by Microsoft</h3></a>
		  
		  <br><br>
		  
		  
		  <a href="https://www.amazon.com/gp/product/B07DKDMZKT/ref=as_li_ss_il?ie=UTF8&linkCode=li1&tag=rougride2016-20&linkId=0da19767eb947266999c36abd215e22a&language=en_US" target="_blank"><img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B07DKDMZKT&Format=_SL110_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=rougride2016-20&language=en_US" ><h3>TikiTunes Portable Bluetooth 5.0 Indoor/Outdoor Wireless Speaker</h3></a>
	  </p><br><br>
	  

	  
  </div>

  <div class="col-6 col-s-9">
    <h1>What Do the People Think?</h1>
    <p>Exclusively for our Gold and Platinum Members, we are pleased to offer continuous running stats for the following various categories before.  Though this may be viewed as strickly entertainment, it does represent what casual visitors to Spoiled Pickle were willing to vote on and their views.  Note, there are no limits on how many times a person can vote and there are no barriers to the public who can vote.  Enjoy! </p>
	  <br>
	  
	  	<?php	
		if(isset($_SESSION['uname'])){
			
			echo('<form action="cutestpuppycounter.php">
	  <table>
	  	<tr style="text-align:center;  height: 12%;">
	  		<td style="width:30%; height:12%;"><img src="images/trump.jpg" style="width:100%; height:16vw"/></td> 
	  		
	  		<td style="width:30%; height:12%;"><img src = "images/puppy1.jpg" style="width:100%; height:16vw"/></td>
	  		<td style="width:30%; height:12%;"><img src="images/burger.jpg" style="width:100%; height:16vw"/></td>
	  		
	   <tr style="text-align:center;">
	   	<tr style="text-align:center">
	  		
			<td style="width:30%; height:12%;"><a href="jerkresults.htm">Jerk of the Year</a></td> 
			<td style="width:30%; height:12%;"><a href="cuttestpuppy.htm">Cutest Puppy</a></td>
	  		
			<td style="width:30%; height:12%;"><a href="worstburgerchainresults.php">Worst Burger Chain</a></td>
	  		
	   </tr>
	
		  </table>
		  <br><br>
	  <table> 
	   <tr style="text-align:center;  height: 12%;">
	  		<td style="width:30%; height:12%;"><img src="images/ice-cream.jpg" style="width:100%; height:16vw"/></td> 
	  		
	  		<td style="width:30%; height:12%;"><img src = "images/dawson.jpg" style="width:100%; height:16vw"/></td>
	  		<td style="width:30%; height:12%;"><img src="images/iphone11.jpg" style="width:100%; height:16vw"/></td>
	  		
	   <tr style="text-align:center;">
	   	<tr style="text-align:center">
	  		
			<td style="width:30%; height:12%;"><a href="kingofcreamresults2.php">King of Cream</a></td> 
			<td style="width:30%; height:12%;"><a href="baddestbabe.php">Baddest Babe Alive</a></td>
	  		
			<td style="width:30%; height:12%;"><a href="bestphone.php">Best Mobile Phone</a></td>
	  		
	   </tr>
	   	

	 </table>
	  </form>');
	  }
		else{
			echo'Coming soon for members only:  Social Security Countdown Timer';
		}
	   ?>
	  <br>
	  <br>
</div>
	
 
  <div class="col-3 col-s-12">
	  
	  
    <div class="aside">
      <h2>We Hate Politics!</h2>
      <p>Yeah, you guessed it.  We will not go easy on politicians on this site.  If they do something stupid, we ain't gonna let them off the hook.  If they have to get lit up here, it's going to be like fireworks in the sky.</p>
      <h2>We Love Celebrities!</h2>
      <p>You will always be able to come to our site and get an opinion on what Celebrities are up too.</p>
      <h2>News</h2>
      <p>Whether it be the law of the land or what's going on over seas, we might just weigh in.  If something dumb is going on, we're definitely going to speak upon it.</p>
    </div><br>
	  <a href="https://www.amazon.com/SeeKool-Pandora-Console-1920x1080-Extended/dp/B07MC3KL41/ref=as_li_ss_il?crid=12F9IM2VZDDS8&keywords=pandora+video+game+consoles+hd&qid=1576075396&sprefix=pandora+video,aps,326&sr=8-3&linkCode=li2&tag=rougride2016-20&linkId=4940c77bbbee7cbd969f0b052f121713&language=en_US" target="_blank"><img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B07MC3KL41&Format=_SL160_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=rougride2016-20&language=en_US" ><h3>SeeKool 3D Pandora X Arcade Game Console</h3></a><br>
	  
	  <a href="http://www.fluseasonsurvival.com"><img src="images/healthy2.png"/></a>
  </div>
</div>

<div class="footer">
  <p>Spoiled Pickle is strickly commentary and meant for mature audience consumption.</p>
</div>

</body>
</html>

