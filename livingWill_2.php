
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
				<img class="icon livingWill" src="images/icons/livingWill_2.png">
				<h1 class="title">LIVING WILL</h1>
				<h2 class= "question" id="living2">Imagine that you had Alzheimer's disease and it had progressed to the point where you could not recognize or converse with your loved ones. When spoon-feeding was no longer possible, would you want to be fed by a tube into your stomach?<h2>
				
				<div id ="choices">	
					<center><a id="ThreeTemplateLeft" class= "ThreeAnswer" href="livingWill_3.php">YES</a></center>					
					<center><a id="ThreeTemplateRight" class="ThreeAnswer" href="livingWill_3.php">I AM UNCERTAIN</a></center>
					<center><a id="ThreeTemplateMiddle" class="ThreeAnswer" href="livingWill_3.php">NO</a></center>	
				</div><!-- closing choices -->

			</div><!-- closing content -->
			
			<aside>
			<img id="livingWill" src="images/sideBar/datalivingWill_2.png">
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