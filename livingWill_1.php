
<!doctype html>
<html lang="en">
  <head> 
        <title>living will</title> 
        <link type="stylesheet" rel="stylesheet" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script> 
        <script type='text/javascript' src="js/jquery.simplemodal.1.4.4.min.js"></script>
        <script type="text/javascript">
			$(document).ready(function() {
			    $("body").css("display", "none");
			 
			    $("body").fadeIn(1000);
			 
			    $("a.transition").click(function(event){
			        event.preventDefault();
			        linkLocation = this.href;
			        $("body").fadeOut(400, redirectPage);      
			    });
			
			    $('.answer').click(function(){
			    	$('#exitMessage').fadeIn(1000)
			    	$('#exitMessage').modal()
			    	$('#exitMessage').fadeOut(1000)

			    });
		
			});
		</script>
	        
   </head>
		
		<body id="toolkit">
			<div id="out">
				<a id= "exit" href="exitMessage.php"> EXIT <img id ="ex" src="images/ex.PNG"></a> 
			</div>
			
			<div id="LivingWilllLine"><img src="images/blueLivingWillLine.png"></div>
			
			<div id="wrapper">
				<div id= "content">
					<img class="icon livingWill" src="images/icons/livingWill_1.png">
					<h1 class="title">LIVING WILL</h1>
					<h2 class= "question">How important is a pain free existence to you? How much pain can you tolerate on a chronic basis before life is no longer worth living?<br> CAN YOU 
					ANSWER THESE QUESTIONS?<h2>
					
					<div id ="choices">	
						<center><a id="TemplateLeft" class="answer" href="livingWill_2.php">YES</a></center>
						<center><a id="TemplateRight" class="answer" href="#">NO,thanks</a></center>
					</div><!-- closing choices -->
				
				</div><!-- closing content -->
			
			<aside>
				<img id="livingWill1" src= "images/sidebar/datalivingWill_1.png">
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