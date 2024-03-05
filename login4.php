<?php
session_start();
//$_SESSION['uname']="";

?>

<!DOCTYPE html>
<html>
<head><script data-ad-client="ca-pub-9264799538995539" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><meta charset="UTF-8">
  <meta name="description" content="Commentary on latest news, celebrities, politics, and gossip">
  <meta name="keywords" content="news,celebrities,politics,gossip,spoiled, pickle,pizza, membership, login, signup"><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-44249223-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-44249223-13');
</script>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="picklestyle.css">	
<title>Membership Login</title>
<style>
.error {color: #FF0000;}
</style>

</head>
<body>

<?php
// define variables and set to empty values

$usernameErr =  $userpasswordErr = "";
$username = $userpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	/*
	if (empty($_POST["email"])) {
    $emailErr = "Email is required";
	} else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$emailErr = "Invalid email format"; 
    }
    }
	*/
	
	if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
    echo '<script>alert($usernameErr)</script>';
	} else {
    $username = test_input($_POST["username"]);
    // check if username address is well-formed
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
	$usernameErr = "Invalid user name format"; 
    }
    }
	
	
	
	if (empty($_POST["password"])) {
    $userpasswordErr = "Password is required";
	} else {
    $userpassword = test_input($_POST["password"]);
    // check if name only contains letters and whitespace
   if(!preg_match("/[A-Za-z0-9]+/", $userpassword) == TRUE) {
	$userpasswordErr = "Only letters and white space allowed"; 
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
  <h1>Spoiled Pickle Login</h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <?php include 'picklepublicmenu.php';?>
	 <?php include 'picklemenu.php';?>
	 
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
    <h1>Welcome to Spoiled Pickle's Member Login Page</h1>
   <p>
	<!--<img src = "images/madpickle.png"/>-->
   </p>

    	
    	For Members Only! Exclusive content on Spoiled Pickle.  This content includes additional articles, survey results, and games.  Future content may include: social network, exclusive offers, and prizes.  <br><br>
See you on the other side.<br><br>
<!--<form action="picklesignup2.htm">-->

<?php

//echo "i hope this works";
?>
<!--<form method="POST"
 action="picklesignup1check.php">
 -->
 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 
<table style="background-color: green" cellspacing="2" border="black">
	<tr style="text-align: center"><td colspan="3"><h1>Login</h1></td></tr>
	<tr style="font-size: 15px"><td>User name</td><td><h2><input style="font-size: 15px" type= "text" size="25" name="username" id="username"/></h2></td></tr>
	<tr style="font-size: 15px"><td>Password</td><td><h2><input style="font-size: 15px"type= "text" size="25" name="password" id ="password"/></h2></td></tr>
	<tr><td></td><td><h2><input style="font-size: 20px" type="submit" name="Submit" id="Submit"/></h2></td></tr>
	
	
</table>
</form>
		
<br><br>


<?php
/*
echo "<h2>Your Input:</h2>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $email;
echo "<br>";
*/
?>


<?php

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	
	if ($usernameErr !="" )
	{
		echo "not ready: user name issue<br>";
	}
	
	if ($userpasswordErr != "") {
		echo "not ready: password issue<br>";
	}

    if ($usernameErr == "" and $userpasswordErr == "" )
	{
		//echo "Alright we are ready.<br>";
                /*
		//$url = "http://www.spoiledpickle.com/connection.php?";
		$url = 'http://www.spoiledpickle.com/connection.php?'.'lastname='.$lastname.'&firstname='.$firstname.'&email='.$email;
		echo "alert($url)";
        echo "<script>window.location.href = '$url'; </script>";
        */
        
       //Variables for connecting to your database.
//These variable values come from your hosting account.
$hostname = "p3plcpnl1183.prod.phx3.secureserver.net";
$dbusername = "spoiledpickle";
$dbname = "spoiledpickle";

//These variable values need to be changed by you before deploying
$password = "TheMan333!";
$usertable = "SPUser";
$yourfield = "Username";

//Connecting to your database
mysql_connect($hostname, $dbusername, $password) OR DIE ("Unable to
connect to database! Please try again later.");


session_destroy();
session_start();


mysql_select_db($dbname);

//Fetching from your database table.
$query = "SELECT * FROM $usertable";
$result = mysql_query($query);

if ($result) {
    $userfound = false;
    while($row = mysql_fetch_array($result)) {
        $name = $row["$yourfield"];
        if ($username == $name and $userpassword == $row[Password])
        {
          echo "<h2>$name, you are logged in.</h2><br>";
			//echo "<script>alert('$name')</script>";
		  //mysql_close();
		  //$post['uname'] = $username;
		  //$post['pwd'] = $userpassword;
			//echo "<script>alert('come on man')</script>";
		   
		  //session_register('uname');	
	      //session_register('pwd');
		  $_SESSION['uname'] = $username;
			$rrr = $_SESSION['uname'];
		 ///  echo "<script>alert('$rrr')</script>";
		  $_SESSION['pwd'] = $userpassword;
			
		   $_SESSION['package'] = $row['package'];
		   echo $_SESSION['package'];
		   session_register('count');
			echo ("<script>location.href = 'userportal.php'</script>");
		 
//check the result
		  //var_dump($result2);
		  
		  
	      //echo "<script>location.href = 'sessiontest.php'</script>"; 
        }
       
        
    }
    //echo ("my username is: ".$username);
}
else
{
	
	// remove all session variables
			session_unset(); 

			// destroy the session 
			session_destroy(); 
          
}
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

