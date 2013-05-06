
<html lang="en">
  <head> 
     <?php
		include 'header.php';
	?>
   </head>
	   <body>
	   		<a id= "exit" href="#"> EXIT <img id ="ex" src="images/homepage/exButton.png"></a>

			<script type="text/javascript">		
				$('#exit').click(function(){
				$('#exitMessage').fadeIn(100);
				$('#exitMessage').modal()
				});
			</script>
			
		</body>
</html>
		





