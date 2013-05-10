
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
				<h2 class= "question" id="dialogue"><span style="color:#FF6666">WRITE IT DOWN & CREATE DIALOGUES</span><br>The best way to give this information to doctors and family is to write it down. The most safe and legal way to do this is to use advance directive documents. Talking openly to family and friends about your values,  beliefs, hopes and fears about the end of your life (and theirs) is simply smart life planning. Convinced? <h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="planning.php">YES</a></center>
					<center><a id="TemplateRight" class="answer" href="pageNo5.php">NO, I have no one to trust enough to act as my Health Care Agent.</a></center>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img src="images/sideBar/dataNo2.png">
			</aside>
			</div>
			<?php 
				include 'exitMessage.php';
			?>
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>