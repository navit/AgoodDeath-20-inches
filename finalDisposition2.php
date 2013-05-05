

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
					<img class="icon" src="images/icons/iconFinal_2.png">
					<h1 class="title">BURIAL ARRANGEMENTS</h1>
					<h2 class= "question" id="final1"<h2>I would like to be:</h2>
					
					<div id ="choices">	
						<center><a id="Top" class="ThreeLongAnswer" href="finalDisposition3.php">Cremated</a></center>
						<center><a id="Middle" class="ThreeLongAnswer" href="finalDisposition3.php">Laid to rest at a cemetery</a></center>						
						<center><a id="bottom" class="ThreeLongAnswer" href="finalDisposition3.php">Donated to medical science</a></center>
						<center><a id="bottom" class="ThreeLongAnswer" href="finalDisposition3.php">Not sure yet? It is ok. You can come back later.</a></center>
					</div><!-- closing choices -->
				</div>
			
			<aside>
				<img id="final2" src="images/sideBar/dataFinalDispo_2.png">
			</aside>
		
			</div><!closing wrapper-->
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>