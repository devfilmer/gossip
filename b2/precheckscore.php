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
$winner = false;
$myscore = $_POST["playerscore"];
$myinitials = $_POST["playerinitials"];
//echo('ok posted');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//echo ('mysqli made');
// Check connection
if (!$conn) {

  die("Connection failed: " . $conn->connect_error);
  echo 'sorry';
}

else{
//echo "\r OK Connected successfully";

$query = "SELECT * from bloodinvadershighscore order by score DESC";
$result = $conn->query($query);
$winner = false;

if ($result) {
	//echo "we got this far again";
	$highscorearray = array();
	
  while($row = $result->fetch_assoc()) { 
	  $highscorearray[] = $row;
	 
	  
  }
  
  $result2;
  
  foreach ($highscorearray as $value) {
  //echo "$value[initials] <br>";
  if ($myscore > $value[score]){
	 

	  //$result2 = $conn->query($query);
	$winner = true;
	  break;
  }
}



if($winner == true){
	 //echo 'winner';  
   echo json_encode($highscorearray); 
} 
else{
  
     echo json_encode($highscorearray); 
}
	  
   // echo $row[initials];
   /*
 $newcount = $row[dunks] + 1;
 echo $newcount;
 $query2 = "UPDATE dunkstats set dunks = $newcount WHERE dunkstats.LastName = "."'$mycandidate'";

$result2 = $conn->query($query2);
*/
 
 
 
 
 
  
  }
  else
  {}
}



$conn.close();
/*
echo("<script type='text/javascript'>");
echo("window.requestAnimationFrame(gameLoop);");
echo("</script>");
*/
?>
