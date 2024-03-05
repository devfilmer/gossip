<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style type="text/css">
body,td,th {
	font-size: 16px;
}
</style>
</head>
<body>
<?php
	//if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ($_SERVER['REQUEST_METHOD'] != 'POST') {
		header('Location: index.php');
		exit();
	}


    $ch = curl_init();
	
    curl_setopt($ch, CURLOPT_URL, 'https://ipnpb.sandbox.paypal.com/cgi-bin/webscr');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "cmd=_notify-validate&".http_build_query($_POST));
	$response = curl_exec($ch);
    curl_close();


if ($_POST['txn_type'] == "subscr_cancel" || $_POST['txn_type'] == "recurring_payment_profile_cancel"){
		// Remove user from database
		$handle = fopen("removedusers.txt", "w");
		
			echo fwrite($handle, "$email");
		
		fclose($handle);
	
	
		
		$email = $_POST['payer_email'];
		
		
				//remove user to database
	
		
  
   
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $itemname = $_POST['item_name'];
    $amount = $_POST['payment_gross'];
	
  
		
	//// Plop2 in database
		
	$servername = "p3plcpnl1183.prod.phx3.secureserver.net";
	$username = "spoiledpickle";
	$password = "TheMan333!";
	$dbname = "spoiledpickle";
	$usertable = "SPUser";

	
	
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	else
	{
	
		 $mydate = date("Y-m-d");	
		/*$query = "INSERT INTO SPUser (Username, Password, Paid, LoggedIn, startdate, enddate, member, package)
		  VALUES ('$email', '$temppass',1,0,$mydate,NULL,1,'$itemname')";
		*/
		$email = $_POST['payer_email'];
		$query = "DELETE FROM SPUser WHERE Username = '$email'";
		//$result = mysql_query($query);
		$result = $conn->query($query);
		if ($result) {
  	
			//// Now Send email

			$subject = "Spoiled Pickle Sign Up";

			$to = $email;
			$message = "
			<html>
			<head>
			<title>Spoiled Pickle Cancellation Notification</title>
			</head>
			<body style='font-size: 25px; background-color: grey'>
			<div class='header' style='background-color:#6D2400; vertical-align: top'>
		  <h1>Spoiled Pickle<img src='http://www.spoiledpickle.com/images/madpickle.png' width='50px' style='float:right'/></h1>
		</div>
			<p>First ".$firstname.", We will miss you at Spoiled Pickle!  <br>This email is to verify that your subscription has been cancelled.  You can resubscribe any time.  We appreciate your business and hope to see you in the future.</p>
	
	

			<br>
			<br><div style= 'background-color:#4B4C08'>
			<a href ='http://www.spoiledpickle.com/index.php' style='text-decoration: none; color:#ffffff;'>Click here to visit our home page.</a></div>
			</body>
			</html>
			";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: spoiledpickle.com';


			mail($to,$subject,$message,$headers);
   
			}
	
$conn->close();	

	}

		
		
		

		
}
else{
		//add user to database
	
		
     // parse the data
   
  
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $itemname = $_POST['item_name'];
    $amount = $_POST['mc_gross'];
	$email = $_POST['payer_email'];
	$paymentstatus = $_POST['payment_status'];
	$currency = $_POST['mc_currency'];
	$receiver = $_POST['receiver_email'];
	
	// check the payment_status is Completed
    // check that txn_id has not been previously processed
    // check that receiver_email is your Primary PayPal email
    // check that payment_amount/payment_currency are correct
    // process payment
	
		
	if (($currency == "USD" && $paymentstatus == "Completed" && $receiver == "spoiledpickle357@gmail.com" && $itemname=="Spoiled Pickle Silver Plan" && $amount == 5.00)||
		
	($currency == "USD" && $paymentstatus == "Completed" && $receiver == "spoiledpickle357@gmail.com" && $itemname=="Spoiled Pickle Gold Plan" && $amount == 7.00)||
		
	($currency == "USD" && $paymentstatus == "Completed" && $receiver == "spoiledpickle357@gmail.com" && $itemname=="Spoiled Pickle Platinum Plan" && $amount == 9.00))
		
	{
			
     
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
		
		
		
	//// Plop2 in database
		
	$servername = "p3plcpnl1183.prod.phx3.secureserver.net";
$username = "spoiledpickle";
$password = "TheMan333!";
$dbname = "spoiledpickle";
$usertable = "SPUser";

	
	
	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
	
 $mydate = date("Y-m-d");	
$query = "INSERT INTO SPUser (Username, Password, Paid, LoggedIn, startdate, enddate, member, package)
  VALUES ('$email', '$temppass',1,0,$mydate,NULL,1,'$itemname')";

//$result = mysql_query($query);
$result = $conn->query($query);
if ($result) {
  	
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
	<p>First ".$firstname.", thank you for subscribing to Spoiled Pickle!  <br>Listed below is your username and password.  Please follow the link and enter your credentials to gain access.  See you on the other side.</p>
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
	<a href ='http://www.spoiledpickle.com/login4.php' style='text-decoration: none; color:#ffffff;'>Click here to log in.</a></div>
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
	

	


}
$conn->close();	
		
	
	}
	
	
		

		
		
		
		
		
		
	
		
		
		
    }
   
		
		
		
		
		
		/////////////
		
		
		
		
		
		if ($response == "VERIFIED") {
		
		$handle = fopen("test4.txt", "w");
		foreach($_POST as $key => $value)
			echo fwrite($handle, "$key=> $value \r\n");
		
		fclose($handle);
	
	
		}
	//}
	
    //file_put_contents("test2.txt", $response);
	//file_put_contents("test3.txt", "what ever");
?>

	</body>
</html>
