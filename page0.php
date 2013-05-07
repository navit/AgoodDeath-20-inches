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
				<img class="icon" id="postPages" src="images/icons/icon0.png">
				<h1 class="title">POST MORTEM PLANNING</h1>
				<h2 class= "question">Have you ever thought about the end of<br>your life and how you want it to unfold?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="page1.php">YES, OF COURSE</a></center>
					<center><a id="TemplateRight" class="answer" href="pageNo1.php">NO, I AM YOUNG AND HEALTHY, DO NOT LIKE TO DISCUSS MY DEATH</a></center>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img src="images/sideBar/data0.png">
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