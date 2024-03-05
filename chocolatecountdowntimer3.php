<?php
session_start();

//echo $_SESSION['uname'];
?>

<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
  <meta name="description" content="Commentary on latest news, celebrities, politics, and gossip">
  <meta name="keywords" content="news,celebrities,politics,gossip,spoiled, pickle, chocolate, count, down, timer"><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-44249223-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-44249223-13');
</script>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="picklestyle.css">	
<title>Chocolate Count Down Timer</title>
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
	  
	
	
  </div>
	

	
	

  <div class="col-6 col-s-9">
	  
	  
   		<?php	
		if(isset($_SESSION['uname'])){
     
echo ('<div id = "demo"></div>');
//// Countdown timer
			echo('<script>
// Set the date were counting down to
var countDownDate = new Date("Feb 25, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var years = Math.floor(distance/(1000*365*60*60*24));
  var months = Math.floor(distance/(1000*365*60*60*24*12);
  var days = Math.floor(distance / (1000 * 60 * 60 * 24 *365));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  //Set up stub
  stub += "<table style=\"width:100%; text-align:center\">";
stub += "<tr style=\"background:white; color: black; font-size: 2vw\">";
stub += "<td colspan= \'5\'>";
stub += "<h2>Chocolate Count Down Timer!</h2>";
stub += "</td>";
stub += "</tr>";

stub += "<tr style=\"background:black; color: white; font-size: 1vw\">";
stub += "<td width= \'16%\'>";
stub += "<h2>Years</h2>";
stub += "</td>";
stub += "<td width= \'16%\'>";
stub += "<h2>Months</h2>";
stub += "</td>";
stub += "<td width= \'16%\'>";
stub += "<h2>Days</h2>";
stub += "</td>";
stub += "<td width= \'16%\'>";
stub += "<h2>Hours</h2>";
stub += "</td>";
stub += "<td width= \'16%\'>";
stub += "<h2>Minutes</h2>";
stub += "</td>";
stub += "<td width= \'16%\'>";
stub += "<h2>Seconds</h2>";
stub += "</td>";
stub += "</tr>";

stub += "<tr style=\"background:white; color: black; font-size: 2vw\">";
stub += "<td width= \'33%\'>";
document.write("<h2>"+years + "</h2>";
stub += "</td>";
stub += "<td width= \'33%\'>";
document.write("<h2>"+months + "</h2>";
stub += "</td>";
stub += "<td width= \'33%\'>";
document.write("<h2>"+days + "<h2>";
stub += "</td>";
stub += "</tr>";
stub += "<td width= \'16%\'>";
stub += "<h2>"; 
stub += hours;
stub += "Hours</h2>";
stub += "</td>";
stub += "<td width= \'16%\'>";
stub += "<h2>" +minutes+"</h2>";
stub += "</td>";
stub += "<td width= \'16%\'>";
stub += "<h2>"+seconds+"</h2>";
stub += "</td>";
stub += "</tr>";

stub += "</table>";

  
    
  // Output the result in an element with id="demo"
 /* document.getElementById("demo").innerHTML = years +"y " +days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  */
  
   document.getElementById("demo").innerHTML = stub;
  
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

');
			
			
			echo ('<script language="JavaScript" type="text/javascript">
<!--

//var myVar = prompt("Enter a future date: ")
myVar = "Jan 1 2050"
var user_date = Date.parse(myVar);
var today_date = new Date();
var diff_date =  user_date - today_date;

var num_years = diff_date/31536000000;
var num_months = (diff_date % 31536000000)/2628000000;
var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;

document.writeln("<table style=\"width:100%; text-align:center\">");
document.writeln("<tr style=\"background:white; color: black; font-size: 2vw\">");
document.writeln("<td colspan= \'3\'>");
document.writeln("<h2>Chocolate Count Down Timer!</h2>");
document.writeln("</td>");
document.writeln("</tr>");

document.writeln("<tr style=\"background:black; color: white; font-size: 2vw\">");
document.writeln("<td width= \'33%\'>");
document.writeln("<h2>Years</h2>");
document.writeln("</td>");
document.writeln("<td width= \'33%\'>");
document.writeln("<h2>Months</h2>");
document.writeln("</td>");
document.writeln("<td width= \'33%\'>");
document.writeln("<h2>Days</h2>");
document.writeln("</td>");
document.writeln("</tr>");

document.writeln("<tr style=\"background:white; color: black; font-size: 2vw\">");
document.writeln("<td width= \'33%\'>");
document.write("<h2>"+Math.floor(num_years) + "</h2>");
document.writeln("</td>");
document.writeln("<td width= \'33%\'>");
document.write("<h2>"+Math.floor(num_months) + "</h2>");
document.writeln("</td>");
document.writeln("<td width= \'33%\'>");
document.write("<h2>"+Math.floor(num_days) + "<h2>");
document.writeln("</td>");
document.writeln("</tr>");

document.writeln("</table>");




//-->
</script>');
			
			
			
			
			
	/////		
			
		}
		else{
			echo'Coming soon for members only:  Chocolate Countdown Timer';
		}
	   ?>

   <p>
	<img src = "images/chocolate.jpg"/>
   </p>
    <p>

		Many of you out there may not be aware that there is a chocolate crisis brewing in the midst of all the other terrible things happening on the earth.  Imagine waking up and chocolate is so rare that it has become seriously expensive.  Imagine not having the one thing that can make anyone stop in their tracks and forget what they were doing.  Imagine that there was no chocolate. <br><br>
		
		

		<br><br>
		


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

