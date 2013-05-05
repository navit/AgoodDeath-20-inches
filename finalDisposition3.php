

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
		
			<div id="short"><img src="images/blueShortLine.png"></div>
			<div id="wrapper">
				<div id= "content">
					<img class="icon" id="action" src="images/icons/iconAction.png">
					<h1 class="title">TAKE ACTION!</h1>
					<h2 class= "question" id="final1"<h2>Now that you have dealt with a content asked on the living Will, would you like to give it a try and fill the actual form?</h2>
					
					<div id ="choices">	
						<center><a id="TemplateLeft" class="answer email" href="workInProgress.php">YES</a></center>
						<center><a id="TemplateRight" class="answer hover" href="exitMessage.php">NO</a></center>
					</div><!-- closing choices -->
				</div>
			
			<aside>
				<img id="final2" src="images/sideBar/dataFinalDispo_3.png">
			</aside>
		
			</div><!closing wrapper-->
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>