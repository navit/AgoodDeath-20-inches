
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
			    //appear on top and make it a random message.
			   
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
				<img class="icon" src="images/icons/icon12.png">
				<h1 class="title">END-OF-LIFE TALKS</h1>
				<h2 class= "question">Can you make this person your health care agent? Can you officially name this person as your health care proxy?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="page13.php">YES</a></center>
					<center><a id="TemplateRight" class="answer hover" href="#">NO</a></center>
					<div id= "hoverMessage"><img src= "images/hoverMessage.png"> <p>MAYBE YOU NEED TO THINK OF ANOTHER PERSON!</p> </div>

				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img id = "page12" src="images/sideBar/data12.png">
			</aside>
			</div>
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>