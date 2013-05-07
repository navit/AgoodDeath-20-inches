
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
			
			<div id="LivingWilllLine"><img src="images/blueLivingWillLine.png"></div>
			
			<div id="wrapper">
				<div id= "content">
					<img class="icon livingWill" src="images/icons/livingWill_1.png">
					<h1 class="title">LIVING WILL</h1>
					<h2 class= "question">How important is a pain free existence to you? How much pain can you tolerate on a chronic basis before life is no longer worth living?<br> CAN YOU 
					ANSWER THESE QUESTIONS?<h2>
					
					<div id ="choices">	
						<center><a id="TemplateLeft" class="answer" href="livingWill_2.php">YES</a></center>
						<center><a id="TemplateRight" class="answer" href="exitMessage.php">NO,thanks</a></center>
					</div><!-- closing choices -->
				
				</div><!-- closing content -->
			
			<aside>
				<img id="livingWill1" src= "images/sideBar/datalivingWill_1.png">
			</aside>
			
			</div><!closing wrapper-->
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>