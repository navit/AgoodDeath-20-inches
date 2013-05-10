

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
				<img class="icon postPages" src="images/icons/iconPlanning.png">
				<h1 class="title">POST MORTEM PLANNING</h1>
				<h2 class= "question">The first step is to choose who would be the best person to represent you incase you became very ill and could not make medical decisions for yourself. Ready?<h2>		
			<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="page4.php">YES</a></center>
					<center><a id="TemplateRight" class="answer" href="pageNo5.php">NO, I have no one to trust enough to act as my Health Care Agent.</a></center>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img src="images/sideBar/dataPlanning.png">
			</aside>
			</div>
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>