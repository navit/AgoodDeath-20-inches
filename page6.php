
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
				<img class="icon" id="icon6" src="images/icons/icon6.png">
				<h1 class="title">END-OF-LIFE TALKS</h1>
				<h2 class= "question" id="shortQuestion">Is this person at least 18 years old?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="page7.php">YES</a></center>
					<center><a id="TemplateRight" class="answer hover" href="#">NO</a></center>
					<div id= "hoverMessage"><img src= "images/hoverMessage.png"> <p>YOU NEED TO THINK  <br>OF ANOTHER PERSON!</p> </div>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img id="page6" src="images/sideBar/data6.png">
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