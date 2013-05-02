
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
				<img class="icon livingWill" src="images/icons/livingWill.png">
				<h1 class="title">LIVING WILL</h1>
				<h2 class= "question" id="living">Would you like to take the first step to communicate your<br> beliefs and wishes?<h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="livingWill_1.php">YES</a></center>
					<center><a id="TemplateRight" class="answer" href="exitMessage.php">NO,thanks</a></center>
				</div><!-- closing choices -->
			
			</div><!-- closing content -->
			
			<aside>
				<img id="livingWill" src="images/sideBar/datalivingWill.png">
			</aside>
			
			</div><!closing wrapper-->
			
			 <!--
<script type="text/javascript">
				   $(document).ready(function() {			
			    $('.answer').click(function(){
			    	$('#exitMessage').fadeIn(1000)
			    	$('#exitMessage').modal()
			    });
		
			});
			</script>  
		
			<?php 
				include 'exitMessage.php';
			?>
-->
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>