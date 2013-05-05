
<!doctype html>
<html lang="en">
  <head> 
     <?php
		include 'header.php';
	?>
   </head>
		
		<body id="toolkit">
			<div id="out">
				<a id= "exit" href="exitMessage.php"> EXIT <img id ="ex" src="images/ex.PNG"></a> 
			</div>
			
			<div id="line"><img src="images/blueLine.png"></div>
			<div id="wrapper">
			<div id= "content">
				<img class="icon" src="images/icons/icon13.png">
				<h1 class="title">END-OF-LIFE TALKS</h1>
				<h2 class= "question">Now that you have chosen someone you can trust with your health care issues, it is important that you share your decision with this person. Would you like to 				send him a message?</h2>
				
				<div id ="choices">
					<center><a id="TemplateLeft" class="answer email" href="emailMessage.php">YES</a></center>
					<center><a id="TemplateRight" class="answer hover" href="#">NO</a></center>
					<div id= "hoverMessage"><img src= "images/hoverMessage.png"> <p>YOU NEED TO THINK <br>OF ANOTHER PERSON!</p> </div>
				</div><!-- closing choices -->
			
			</div><!-- losing content -->
			
			<aside>
				<img id="page13" src="images/sideBar/data13.png">
			</aside>
			</div>			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>