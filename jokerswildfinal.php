<?php
session_start();

//echo $_SESSION['uname'];
?>

<!DOCTYPE html>
<html>
<head><script data-ad-client="ca-pub-9264799538995539" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><meta charset="UTF-8">
  <meta name="description" content="Commentary on latest news, celebrities, politics, and gossip">
  <meta name="keywords" content="news,celebrities,politics,gossip,spoiled, pickle, Joker's Wild, Game"><!-- Global site tag (gtag.js) - Google Analytics -->
	
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-44249223-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-44249223-13');
</script>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="picklestyle.css">	
<title>Joker's Wild</title>
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
	  <img src="images/guillen/guillen1.png" style="display:none"/>
	 
	  <a target="_blank" href="https://www.amazon.com/gp/product/B07VGRJDFY/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B07VGRJDFY&linkCode=as2&tag=rougride2016-20&linkId=632608605da18b3a9541869dff7a95f7"><h1>Get Your Game On!</h1><br><img src="images/nintendoswitch.jpg"/></a> <br>
	  
	
	
  </div>
	

	
	

  <div class="col-6 col-s-9">
  

<script>

var winner = Math.floor(Math.random() * 3) + 1;
var mymoney = 20000;
var losercard;
var winnercard;

function restart()
{
	mymoney = 20000;
	var mymoneystring = mymoney.toString();
		
		nfObject = new Intl.NumberFormat('en-US')
        mymoneystring = nfObject.format(mymoneystring);
		document.getElementById("themoney").innerHTML = mymoneystring;
		var myobj = document.getElementById("startover");
        myobj.remove();
		var mymessage = document.getElementById("annouce");
		mymessage.style.background = "white";
		mymessage.style.fontSize = "40px";
	
		mymessage.innerHTML = "";
}


function showCard()
{
	
}

function getLoser()
{
	var acard = Math.floor(Math.random() * 55) + 4;
	if (acard == 1 || acard == 2 || acard == 17 || acard == 46 || acard == 18 || acard == 32)
	{
		getLoser();
	}
		losercard = "cards\\images\\card_"+acard+".gif";
		if (acard == 17)
		{
			getLoser();
		}
}

function showWinner()
{
	var acard = Math.floor(Math.random() * 2) + 1;
	if (acard == 1)
	{
		winnercard = "cards\\images\\card_"+18+".gif";
	}
	else
	{
		winnercard = "cards\\images\\card_"+32+".gif";
	}
		
}



function pickCard(thewinner)
{
	if (mymoney>0)
	{
	
	
	if (thewinner == winner)
	{
		showWinner();
		playWinnerAudio();
		var mycard = "card" + thewinner;
		var button1 = document.getElementById(mycard);
		var button1img = document.getElementById("card"+thewinner+"img");
		button1img.src = winnercard;
	    button1.style.background = "yellow";
		mymoney += 5000;
		var mymoneystring = mymoney.toString();
		
		nfObject = new Intl.NumberFormat('en-US')
        mymoneystring = nfObject.format(mymoneystring);
		document.getElementById("themoney").innerHTML = mymoneystring;
		var mymessage = document.getElementById("annouce");
		mymessage.style.background = "green";
		mymessage.style.fontSize = "40px";
		mymessage.style.color = "white";
		mymessage.innerHTML = "You Win!";
		mymessage.style.margin = '0 auto';
	}
	
	else
	{
		
		
		getLoser();
		
		
		
		playLoserAudio();
		var mycard = "card" + thewinner;
		var button1 = document.getElementById(mycard);
		var button1img = document.getElementById("card"+thewinner+"img");
		button1img.src = losercard;
	    button1.style.background = "red";
		mymoney -= 5000;
		var mymoneystring = mymoney.toString();
		
		nfObject = new Intl.NumberFormat('en-US')
        mymoneystring = nfObject.format(mymoneystring);
		document.getElementById("themoney").innerHTML = mymoneystring;
		var mymessage = document.getElementById("annouce");
		mymessage.style.background = "red";
		mymessage.style.fontSize = "40px";
		mymessage.style.color = "white";
		mymessage.innerHTML = "You Lose!";
		mymessage.style.align = "center";
	}
	
	}
	
	
	if (mymoney <= 0)
	{
		playGameOverAudio();
		var mymessage = document.getElementById("annouce");
		mymessage.style.background = "red";
		mymessage.style.fontSize = "40px";
		mymessage.style.color = "white";
		mymessage.innerHTML = "Game Over!";
		mymessage.innerHTML += "<br><div id=\"startover\"  style=\"background-color:yellow;color:black\" onClick=\"restart()\">Restart</div>"
		mymessage.style.align = "center";
		
	}
	
	
	winner = Math.floor(Math.random() * 3) + 1;
	
	
}

