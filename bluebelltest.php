<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	echo "ok";


	
if(isset($_POST['bluebell']))
{
echo "You have selected :".$_POST['bluebell'];  //  Displaying Selected Value
}

?>
	
	
<?php

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	
	
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
$usertable = "kingofcream";
$yourfield = "Username";

//Connecting to your database
mysql_connect($hostname, $dbusername, $password) OR DIE ("Unable to
connect to database! Please try again later.");





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
        }
        else
        {
          // echo ($name . "    " . $row[Password]."<br>");
        }
        
    }
    //echo ("my username is: ".$username);
}
        
     }	


?>		
	
<?php
$servername = "p3plcpnl1183.prod.phx3.secureserver.net";
$username = "spoiledpickle";
$password = "TheMan333!";
$dbname = "spoiledpickle";
$usertable = "kingofcream";

// Creams
$bluebell = 0;
if(isset($_POST['bluebell']))
{$bluebell = 1;
}
$benandjerrys = 0;
if(isset($_POST['benandjerrys']))
{$benandjerrys = 1;
}
$breyers = 0;
if(isset($_POST['breyers']))
{$breyers = 1;
}
$haagendaz = 0;
if(isset($_POST['haagendaz']))
{$haagendaz = 1;
}
$edys = 0;
if(isset($_POST['edys']))
{$edys = 1;
}
$magnum = 0;
if(isset($_POST['magnum']))
{$magnum = 1;
}
$baskinrobbins = 0;
if(isset($_POST['baskinrobbins']))
{$baskinrobbins = 1;
}
$halotop = 0;
if(isset($_POST['halotop']))
{$halotop = 1;
}
$bluebunny = 0;
if(isset($_POST['bluebunny']))
{$bluebunny = 1;
}
	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query = "SELECT * FROM $usertable";

$result = mysql_query($query);

if ($result) {
    $userfound = false;
	
    while($row = mysql_fetch_array($result)) {
        $bluebell += $row["bluebell"];
		$benandjerrys += $row["benandjerrys"];
		$breyers += $row["breyers"];
		$haagendaz += $row["Haagendaz"];
		$edys += $row["edys"];
		$magnum += $row["magnum"];
		$baskinrobbins += $row["baskinrobbins"];
		$halotop += $row["halotop"];
		$bluebunny += $row["bluebunny"];
		
       
        
    }
    //echo ("my username is: ".$username);
	echo "<br>record found";
	echo "<br>bluebell votes: ".$bluebell."<br>";
}
	
	

$sql = "Update kingofcream set bluebell=$bluebell, benandjerrys =$benandjerrys, breyers=$breyers,Haagendaz = $haagendaz,edys= $edys,magnum=$magnum,baskinrobbins = $baskinrobbins, halotop = $halotop,bluebunny = $bluebunny WHERE id=0";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
	echo "<br>";
	echo "blue bell votes: ".$bluebell;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
	

</body>
</html>