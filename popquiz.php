<?php
session_start();

//echo $_SESSION['uname'];
?>

<!DOCTYPE html>
<html>
<head><script data-ad-client="ca-pub-9264799538995539" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><meta charset="UTF-8">
  <meta name="description" content="Commentary on latest news, celebrities, politics, and gossip">
  <meta name="keywords" content="news,celebrities,politics,gossip,spoiled, pickle, pop, quiz"><!-- Global site tag (gtag.js) - Google Analytics -->
	
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-44249223-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-44249223-13');
</script>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="picklestyle.css">	
<title>Pop Quiz.</title>
	
	<script type="text/javascript">
	var questioncount = 0;
	var currentquestion = 0;
	var answernumber = 0;
	var questions;
	var answers;
	var correctanswers;
	var rightanswers = 0;	
		
		function gameOver()
		{
			var myEndGame = document.getElementById("quizroom");
			myEndGame.innerHTML = '';
			myEndGame.innerHTML += '<img src="images/popquizgraphic4.gif" style="padding-bottom:10px;vertical-align: text-top; "/>';
			var score = parseFloat(rightanswers/(questioncount-1)*100);
			//alert(rightanswers);
			//alert(questioncount);
			//alert(score);
			
			var scorestring = score.toString();
			myEndGame.innerHTML += '<div style="text-align: center"><h1>Game Over<h1>'+'<br>'+'<h2>You Scored:</h2><br>'+  '<h1>'+ score+'%</h1></div>';
			//alert ('we got here');
			
					
		}
		
		
		function getAnswers(theanswer)
		{
			if (correctanswers[currentquestion] == theanswer)
				{alert(theanswer + " is the correct answer.");
				
				rightanswers += 1;
				 currentquestion += 1;
				}
			
			else{
				alert("Your answer was incorrect!");
				currentquestion += 1;
			}
			
			if (currentquestion > questions.length - 1 )
				{
					gameOver();
				}
			else
				{
			getQuestion(currentquestion);
		        }
		}
		function testit(){
			//alert('ok');
		}
	function getQuestion(question)
		{
			//alert('what');
			var myscreen = document.getElementById("quizroom");
			myscreen.innerHTML = "";
			
			
			myscreen.innerHTML += '<div style="float:left;width:30%; vertical-align:text-top"><img src="images/popquizgraphic4.gif" style="padding-bottom:100px;vertical-align: text-top; "/></div><div style=" border: 1px solid red;width:70%; vertical-align:text-top; display: inline-block">';
			
			
			myscreen.innerHTML += '<h2>' + questions[question] +
'</h2>';
			
			myscreen.innerHTML += '<br><br><br><div style="width: 100%; align-content: center;text-align: center; margin: auto">';
			myscreen.innerHTML += '<ul style="text-align:center">';
				
				
				var numanswers = answers[currentquestion].count;
			    var possibleanswers = answers[currentquestion];
				//alert ('the number answer set is '+possibleanswers);
			    //alert (possibleanswers[0]);
				for (a=0; a< possibleanswers.length; a++)
					{
						myscreen.innerHTML += '<li>' + '<h3 onclick="getAnswers(\'' + possibleanswers[a]+ '\')">' + possibleanswers[a]+ '</h3></li>';
		       
					}
		
				
			                                        
			myscreen.innerHTML += '<ul></div></div><br><br><br><br>';
		}	
		
	function startGame()
		{
			
			questions = ['Who is currently the President of the United States?', 'Who is the leader of North Korea?&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp', 'Which performer headlined the Superbowl in 2019?', 'Which individual\'s untimely death lead to the I can\'t breath movement?', 'Which icecream brand created a new icecream to symbolize their stand with Black America in the fight for Justice for George Floyd?', 'Which congressman accidently bared their breasts on Zoom?', 'Which world leader publicly stated that the Coronavirus was not a problem in the U.S.?','Which artist wrote a song as a tribute to Coronavirus victims?', 'Which U.S. Congressman has tested positive for Coronavirus?'];
			
			questioncount = questions.length;
			
			answers = [
				['Barrack Obama','Donald Trump','Nancy Pelosi', 'Dr. Fauci'],['Kim Jong Un', 'Rev. Millard', 'Kim Jong Il', 'Dong Bing Pow'],['Janet Jackson','Madonna','Jennifer Lopez', 'Arianna Grande'],['Amaud Abrey','Martin Luther King','Sean Reid','George Floyd'],['Haagen Daaz','Bryers','Magnum','Ben & Jerrys','None of the above'],['Martha Lucia Micher','Tammy Duckworth','Martha McSally', 'Maxine Waters'],['Nancy Pelosi','Donald Trump', 'Ben Carson', 'Ayanna Pressley'], ['Alicia Keys','Michael Bolton', 'Kia Scott', 'Mariah Carey'],['Vice President Pence', 'Tammy Duckworth', 'Senator Rand Paul','Rep. Judy Chu']
				
			];
			
			correctanswers = ['Donald Trump','Kim Jong Un','Jennifer Lopez','George Floyd','Ben & Jerrys','Martha Lucia Micher','Donald Trump','Alisha Keys','Senator Rand Paul'];
			
			
			testit();
			getQuestion(parseInt(currentquestion));
			//getQuestions(currentquestion);
		
				
			/*
			myscreen.innerHTML += '<div style="width:25%; float:left"><img src="images/popquizgraphic4.gif" style="vertical-align: text-top; float: left"/></div><div style="width:75%;float:left; vertical-align:text-top"><h1>Who is currently the President of the United States?</h1>  <h2><ul><li>Barack Obama</li><li>Donald Trump</li><li>Nancy Pelosi</li><li>Dr. Fauci</li><ul></h2></div><br><br><br><br>';
			
			*/
		}
	
		
		
		
	</script>
