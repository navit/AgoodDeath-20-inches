<?php
ini_set('display_errors', 'On');
?>
<!doctype html>
<html lang="en">
  <head> 
     <?php
		include 'header.php';
	?>
   </head>
   <body id="toolkit">
   		<div id="exitMessage">
			<div id="message">
				<h1> SO, YOU are not convinced yet!<br>before you go:</h1>
				<img src= "images/exitButton/info.png">
				<p> End life decisions can be a very hard and emotional issue to deal<br> with. Although it is better to start the process early and gain as<br> much knowledge as you can, we understand that one might fear<br> going through with it.</p> <p>If you would like to come back and finish the process,</p><p id="remind">we could remind you in</p>
				<div id="options" class="select">
					<select>
					  <option value="one week">one week</option>
					  <option value="one month">one month</option>
					  <option value="6 month">six months</option>
					  <option value="one year">one year </option>
					</select> 
				</div>
					<!--  <p>to come back and continue the process. Would you like that?</p> -->
					 <a class="linkAnswer exitLink" href="thanks.php">YES</a>
					 <a class="linkAnswer exitLink" id="stay" href="#">No, I would like to go back</a>
			</div><!-- closing message -->
		</div><!closing exitmessage-->
		
		<script type="text/javascript">
			
				$('#stay').click(function(){
					$('#exitMessages').fadeOut(500);
					// use this to close modal.
					$.modal.close();
				});	

		</script>


   </body>
</html>
		