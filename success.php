<?php
session_start();

//echo 'Welcome to page #2<br />';

//echo $_SESSION['access']; // green
if(!isset($_SESSION['access'])){

	header("Location: http://www.spoiledpickle.com/picklesignupagain.php");
exit();
}
?>

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
</head>
<body>

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
    <h1>Thank You For Subscribing!</h1>
   <p>
	<img src = "images/madpickle.png"/>
   </p>
    <p><?php
		/*
	$message = "<h1>Paypal variables</h1>";
foreach($_POST as $key => $value)
{
    $message.= $key . " - " . $value . "<br />";
}
		echo $message;
		echo "<br><br>";
    $firstname = $_POST["first_name"];
	$lastname = $_POST["last_name"];
	;
    echo $firstname.", ";
	
	*/
    ?>
		
	<!--	Thank you for your subscription. Your transaction has been completed, and a receipt for your purchase has been emailed to you. Log into your PayPal account to view transaction details. <br><br>
		-->

<!-- Now send the email -->
		
<!-- Now talk to paypal -->		
		
<?php
		


$pp_hostname = "www.paypal.com"; // Change to www.sandbox.paypal.com to test against sandbox


// read the post from PayPal system and add 'cmd'
$req = 'cmd=_notify-synch';
 
$tx_token = $_GET['tx'];
$auth_token = "6j2RTZ6YkpxRqxzP8fNhvAcnq0GA4rxTLx4XICh5uxMjoqKNYmeqp9CKP5O";
$req .= "&tx=$tx_token&at=$auth_token";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://$pp_hostname/cgi-bin/webscr");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
//set cacert.pem verisign certificate path in curl using 'CURLOPT_CAINFO' field here,
//if your server does not bundled with default verisign certificates.
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Host: $pp_hostname"));
$res = curl_exec($ch);
curl_close($ch);

if(!$res){
    //HTTP ERROR
}else{
     // parse the data
    $lines = explode("\n", trim($res));
    $keyarray = array();
    if (strcmp ($lines[0], "SUCCESS") == 0) {
        for ($i = 1; $i < count($lines); $i++) {
            $temp = explode("=", $lines[$i],2);
            $keyarray[urldecode($temp[0])] = urldecode($temp[1]);
        }
    // check the payment_status is Completed
    // check that txn_id has not been previously processed
    // check that receiver_email is your Primary PayPal email
    // check that payment_amount/payment_currency are correct
    // process payment
    $firstname = $keyarray['first_name'];
    $lastname = $keyarray['last_name'];
    $itemname = $keyarray['item_name'];
    $amount = $keyarray['payment_gross'];
	$email = $keyarray['payer_email'];
     
    echo ("<p><h3>Thank you for your purchase!</h3></p>");
     
    echo ("<b>Payment Details</b><br>\n");
    echo ("<li>Name: $firstname $lastname</li>\n");
    echo ("<li>Item: $itemname</li>\n");
    echo ("<li>Amount: $amount</li>\n");
	echo ("<li>User name: $email</li>\n");
    echo ("");
	echo ("<br>");
	echo ("Please see your email for log in details.");
		
	/// Generate Temp Pass
		
	$n = rand(10,16); 
	function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
	} 
  
	$temppass = getName($n); 
	//// Now Send email
		
	$subject = "Spoiled Pickle Sign Up";

	$to = $email;
	$message = "
	<html>
	<head>
	<title>Spoiled Pickle Sign Up</title>
	</head>
	<body style='font-size: 25px; background-color: grey'>
	<div class='header' style='background-color:#6D2400; vertical-align: top'>
  <h1>Spoiled Pickle<img src='http://www.spoiledpickle.com/images/madpickle.png' width='50px' style='float:right'/></h1>
</div>
	<p>First ".$firstname.", thank you for subscribing to Spoiled Pickle!  <br>Listed below is your username and password.  Please follow the link and enter your credentials to gain access.  You will be prompted to change your password during your first login.  See you on the other side.</p>
	<table style = 'text-align: left; font-size: 18px; width: 100%'>
	<tr>
	<th>First Name</th>
	<th>Last Name</th>
	<th>User Name</th>
	<th>Password</th>
	<th>Item Purchased</th>
	</tr>
	<tr>
	<td width='150'>".$firstname."</td>
	<td width='150'>".$lastname."</td>
	<td width='150' style='color:black; text-decoration:none'><tt>".$email."</tt></td>
	<td width='150'>".$temppass."</td>
	<td width='150'>".$itemname."</td>
	</tr>

	</table>
	<br>
	<br><div style= 'background-color:#4B4C08'>
	<a href ='http://www.spoiledpickle.com/login2.php' style='text-decoration: none; color:#ffffff;'>Click here to log in.</a></div>
	</body>
	</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: spoiledpickle.com>';
	

		mail($to,$subject,$message,$headers);
		
		
		
    }
    else if (strcmp ($lines[0], "FAIL") == 0) {
        // log for manual investigation
		
		
	echo ('<script>');
	echo ('window.location.href = "http://www.spoiledpickle.com/picklesignupagain.php";');
	echo ('</script>');
		
		
    }
}
 
?>


	
<br><br>

<table>
	<tr style="text-align:center; background:white"><td><h3>Silver Plan</h3></td><td><h3>Gold Plan</h3></td><td><h3>Platinum</h3></td></tr>
	
	<tr style="text-align:center"><td><img src="images/silver.png" width="32%"/></td><td><img src ="images/gold.png" width="32%"/></td><td><img src="images/platinum.png" width="32%"/></td></tr>
	
		<tr style="text-align:center; background:white"><td><h3>$5.00</h3></td><td><h3>$7.50</h3></td><td><h3>$10.00</h3></td></tr>

	
	<tr style="text-align:center"><td><br><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="QL4MEN2N4L97U">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" width="82%">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form></td>

<td><br><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="C97YPHG8S5A3Q">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" width="82%">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</td>
<td><br><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="3G43SNP7VR6SW">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" width="82%">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form></td></tr>
	
	
</table>

		
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

