<?php
session_start();

//echo $_SESSION['uname'];
?>


<!DOCTYPE html>
<html>
<head><script data-ad-client="ca-pub-9264799538995539" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><meta charset="UTF-8">
  <meta name="description" content="Commentary on latest news, celebrities, politics, and gossip">
  <meta name="keywords" content="news,celebrities,politics,gossip,spoiled, pickle, members, only, logon"><!-- Global site tag (gtag.js) - Google Analytics -->
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
<style>
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: none;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: visible;
  width: 30vw;
  background-color: #CCC;
  color: #FFF;
  text-align: left;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
 
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */

.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>

<style>
.modal {
  display: none;
  position: fixed; 
  padding-top: 50px;
  left: 0; 
  top: 0;
  width: 100%;
  height: 100%; 
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.5);
}
.modal-content {
  position: relative; 
  background-color: white;
  padding: 20px; 
  margin: auto; 
  width: 75%;  
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}
.close-btn {
  float: right; 
  color: lightgray; 
  font-size: 24px;  
  font-weight: bold;
}
.close-btn:hover {
  color: darkgray;
}
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}
@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}	
</style>
	


</head>
<body>

<div class="header">
  <h1>Spoiled Pickle Membership Portal</h1>
</div>
    
    


<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <?php include 'picklepublicmenu.php';?>
		
		
	  <?php	
		if(isset($_SESSION['uname'])){
      echo '<li><a href = "conspiracy.php">Conspiracy Theories</a></li>
      <li><a href = "whatthepeoplethink.php">What the People Think<a/></li>
      <li><a href = "win.php">Enter to Win</a></li>
      <li><a href = "spoiledgames.php">Games</a></li>
      <li><a href = "sofa.php">Sofa</a></li>
      <li><a href = "friend.php">Friends</a></li>
	  <li><a href = "logout2.php">Logout</a></li>';
		}
		else
		{
			echo('<script>location.href = "index.php";</script>');
		}
	   ?>
    </ul>
	  <br><br>
	  <a target="_blank" href="https://www.amazon.com/gp/product/B07VGRJDFY/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B07VGRJDFY&linkCode=as2&tag=rougride2016-20&linkId=632608605da18b3a9541869dff7a95f7"><h1>Get Your Game On!</h1><br><img src="images/nintendoswitch.jpg"/></a> 
	
  </div>
	

	
	

  <div class="col-6 col-s-9">
    <h1>Welcome to your portal.</h1>
   <p>

   </p>
    <p>

         <?php
		if(isset($_SESSION['uname'])){
			echo $_SESSION['uname'].", you are now on the sofa.";
		}
		?>
 </p>
	  
	  <br>
       <table>
		   <tr valign="top">
			   <td colspan="3"> <img src = "images/yellowsofa.png"/></td>
		   </tr>
		   <tr valign="top">
			   <td>
				   <img src ="images/madpickle.png" style = "width: 10vw"/></td><td><button style = "font-size:15px" id="modal-btn" onclick="clearImage()" > Click Here!  Say What You Gotta Say!</button>
			   </td>
		   </tr>
	  </table>
<div class="modal">
  <div class="modal-content">
    <span class="close-btn">&times;</span>
    <div><form action = "testupload2.php" method="post" enctype="multipart/form-data">
              <table>
                  <tr>
                      <td id="firstimage"><div style="width:200"><img id="img1"  name = "img1" width="200" /></div></td>
                  </tr>
                  <tr>
                      
                      <td id = "apic" colspan="10">
                          <input type="file" name="fileToUpload" id="fileToUpload" >
                      </td>
                      
                      
                  </tr>
              </table>
              <table>
                  <tr>
                      
                      <td>
         				Fill the Detail: 
         				<br>
         
         				<textarea id="thespeak" rows = "10" cols = "50" name = "description" style="width:100%">
           
         				</textarea><br>
					  </td>
				  </tr>
				  <tr>
					  <td><input type="submit" value="Upload Post" name="submit"><!--</input><input type="button" value =" Cancel Post" name="closepost" id = "closepost" ></input>-->
			          </td>
                  	</tr>
              </table>
			  </form>
          </div>
  </div>
</div>
          
          
          
          
          <br>

<!--
          <div onclick="myFunction2()">
              
             <img src ="images/madpickle.png" style = "width: 3vw"/>Say what you gotta say!
          </div><br>
          -->
	    
	  
	  
	  
	  
          <div id="myPopup" style="display:none">
          <div class="popuptext" id="myPopup">
                   
                 
          
                   
                   
          </div>
          </div>
          
	  
	</div>
	
 
    
    
    
    
    
    
    


<script>
    
// When the user clicks on div, open the popup
function myFunction2() {
  var popup = document.getElementById("myPopup");
  //popup.style.display.visibility = "visible";
 popup.style.display = "inline-block";
  popup.style.visibility = "visible";
  //popup.classList.toggle("show");
}    
    
// When the user clicks on div, open the popup
function myFunction() {
  var popup2 = document.getElementById("myPopup");
  popup2.style.display = "none";

}

	



var canvas = document.createElement("canvas");
	//canvas.width = 40;
var ctx = canvas.getContext("2d");
var imageData;
document.getElementById('fileToUpload').onchange = function (evt) {
    var tgt = evt.target || window.event.srcElement,
        files = tgt.files;

    // FileReader support
    if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = () => showImage(fr);
        fr.readAsDataURL(files[0]);
    }
	
}

function showImage(fileReader) {
    //var img = document.getElementById("img1");
	
	
	
    var img = new Image();
  
	img.src = fileReader.result;
	//getImageData(img);
	
	///
   img.onload = () => getImageData(img);
    
	//showPic(img);
	
    
}

function showPic(img){
	
	ctx.clearRect(0, 0, img.width, img.height);
    
	///
	var speak = document.getElementById("thespeak");
	var speakwidth = 100;
	var newwidth = speakwidth +"px";
	//var img = document.getElementById("img1");
	var newheightc = (speakwidth/img.width)*img.height;
	var newheight = newheightc + "px";
   img.style.width = newwidth;
	img.style.height = newheight;
	alert("width: "+newwidth+ " height: "+newheight);
	document.getElementById("img1").src = img.src;
	document.getElementById("img1").style.width = newwidth;
	document.getElementById("img1").style.height = newheight;
	
	imageData = ctx.getImageData(0, 0, newwidth, newheight).data;
	
	
	
	/*
	myimg = document.getElementById('img1');
myimg.style.height = "50px";
myimg.style.width = "50px";
*/
	//imageData = ctx.getImageData(0, 0, newwidth, newheight).data;
	alert("done");
}
	
function getImageData(img) {
	alert("im here");
	
	
	
	
    //ctx.drawImage(img, 0, 0);
	//ctx.drawImage(img, 0, 0, 50, 50);
	//showPic();
	//imageData = ctx.getImageData(0, 0, newwidth, newheight).data;
    imageData = ctx.getImageData(0, 0, img.width, img.height).data;
	
   //console.log("image data:", imageData);
	
	showPic(img);
	//img.src = fileReader.result;
}
</script>

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

	
	<script>
let modalBtn = document.getElementById("modal-btn")
let modal = document.querySelector(".modal")
let closeBtn = document.querySelector(".close-btn")
modalBtn.onclick = function(){
  modal.style.display = "block"
	//alert("oh yeah");
    document.getElementById("img1").src = "";
}
closeBtn.onclick = function(){
  modal.style.display = "none"
}
window.onclick = function(e){
  if(e.target == modal){
    modal.style.display = "none"
  }
}
								
</script>
</body>
</html>

