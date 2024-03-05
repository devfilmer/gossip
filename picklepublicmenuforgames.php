<?php	
		
      echo '<style>
      .blink {
      animation: blinker 0.9s linear infinite;
      color: white;
      font-size: 20px;
      font-weight: bold;
      font-family: sans-serif;
      }
      @keyframes blinker {  
      50% { opacity: 0; }
      }
      .blink-one {
      animation: blinker-one 1s linear infinite;
      }
      @keyframes blinker-one {  
      0% { opacity: 0; }
      }
      .blink-two {
      animation: blinker-two 1.4s linear infinite;
      }
      @keyframes blinker-two {  
      100% { opacity: 0; }
      }
    </style><li><a href = "../index.php">Home</a></li>
      <li><a href = "../wtf.php">WTF</a></li>
      <li><a href = "../believe.php">I Don\'t Believe This.</a></li>
      <li><a href = "../rightthing.php">Do the Right Thing!</a></li>
	  <li><a href = "../picklesignup.png"><img src = "images/madpickle.png" style="width: 30px"/></a><a href = "../picklesignup.php" class="blink" style= "vertical-align:top">  Subscribe Today!</a></li><li><a href = "../support.php">Tech Support</a></li>
	  <li><a href = "../login4.php">Log In</a></li>';
	 
	   ?>