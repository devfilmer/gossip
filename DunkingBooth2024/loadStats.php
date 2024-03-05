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



$what = array();

$binkleynum = 0;
$christienum = 0;
$desantisnum = 0;
$eldernum = 0;
$haleynum = 0;
$hutchinsonnum = 0;
$johnsonnum = 0;
$pencenum = 0;
$ramaswamynum = 0;
$scottnum = 0;
$suareznum = 0;
$trumpnum = 0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
 // die("Connection failed: " . mysqli_connect_error());
  die();
 // alert("Connection failed: " . mysqli_connect_error());
 // echo 'sorry';
}

else{
	//alert('connected');
//echo "\r OK Connected successfully to get all";
$query = "SELECT * FROM dunkstats";
$result = $conn->query($query);
//echo('<table>');
 //echo ('<tr><td>Name</td><td>Dunks</td></tr>');
if ($result) {
	//echo "we got the info";
	$candidatearray = array();
	while($row = $result->fetch_assoc()) { 
 // echo $row[dunks];
         $candidatearray[] = $row;
           if ($row[LastName] == "Binkley")
		{
			
			$binkleynum = $row[dunks];
			 //echo ('<tr><td>'.$row[LastName].'</td><td>'.$row[dunks].'</td></tr>');
	       // echo ('ha');
		}
		
		if ($row[LastName] == "Christie")
		{
			$christienum = $row[dunks];
			//echo ('what'.'now'.$christienum);
			//echo ('<tr><td>'.$row[LastName].'</td><td>'.$row[dunks].'</td></tr>');
		}
		
		if ($row[LastName] == "Desantis")
		{
			
			$desantisnum = $row[dunks];
			//echo ('<tr><td>'.$row[LastName].'</td><td>'.$row[dunks].'</td></tr>');
		}
		
		
		
		if ($row[LastName] == "Elder")
		{
			
			$eldernum = $row[dunks];
			//echo ('<tr><td>'.$row[LastName].'</td><td>'.$row[dunks].'</td></tr>');
		}
		
		if ($row[LastName] == "Haley")
		{
		
			$haleynum = $row[dunks];
			//echo ('<tr><td>'.$row[LastName].'</td><td>'.$row[dunks].'</td></tr>');
		}
		
		if ($row[LastName] == "Hutchinson")
		{
			
			$hutchinsonnum = $row[dunks];
			//echo ('<tr><td>'.$row[LastName].'</td><td>'.$row[dunks].'</td></tr>');
		}
		
		
		if ($row[LastName] == "Johnson")
		{
			
			$johnsonnum = $row[dunks];
			//echo ('<tr><td>'.$row[LastName].'</td><td>'.$row[dunks].'</td></tr>');
		}
		
		if ($row[LastName] == "Pence"){
			$pencenum = $row[dunks];
			//echo ('man');
		}
		
		if ($row[LastName] == "Ramaswamy"){
			
			$ramaswamynum = $row[dunks];
			//echo ('<tr><td>'.$row[LastName].'</td><td>'.$row[dunks].'</td></tr>');
		}
		
		
		if ($row[LastName] == "Scott")
		{
			
			$scottnum = $row[dunks];
			//echo ('<tr><td>'.$row[LastName].'</td><td>'.$row[dunks].'</td></tr>');
		}
		
		if ($row[LastName] == "Suarez"){
			$suareznum = $row[dunks];
			//echo ('<tr><td>'.$row[LastName].'</td><td>'.$row[dunks].'</td></tr>');
			
		}
		
		if ($row[LastName] == "Trump"){
			
			$trumpnum = $row[dunks];
			//echo ('<tr><td>'.$row[LastName].'</td><td>'.$row[dunks].'</td></tr>');
		
		}
		
          

	  }
 echo json_encode($candidatearray);
 //echo ('yep, we got it');

}
  }

  $conn.close();



?>