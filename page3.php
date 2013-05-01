
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
				<img class="icon" id="postPages" src="images/icons/icon3.png">
				<h1 class="title">POST MORTEM PLANNING</h1>
				<h2 class= "question">Ever made casual statements to your family like "Do not keep me alive on machines," "No Heroics," or "Make sure I am not in pain?"</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="page3-1.php">YES</a></center>
					<center><a id="TemplateRight" class="answer" href="pageNo1.php">NO, never really dedicated the time for it</a></center>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img id="page3" src="images/sideBar/data3.png">
			</aside>
			</div>
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>