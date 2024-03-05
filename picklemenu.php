<?php	
		if(isset($_SESSION['uname'])){
		//	echo 'yes we can';
			//echo $_SESSION['package'];
			
			if ($_SESSION['package'] == "Spoiled Pickle Silver Plan"){
				
				echo ' <li onclick="window.location.href = \'http://www.spoiledpickle.com/win.php\'"><a href = "http://www.spoiledpickle.com/win.php">Enter to Win</a></li><li onclick="window.location.href = \'http://www.spoiledpickle.com/logout2.php\'"><a href = "http://www.spoiledpickle.com/logout2.php">Logout</a></li>';
			}
			if ($_SESSION['package'] == "Spoiled Pickle Gold Plan"){
				
				echo ' <li onclick="window.location.href = \'http://www.spoiledpickle.com/win.php\'"><a href = "http://www.spoiledpickle.com/win.php">Enter to Win</a></li><!-- <li onclick="window.location.href = \'http://www.spoiledpickle.com/whatthepeoplethink.php\'"><a href = "http://www.spoiledpickle.com/whatthepeoplethink.php">What the People Think<a/></li>--><li onclick="window.location.href = \'http://www.spoiledpickle.com/chocolatecountdowntimer6.php\'"><a href = "http://www.spoiledpickle.com/chocolatecountdowntimer6.php">Chocolate Countdown Timer</a></li>
	  
	  <li onclick="window.location.href = \'http://www.spoiledpickle.com/socialsecuritycountdowntimer.php\'"><a href = "http://www.spoiledpickle.com/socialsecuritycountdowntimer.php">Social Security Countdown Timer</a></li>
	   <li onclick="window.location.href = \'http://www.spoiledpickle.com/climatechangecountdowntimer.php\'"><a href = "http://www.spoiledpickle.com/climatechangecountdowntimer.php">Climate Change Countdown Timer</a></li><li onclick="window.location.href = \'http://www.spoiledpickle.com/logout2.php\'"><a href = "http://www.spoiledpickle.com/logout2.php">Logout</a></li>';
			}
	
			
	if ($_SESSION['package'] == "Spoiled Pickle Platinum Plan"){
	//	echo 'package package';		
	  echo '<li onclick="window.location.href = \'http://www.spoiledpickle.com/win.php\'"><a href = "http://www.spoiledpickle.com/win.php">Enter to Win</a></li><!-- <li onclick="window.location.href = \'http://www.spoiledpickle.com/whatthepeoplethink.php\'"><a href = "http://www.spoiledpickle.com/whatthepeoplethink.php">What the People Think<a/></li>-->
      <li onclick="window.location.href = \'http://www.spoiledpickle.com/spoiledgames2.php\'"><a href = "http://www.spoiledpickle.com/spoiledgames2.php">Games</a></li>
	  <li onclick="window.location.href = \'http://www.spoiledpickle.com/chocolatecountdowntimer6.php\'"><a href = "http://www.spoiledpickle.com/chocolatecountdowntimer6.php">Chocolate Countdown Timer</a></li>
	  
	  <li onclick="window.location.href = \'http://www.spoiledpickle.com/socialsecuritycountdowntimer.php\'"><a href = "http://www.spoiledpickle.com/socialsecuritycountdowntimer.php">Social Security Countdown Timer</a></li>
	   <li onclick="window.location.href = \'http://www.spoiledpickle.com/climatechangecountdowntimer.php\'"><a href = "http://www.spoiledpickle.com/climatechangecountdowntimer.php">Climate Change Countdown Timer</a></li>
	   
	   <li onclick="window.location.href = \'http://www.spoiledpickle.com/conspiracy.php\'"><a href = "http://www.spoiledpickle.com/conspiracy.php">Conspiracy Theories</a></li>
     
	  
      <!--<li onclick="window.location.href = \'http://www.spoiledpickle.com/sofa.php\'"><a href = "http://www.spoiledpickle.com/sofa.php">Sofa</a></li>-->
      <!--<li onclick="window.location.href = \'http://www.spoiledpickle.com/friend.php\'"><a href = "http://www.spoiledpickle.com/friend.php">Friends</a></li>-->
	  <li onclick="window.location.href = \'http://www.spoiledpickle.com/logout2.php\'"><a href = "http://www.spoiledpickle.com/logout2.php">Logout</a></li>';
			}
			
			
     
		}
	   ?>