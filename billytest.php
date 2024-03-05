<?php
session_start();
$_SESSION['uname']="billy";

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
	echo $_SESSION['uname'];
	?>
</body>
</html>