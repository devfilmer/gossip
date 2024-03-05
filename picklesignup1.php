<!DOCTYPE html>
<html>
<head><script data-ad-client="ca-pub-9264799538995539" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><meta charset="UTF-8">
  <meta name="description" content="Commentary on latest news, celebrities, politics, and gossip">
  <meta name="keywords" content="news,celebrities,politics,gossip,spoiled, pickle,pizza, membership, sign up"><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-44249223-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-44249223-13');
</script>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="picklestyle.css">	
<title>Membership Sign Up</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
// define variables and set to empty values
$firstnameErr = $lastnameErr = $emailErr = $genderErr = $websiteErr = "";
$firstname = $lastname = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["firstname"])) {
    $firstnameErr = "First name is required";
	} else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
	$firstnameErr = "Only letters and white space allowed"; 
    }
	}
	
	
	if (empty($_POST["lastname"])) {
    $lastnameErr = "Last name is required";
	} else {
    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
	$lastnameErr = "Only letters and white space allowed"; 
    }
	}
    
	
	if (empty($_POST["email"])) {
    $emailErr = "Email is required";
	} else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$emailErr = "Invalid email format"; 
    }
	}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
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
    <h1>Welcome to Spoiled Pickle's Membership Sign Up Page</h1>
   <p>
	<img src = "images/madpickle.png"/>
   </p>

    	
    	If you've enjoyed the candid articles on this site and would like to read more, you have arrived at the place where you can sign up for more.  
We are excited to have the opportunity to offer you exclusive content on Spoiled Pickle.  This content includes additional articles, survey results, and games.  Future content may include: social network, exclusive offers, and prizes.  <br><br>
So let's get you sign up so we can see you on the other side.<br><br>
<!--<form action="picklesignup2.htm">-->

<?php

echo "i hope this works";
?>
<!--<form method="POST"
 action="picklesignup1check.php">
 -->
 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 
<table>
	
	<tr><td>First Name</td><td><input type= "text" size="15" name="firstname" id="firstname"/></td></tr>
	<tr><td>Last Name</td><td><input type= "text" size="15" name="lastname" id ="lastname"/></td></tr>
	<tr><td>Email</td><td><input type= "text" size="15"/ name = "email" id="email"></td></tr>
	<tr><td>Phone</td><td><input type= "text" size="15" name="phone" id="phone"/></td></tr>
	<tr><td></td><td><input type="submit"/></td></tr>
	
	
</table>
</form>
		
<br><br>


<?php

echo "<h2>Your Input:</h2>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $email;
echo "<br>";

?>


<?php

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	
	if ($firstnameErr !="" )
	{
		echo "not ready: first name issue<br>";
	}
	
	if ($emailErr != "") {
		echo "not read: email issue<br>";
	}

	if ($lastnameErr !="" )
	{
		echo "not ready: first name issue<br>";
	}
    
    if ($firstnameErr == "" & $emailErr == "" & $lastnameErr =="" )
	{
		echo "Alright we are ready.";
		//$url = "http://www.spoiledpickle.com/picklesignup2.php?";
		$url = 'http://www.spoiledpickle.com/picklesignup2.php?'.'lastname='.$lastname.'&firstname='.$firstname.'&email='.$email;
		echo "alert($url)";
        echo "<script>window.location.href = '$url'; </script>";
     }	
}

?>		

 
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