</head>
<body>

<div class="header">
  <h1>Spoiled Pickle</h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <?php include 'picklepublicmenu.php';?>
		<?php include 'picklemenu.php';?>
    </ul>
	  <img src="images/popquizgraphic4.gif" style="display:none"/>
	 
	  <a target="_blank" href="https://www.amazon.com/gp/product/B07VGRJDFY/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B07VGRJDFY&linkCode=as2&tag=rougride2016-20&linkId=632608605da18b3a9541869dff7a95f7"><h1>Get Your Game On!</h1><br><img src="images/nintendoswitch.jpg"/></a> <br>
	  
	
	
  </div>
	

	
	

  <div class="col-6 col-s-9">
   <div id="quizroom" style="vertical-align: text-top">
  
	<img src="images/popquizgraphic4.gif" style="vertical-align: text-top"/>
  
	 
    <p style="align-content: center">
		<div style=" align-content: center; text-align: center">
	  <img src = "images/go2.png" style="width: 76%;" onclick="startGame()"/> </div> <br><br>
		 </div>
		 <br><br>
		

	    Did you like our pop quiz?  If so, click the like button below to follow us on facebook.<br><br>
		
		<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FSpoiled-Pickle-108307937409209%2F&width=400&layout=standard&action=like&size=large&share=true&height=35&appId=567212453919469" width="400" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>


 </p>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2>We Hate Politics!</h2>
      <p>Yeah, you guessed it.  We will not go easy on politicians on this site.  If they do something stupid, we ain't gonna let off the hook.  If they have to get lit up here, it's going to be like fireworks in the sky.</p>
      <h2>We Love Celebrities!</h2>
      <p>You will always be able to come to our site and get an opinion on what Celebrities are up too.</p>
      <h2>News</h2>
      <p>Whether it be the law of the land or what's going on over seas, we might just weigh in.  If something dumb is going on, we're definitely going to speak upon it.</p>
    </div>
	  <br>
	  <div class"col-3 col-2-12">
		  <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=rougride2016-20&marketplace=amazon&region=US&placement=B07SMLMFC6&asins=B07SMLMFC6&linkId=552ce7a897ccd5e4d0aada82a22c5073&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
		  <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=rougride2016-20&marketplace=amazon&region=US&placement=B078GZM4H8&asins=B078GZM4H8&linkId=ef35c575aac7c6e5ec9472f4b1a7be66&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
		  <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=rougride2016-20&marketplace=amazon&region=US&placement=B07ST7SDSK&asins=B07ST7SDSK&linkId=e0f2d955d4563a337890dbb65b011691&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
		  <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=rougride2016-20&marketplace=amazon&region=US&placement=B012JIOKM4&asins=B012JIOKM4&linkId=e8c73d4c45e525f6538596a4fd7fb0a3&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
		
	  </div>
  </div>
</div>

<div class="footer">
  <p>Spoiled Pickle is strickly commentary and meant for mature audience consumption.</p>
</div>

</body>
</html>

