

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
				<img class="icon" id="postPages" src="images/icons/icon3-1.png">
				<h1 class="title">POST MORTEM PLANNING</h1>
				<h2 class= "question">Have you ever communicated these end of life wishes to the world in a serious way?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="page4.php">YES</a></center>
					<center><a id="TemplateRight" class="answer" href="dialogue.php">NO, never really dedicated the time for it</a></center>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img id="page3" src="images/sideBar/data3-1.png">
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