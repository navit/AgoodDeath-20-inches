

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
				<img class="icon livingWill" src="images/icons/whatIf.png">
				<h1 class="title">what if...</h1>
				<h2 class= "question">You were in severe discomfort most of the time, such as nausea or diarrhea:</h2>

			<div id="slider">			
				<div class="square" id="want">
					<img src= "images/slider/want.png">
					<p> Want Treatment </p>
					</div>
				<div class="square" id="doNotWant">
					<img src= "images/slider/dontWant.png">
					<p>Don't Want Treatment </p>
				</div>				
			</div><!-- closing slider -->
			<center><a id="next" class="answer" href="whatIf_1.php">NEXT</a></center>
			
			</div><!-- closing content -->
			
			<aside>
			<img id="whatIf" src="images/sideBar/dataWhatIf.png">
			</aside>
			</div>
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>