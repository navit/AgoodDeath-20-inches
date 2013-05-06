 
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
   		<div id="FinalDispoExitMessage">
			<div id="message">
				<h1> SO, YOU are not convinced yet!<br>before you go:</h1>
				<img src= "images/exitButton/info.png">
				<p> You may remember the Nancy Cruzan case, in which a Missouri woman suffered a head injury in an auto accident that rendered her in a coma-like state. She had left no written instructions about what doctors were to do if she ever faces such a situation. Her family wanted to discontinue intravenous feeding, but the hospital and the 
				state refused to allow it. Finally, the U.S. Supreme Court ruled that, although individuals do have the right to refuse medical treatment, they must express their wishes clearly enough to meet the standards set by the state in which they live.</p><p> Would you like give it another try?</P>
				  <a class="linkAnswer exitLink" id="stay" href="#">YES</a>
				  <a class="linkAnswer exitLink" href="thanks.php">NO</a>
			</div>
		</div><!closing exitmessage-->
		
		
		<script type="text/javascript">
			$('#stay').click(function(){
					$('#FinalDispoExitMessage').fadeOut(500);
				});	
		</script>

   </body>
</html>
		