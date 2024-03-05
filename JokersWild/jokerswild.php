<!DOCTYPE html>
<html>


<head>

<script data-ad-client="ca-pub-9264799538995539" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>



<meta charset="UTF-8">
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



<title>My Test Dragor</title>

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
</head>
<body>
<script data-ad-client="ca-pub-9264799538995539" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


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

</body>


</html>