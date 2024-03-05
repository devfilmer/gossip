<?php

$servername = "p3plcpnl1183.prod.phx3.secureserver.net";
$username = "spoiledpickle";
$password = "TheMan333!";
$dbname = "spoiledpickle";

/*
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "spoiledpickle";
*/
$newcount = 0;

$mycandidate = $_POST["cdunked"];
echo('ok posted');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
echo ('mysqli made');
// Check connection
if (!$conn) {

  die("Connection failed: " . $conn->connect_error);
  echo 'sorry';
}

else{
echo "\r OK Connected successfully";

$query = "SELECT dunks FROM dunkstats WHERE LastName = "."'$mycandidate'";
$result = $conn->query($query);

if ($result) {
	echo "we got this far again";
  	$row = $result->fetch_assoc();
    echo $row[dunks];
 $newcount = $row[dunks] + 1;
 echo $newcount;
 $query2 = "UPDATE dunkstats set dunks = $newcount WHERE dunkstats.LastName = "."'$mycandidate'";

$result2 = $conn->query($query2);

 
 
 
 
 
  
  }
  else
  {echo "you got nothing";}
}

$conn.close();
?>