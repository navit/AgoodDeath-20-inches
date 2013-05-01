
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
				<img class="icon" src="images/icons/icon12.png">
				<h1 class="title">END-OF-LIFE TALKS</h1>
				<h2 class= "question">Can you make this person your health care agent? Can you officially name this person as your health care proxy?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="page13.php">YES</a></center>
					<center><a id="TemplateRight" class="answer hover" href="#">NO</a></center>
					<div id= "hoverMessage"><img src= "images/hoverMessage.png"> <p>MAYBE YOU NEED TO THINK OF ANOTHER PERSON!</p> </div>

				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img id = "page12" src="images/sideBar/data12.png">
			</aside>
			</div>
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>