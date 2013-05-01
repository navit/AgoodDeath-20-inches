
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
				<img class="icon" src="images/icons/icon8.png">
				<h1 class="title">END-OF-LIFE TALKS</h1>
				<h2 class= "question">Is this person likely to be available long into the future?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="page9.php">YES</a></center>
					<center><a id="TemplateRight" class="answer hover" href="#">NO</a></center>
					<div id= "hoverMessage"><img src= "images/hoverMessage.png"> <p>MAYBE YOU NEED TO THINK OF ANOTHER PERSON!</p> </div>				
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img src="images/sideBar/data8.png">
			</aside>
			</div>
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>