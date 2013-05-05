

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
					<img class="icon" id="iconFinal" src="images/icons/iconFinal.png">
					<h1 class="title">FINAL DISPOSITION</h1>
					<h2 class= "question" id="finalDispo">After the death of a loved one, family and friends are often left with some tough decisions. You can help ease the pain by making your 						wishes about burial, autopsy, and organ donations clear in advance. Would you like to give it a try?</h2>
					
					<div id ="choices">	
						<center><a id="TemplateLeft" class="answer" href="finalDisposition1.php">YES</a></center>
						<center><a id="TemplateRight" class="answer hover" href="#">NO</a></center>
						
					</div><!-- closing choices -->
				</div><!-- losing content -->
			
			<aside>
				<img id ="final" src="images/sideBar/dataFinalDispo.png">
			</aside>
		
			</div><!closing wrapper-->
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>