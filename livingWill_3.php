
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
				<img class="icon livingWill" src="images/icons/livingWill.png">
				<h1 class="title">LIVING WILL</h1>
				<h2 class= "question">Which of the following do you fear most near the end of life?<h2>
				
				<div id ="choices">	
					<center><a id="ThreeTemplateLeft" class="ThreeAnswer" href="livingWill_4.php">Being in pain</a></center>
					<center><a id="ThreeTemplateRight" class="ThreeAnswer" href="livingWill_4.php">Losing the ability to think</a></center>
					<center><a id="ThreeTemplateMiddle" class="ThreeAnswer" href="livingWill_4.php">Being alone</a></center>		
				</div><!-- closing choices -->
			</div><!-- closing content -->
			
			<aside>
			<form><textarea id="graveStories" type="text" name="story" placeholder="Share your own story here..."></textarea></form>
			<img id="livingWill3" src="images/sideBar/datalivingWill_3.png">
			<img id="social3" src="images/sideBar/social.png">						
				</div>
			</aside>
			</div>
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>