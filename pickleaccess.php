<?php
session_start();

//echo 'Thinking...';

$_SESSION['access'] = 'green';
header("Location: http://www.spoiledpickle.com/success.php");
exit();


?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Thinking...</title>
</head>

<body>
</body>
</html>