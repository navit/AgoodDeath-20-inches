

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
				<img class="icon livingWill" src="images/icons/livingWill_4.png">
				<h1 class="title">LIVING WILL</h1>
				<h2 class= "question">If you were terminally ill with a condition that caused unbearable pain, would you want to be sedated, even to the point of unconsciousness if it were necessary to control your pain?</h2>
				
				<div id ="choices">	
					<center><a id="ThreeTemplateLeft" class="ThreeAnswer" href="whatIf.php">yes</a></center>
					<center><a id="ThreeTemplateMiddle" class="ThreeAnswer" href="whatIf.php">no</a></center>	
					<center><a id="ThreeTemplateRight" class="ThreeAnswer" href="whatIf.php">i am uncertain</a></center>
						
				</div><!-- closing choices -->
			</div><!-- closing content -->
			
			<aside>
			<img id="livingWill4" src="images/sideBar/datalivingWill_4.png">
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