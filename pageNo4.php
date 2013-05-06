
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
				<img class="icon postPages" src="images/icons/iconNo4.png">
				<h1 class="title">POST MORTEM PLANNING</h1>
				<h2 class= "question NoQuestions"><span style="color:#FF6666">Be responsible and avoid conflicts.</span><br>What if you had a sudden and permanent brain injury? How bad would it have to be for you to say that you would not want to be kept alive? Making your wishes known ensures you receive the care you want. Convinced?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="planning.php">YES</a></center>
					<center><a id="TemplateRight" class="answer" href="#">NO</a></center>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img src="images/sideBar/dataNo4.png">
			</aside>
			</div>
		
			<script type="text/javascript">		
				$('.answer').click(function(){
				$('#exitMessage').fadeIn(100);
				$('#exitMessage').modal()
				});
			</script>
			
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