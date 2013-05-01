
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
				<img class="icon" src="images/icons/icon5-1.png">
				<h1 class="title" id="page5">END-OF-LIFE TALKS</h1>
				<h2 class= "question">Well maybe you should consider a Living Will so that your medical instructions are clear and can be read by your care givers when you are unable to communicate 				your wishes. </h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="livingWill.php">Sure</a></center>
					<center><a id="TemplateRight" class="answer hover" href="exitMesaage">NO thanks</a></center>
					<!-- <div id= "hoverMessage"><img src= "images/hoverMessage.png"> <p>YOU NEED TO THINK  <br>OF ANOTHER PERSON!</p> </div> -->
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img id="page5" src="images/sideBar/data5-1.png">
			</aside>
			</div>
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>