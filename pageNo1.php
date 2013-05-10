
<!doctype html>
<html lang="en">
 <head> 
  	<?php
		include 'header.php';
	?>        
  </head>
		<body id="toolkit">
					
			<div id="out">
			<?php
				include 'exitButton.php';
			?>
			</div>
			
			<div id="line"><img src="images/blueLine.png"></div>
			<div id="wrapper">
			<div id= "content">
				<img class="icon" id="postPages" src="images/icons/iconNo1.png">
				<h1 class="title">POST MORTEM PLANNING</h1>
				<h2 class= "question" id= "NoQuestions"><span style="color:#FF6666">We plan everything so why not plan the end of our lives?</span><br>You plan your schedules, your careers and work 					projects, your weddings and vacations, and even retirement. The one area that most of us avoid planning for is the end of our life, but that needs thought too. Convinced?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="planning.php">YES</a></center>
					<center><a id="TemplateRight" class="answer" href="pageNo2.php">NO, I still do not understand why now? I have enough on my plate</a></center>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			 <img src="images/sideBar/dataNo1.png">
			</aside>
			</div>
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>