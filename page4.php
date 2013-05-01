

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
				<img class="icon" id="postPages" src="images/icons/icon4.png">
				<h1 class="title">POST MORTEM PLANNING</h1>
				<h2 class= "question" id="question2">Who did you talk to about it with?</h2>
				
				<div id ="choices">	
					<form>
					<p> <span style="color:#FF6666"> +1</span> generation ( i.e. mother)</p>
					<input class="inputAnswer" type="text" placeholder="enter name here" name="data">
					<p> <span style="color:#FF6666">0</span> your generation ( i.e. brother)</p>
					<input class="inputAnswer" type="text" placeholder="enter name here" name="data">
					<p> <span style="color:#FF6666"> -1</span>  generation ( i.e. your kids)</p>
					<input class="inputAnswer" type="text" placeholder="enter name here" name="data">
					</form>	
					<form action="page5.php"><input class="submitAnswer" type="submit" value="submit"></form>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img id="page4" src="images/sideBar/data4.png">
			</aside>
			</div>
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>