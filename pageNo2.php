

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
				<img class="icon postPages" src="images/icons/iconNo2.png">
				<h1 class="title">POST MORTEM PLANNING</h1>
				<h2 class= "question NoQuestions"><span style="color:#FF6666">It's like planning a trip to an unfamiliar destination.</span><br>Advance planning allows you to make your wishes and 				care preferences known before being faced with a medical crisis. It is simply smart life-planning. Convinced?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="planning.php">YES</a></center>
					<center><a id="TemplateRight" class="answer" href="pageNo3.php">NO, still convinced now is the time</a></center>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img id="dataNo2" src="images/sideBar/dataNo2.png">
			</aside>
			</div>
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>