
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
				<img class="icon postPages" src="images/icons/iconNo3.png">
				<h1 class="title">POST MORTEM PLANNING</h1>
				<h2 class= "question NoQuestions"><span style="color:#FF6666">Death is the only certainty - be prepared now.</span><br>If there is one event you will most certainly have to face, it is your inevitable death. Having an frank, open discussion with your health care providers or loved ones can relieve anxiety about this moment when it comes. Convinced?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="planning.php">YES</a></center>
					<center><a id="TemplateRight" class="answer" href="pageNo4.php">I do not care what happens to me after I die - i am dead.</a></center>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img src="images/sideBar/dataNo3.png">
			</aside>
			</div>
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>