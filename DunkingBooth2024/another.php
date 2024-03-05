<?php

echo 'ok';

$mycandidate = "";
if(isset($_POST['cdunked']))
{$mycandidate = $_POST['cdunked'];
}



$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "gop2024candidates";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$query = "SELECT dunks FROM dunkstats WHERE LastName = $mycandidate";
$result = $conn->query($query);

if ($result) {
	echo "we got this far";
	$row = $result->fetch_assoc();
 $newcount = $row[dunks] + 1;
 
$query2 = "UPDATE dunkstats set dunks = $newcount WHERE dunkstats.LastName = $mycandidate";

$result2 = $conn->query($query2);
if ($conn->query($result2) === TRUE) {
    echo "Record updated successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
$conn->close();


}
else
{
	
	
	
}
?>
