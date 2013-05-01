

<!doctype html>
<html lang="en">
  <head> 
    <?php
		include 'header.php';
	?>
   </head>
		
		<body id="toolkit">
			<header>
				<?php include 'header.php';?>
			</header>
			
			<div id="out">
			<?php
				include 'exitButton.php';
			?>

			</div>
			
			<div id="line"><img src="images/blueLine.png"></div>
			<div id="wrapper">
				<div id= "content">
					<img class="icon" src="images/icons/iconFinal_1.png">
					<h1 class="title">FINAL DISPOSITION</h1>
					<h2 class= "question" id="final1">What would you be willing to donate?</h2>
					
					<div id ="choices">	
						<center><a id="Top" class="ThreeLongAnswer" href="finalDisposition2.php">Any needed organs and/or parts for any purpose</a></center>
						<center><a id="Middle" class="ThreeLongAnswer" href="whatIf.php">My body for anatomical study if needed</a></center>	
						<div id="Bottom" class="ThreeLongAnswer" href="finalDisposition2.php">The following organs/tissues:
							<form id="organs">
							<input type="checkbox" name="organ" value="Bike">Heart<br>
							<input type="checkbox" name="organ" value="Car">Lungs<br>
							<input type="checkbox" name="organ" value="Car">Liver<br>
							<input type="checkbox" name="organ" value="Car">Kidneys<br>
							<input type="checkbox" name="organ" value="Car">Intestines<br>
							<input type="checkbox" name="organ" value="Car">Pancreas<br>
							<input type="checkbox" name="organ" value="Car">Eyes<br>
							<input type="checkbox" name="organ" value="Car">Skin<br>
							<input type="checkbox" name="organ" value="Car">Blood Vessels<br>
							</form>
						</div>
						<center><a id="organsNext" class="answer" href="finalDisposition2.php">NEXT</a></center>
					</div><!-- closing choices -->
				</div>
			
			<aside>
				<img src="images/sideBar/dataFinalDispo_1.png">
			</aside>
		
			</div><!closing wrapper-->
			
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