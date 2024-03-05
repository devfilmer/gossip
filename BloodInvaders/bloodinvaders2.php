<?php
session_start();

if(!isset($_SESSION['uname']) || !isset($_SESSION['pwd'])){
//	echo '<script>window.location.href = "../oops.php"</script>';
}

if($_SESSION['package'] == "Spoiled Pickle Silver Plan" || $_SESSION['package'] == "Spoiled Pickle Gold Plan" || $_SESSION['package'] == "Spoiled Pickle Platinum Plan"){
	
	
	
}
else
{
//	echo '<script>window.location.href = "../oops.php"</script>';
}
//echo $_SESSION['uname'];
?>
<!doctype html>
<head><title>Blood Invaders (PC)</title>
<style>
canvas {
   image-rendering: -moz-crisp-edges;
  image-rendering: -webkit-crisp-edges;
  image-rendering: pixelated;  
image-rendering: crisp-edges;
background:black;
width:100%;
height: 100%;
display:block;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src = "Invader.js"></script>
<script src = "Barricade.js"></script>
<script src = "Ship.js"></script>
<script src = "MotherShip.js"></script>
<script src = "Bullet.js"></script>

<script src = "bloodinvadersboard2.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
	
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-44249223-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-44249223-13');
</script>

</head>
<body style ="height: 100%; overflow: hidden; ">
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

<div style = "width: 800px; height: 600px; margin:auto" id = "gamebox">
<canvas id = "gamescreen" ></canvas>
</div>


</body>





<script>

</script>

</html>