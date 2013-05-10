
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
				<img class="icon" id="postPages" src="images/icons/icon1.png">
				<h1 class="title">POST MORTEM PLANNING</h1>
				<h2 class= "question">Ever joked about what you would want your funeral to look like, what song would be played and where would it take place?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="page2.php">YES</a></center>
					<center><a id="TemplateRight" class="answer" href="pageNo1.php">NO, NEVER</a></center>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img src="images/sideBar/data1.png">
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