<?php
session_start();

echo $_SESSION['uname'];


?>



<?php
echo $_SESSION['uname'];

            
			if (isset($_SESSION['uname'])){
	
				$msg = "Ending Session<br>";
				echo ($msg);
				
				$_SESSION[count]++;
				$msg2 = "<P>You've visited here $_SESSION[count] times. </p>";
				echo($msg2);
				
				echo "<br><a href = 'login4.php'><input type = button value = login name = login></a>";
			 }
			 else{
				 echo "not started";
			 }
		
session_unset(); 

			// destroy the session 
			session_destroy(); 
?>
<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title>Session Logout</title>
</head>

<body>

</body>
</html>