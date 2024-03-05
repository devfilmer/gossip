<?php	
		if(isset($_SESSION['uname'])){
		//	echo 'yes we can';
			//echo $_SESSION['package'];
			
			if ($_SESSION['package'] == "Spoiled Pickle Silver Plan"){
				
				echo ' <li><a href = "../win.php">Enter to Win</a></li><li><a href = "logout2.php">Logout</a></li>';
			}
			if ($_SESSION['package'] == "Spoiled Pickle Gold Plan"){
				
				echo ' <li><a href = "win.php">Enter to Win</a></li><!-- <li><a href = "../whatthepeoplethink.php">What the People Think<a/></li>--><li><a href = "http://www.spoiledpickle.com/chocolatecountdowntimer6.php">Chocolate Countdown Timer</a></li>
	  
	  <li><a href = "http://www.spoiledpickle.com/socialsecuritycountdowntimer.php">Social Security Countdown Timer</a></li>
	   <li><a href = "http://www.spoiledpickle.com/climatechangecountdowntimer.php">Climate Change Countdown Timer</a></li><li><a href = "../logout2.php">Logout</a></li>';
			}
	
			
	if ($_SESSION['package'] == "Spoiled Pickle Platinum Plan"){
	//	echo 'package package';		
	  echo '<li><a href = "../win.php">Enter to Win</a></li><!-- <li><a href = "../whatthepeoplethink.php">What the People Think<a/></li>-->
      <li><a href = "../spoiledgames2.php">Games</a></li>
	  <li><a href = "http://www.spoiledpickle.com/chocolatecountdowntimer6.php">Chocolate Countdown Timer</a></li>
	  
	  <li><a href = "http://www.spoiledpickle.com/socialsecuritycountdowntimer.php">Social Security Countdown Timer</a></li>
	   <li><a href = "http://www.spoiledpickle.com/climatechangecountdowntimer.php">Climate Change Countdown Timer</a></li>
	   
	   <li><a href = "../conspiracy.php">Conspiracy Theories</a></li>
     
	  
      <!--<li><a href = "../sofa.php">Sofa</a></li>-->
      <!--<li><a href = "../friend.php">Friends</a></li>-->
	  <li><a href = "../logout2.php">Logout</a></li>';
			}
			
			
     
		}
	   ?>