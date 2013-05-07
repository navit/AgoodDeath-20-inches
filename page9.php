

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
				<img class="icon" src="images/icons/icon9.png">
				<h1 class="title">END-OF-LIFE TALKS</h1>
				<h2 class= "question">Do you trust this person to handle conflicting opinions between family members, friends, and medical personnel?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="page10.php">YES</a></center>
					<center><a id="TemplateRight" class="answer hover" href="#">NO</a></center>
					<div id= "hoverMessage"><img src= "images/hoverMessage.png"> <p>MAYBE YOU NEED TO THINK OF ANOTHER PERSON!</p> </div>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img id="page9" src="images/sideBar/data9.png">
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