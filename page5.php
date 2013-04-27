<?php

ini_set('display_errors', 'On');
include 'content.php';

?>

<!doctype html>
<html lang="en">
  <head> 
        <title>Loader</title> 
        <link type="stylesheet" rel="stylesheet" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script> 
        <script type="text/javascript">
			$(document).ready(function() {
			    $("body").css("display", "none");
			 
			    $("body").fadeIn(1000);
			 
			    $("a.transition").click(function(event){
			        event.preventDefault();
			        linkLocation = this.href;
			        $("body").fadeOut(400, redirectPage);      
			    });
			        
			     $('.hover').click(function(){
			    	$('#hoverMessage').fadeIn();  
			    });
			    $('.hover').mouseleave(function(){
				    $('#hoverMessage').fadeOut();
			    });
			  
			});
		</script>
	        
   </head>
		
		<body id="toolkit">
			<div id="out">
				<a id= "exit" href="exitMessage.php"> EXIT <img id ="ex" src="images/ex.PNG"></a> 
			</div>
			
			<div id="line"><img src="images/blueLine.png"></div>
			<div id="wrapper">
			<div id= "content">
				<img class="icon" src="images/icons/icon5.png">
				<h1 class="title" id="page5">END-OF-LIFE TALKS</h1>
				<h2 class= "question">Do you trust and know this person well enough to let him or her communicate your believes at a moment when you can no longer speak for yourself?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="page6.php">YES, OF COURSE</a></center>
					<center><a id="TemplateRight" class="answer hover" href="page5-1.php">NO I have no one to trust to act as my Health Care Agent</a></center>
					<!-- <div id= "hoverMessage"><img src= "images/hoverMessage.png"> <p>YOU NEED TO THINK  <br>OF ANOTHER PERSON!</p> </div> -->
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img id="page5" src="images/sideBar/data5.png">
			</aside>
			</div>
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>