</script>
<audio id="myJokerAudio" controls loop>
 
  <source src="jokerstep.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<audio id="myWinnerAudio">
 
  <source src="winner3.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<audio id="myLoserAudio">
 
  <source src="loser.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<audio id="myGameOverAudio">
 
  <source src="gameover.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<!--
<p>Click the buttons to play or pause the audio.</p>

<button onclick="playAudio()" type="button">Play Audio</button>
<button onclick="pauseAudio()" type="button">Pause Audio</button> 
-->
<script>
var jokerplay = document.getElementById("myJokerAudio"); 
jokerplay.play();
var winnerplay = document.getElementById("myWinnerAudio"); 
var loserplay = document.getElementById("myLoserAudio");
var gameoverplay = document.getElementById("myGameOverAudio");
function playWinnerAudio() { 
	pauseWinnerAudio();
	pauseLoserAudio();
  winnerplay.play(); 
} 

function playLoserAudio() { 
	pauseWinnerAudio();
	pauseLoserAudio();
  loserplay.play(); 
} 

function playGameOverAudio() { 
	pauseWinnerAudio();
	pauseLoserAudio();
  gameoverplay.play(); 
} 

function pauseWinnerAudio() { 
  winnerplay.pause(); 
} 

function pauseLoserAudio() { 
  loserplay.pause(); 
} 

</script>



<div style= "float:left;display:inline-block;font-size: 40px; background-color: black; color:white; width: 100%; ">
Joker's Wild<div style= "font-size: 35px; color:white;margin-right:30px">Money: $<span id = "themoney">20000</span>
</div>
</div><br>
<div style = "width:100%; display:inline-block; float:left"><img style="width:30%"; id = "myjoker" src="images\joker.png"/><div id="annouce" style = "width:60%; display:inline-block; text-align:center;float:right"></div>
</div><br><br><br><br><br>
<div style = "width:100%;float:right">
    <div style = "width:100%; background-color:green; color:white; font-size:30px">Pick a card, any card.  Find the Joker to score.
   </div><br>
   <div style = "float:left;width:30%; background-color:green; color:white; font-size:30px"id = "card1"><div onClick ="pickCard(1)"><img id = "card1img" src="cards\images\card_46.gif" width="90%"/></div></div>
   <div style = "float:left;width:30%; background-color:green; color:white; font-size:30px"id = "card2"><div onClick ="pickCard(2)"><img id = "card2img" src="cards\images\card_46.gif" width="90%"/></div></div>
   <div style = "float:left;width:30%; background-color:green; color:white; font-size:30px"id = "card3"><div onClick ="pickCard(3)"><img id = "card3img" src="cards\images\card_46.gif" width="90%"/></div></div>
  
</div>

<script>

function noBlink()
{
	
	document.getElementById("myjoker").src = "images\\joker.png";
	setTimeout(jokerBlink,Math.floor(Math.random() * 10000) + 2000);
}

function jokerBlink()
{
	document.getElementById("myjoker").src = "images\\jokerblink.png";
	setTimeout(noBlink, 100);
}


setTimeout(jokerBlink,3000);

</script>

 

		<?php	
		if(isset($_SESSION['uname'])){
      echo '<br><h2>For members only:</h2><br> <hr style="height: 5px" color="#C75000"><br>And to those who look upon these words wondering is there that much trouble in our armed services?  To those who are asking is there really sexual harassment, racism, bigotry, sexism, nepotism, and just plain old criminal activity in every branch of America\'s armed services... The answer is yes... Our armed services are a cross-section of America.  They suffer from the same ailments that the civilian population suffers from.  And even though the services make every effort to prevent sexual harassment, racism, sexism, and every other ism... there\'s always some that just can\'t seem to rise to the occasion and fulfill the duties that have been bestowed upon them with integrity, grit, and honor.';
		}
		else{
			echo'<br><br><h2><span style = "color:green"><br><br>New Games for Members coming soon. </span> <a href = "login4.php"><br>Log in here.</a><h2><br><h2><span style="color:red">Not a member? </span> <a href="picklesignup.php"><br>Sign Up Here!</a></h2>';
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

