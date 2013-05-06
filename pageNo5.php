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
				<img class="icon postPages" src="images/icons/iconPlanning.png">
				<h1 class="title">POST MORTEM PLANNING</h1>
				<h2 class= "question">Well, maybe you should consider a Living Will so that your medical instructions are clear and can be read by your caregivers when you are unable to communicate.<h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="livingWill.php">YES</a></center>
					<center><a id="TemplateRight" class="answer" href="#">NO, thanks</a></center>
				</div>
			</div><!-- losing content -->
			
			<aside>
			<img src="images/sideBar/dataNo5.png">
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