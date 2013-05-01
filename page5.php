

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
			
			<div id="line"><img src="images/blueShortLine.png"></div>
			<div id="wrapper">
			<div id= "content">
				<img class="icon" src="images/icons/icon5.png">
				<h1 class="title" id="page5">END-OF-LIFE TALKS</h1>
				<h2 class= "question">Do you trust and know this person well enough to let him or her communicate your believes at a moment when you can no longer speak for yourself?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="page6.php">YES, OF COURSE</a></center>
					<center><a id="TemplateRight" class="answer hover" href="page5-1.php">NO I have no one to trust to act as my Health Care Agent</a></center>
					<!-- <div id= "hoverMessage"><img src= "images/hoverMessage.png"> <p>YOU NEED TO THINK  <br>OF ANOTHER PERSON!</p> </div> -->
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img id="page5" src="images/sideBar/data5.png">
			</aside>
			</div>
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>