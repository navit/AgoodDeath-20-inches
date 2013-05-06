<!doctype html>
<html lang="en">
  <head> 
        <?php
			include 'header.php';
		?> 
  </head>
		
		<body id="toolkit">
		
			<div id="out">
				<a id= "exit" href="#"> EXIT <img id ="ex" src="images/homepage/exButton.png"></a>			
			</div>
			
			<div id="line"><img src="images/blueLine.png"></div>
			<div id="wrapper">
			<div id= "content">
				<img class="icon" id="postPages" src="images/icons/icon0.png">
				<h1 class="title">POST MORTEM PLANNING</h1>
				<h2 class= "question">Have you ever thought about the end of<br>your life and how you want it to unfold?</h2>
			</div>
			</div>
			<?php
				include 'exitMessage.php';
			?>
			
			 <script src="js/jquery.bpopup.min.js"></script>
			
			<script type="text/javascript">		
				
				$('a#exit').click(function(){
				$('#exitMessage').fadeIn(100);
				$('#exitMessage').modal()
				});	
				
		   	</script>
		   	
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>