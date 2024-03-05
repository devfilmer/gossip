<?php
session_start();


?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Billy test</title>
</head>

<body>
	<a href = "billytest.php">Billy Home</a><br>
	<a href = "billypage2.php">Billy Contact</a><br>
	
	
	<?php
	
	if (!isset($_SESSION['uname']))
	{
		echo 'you are not logged in';
	}
	else
	{
		
		echo $_SESSION['uname']." welcome.";
	}
	
	?>
</body>
</html>