
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
				<img class="icon" src="images/icons/icon13.png">
				<h1 class="title">END-OF-LIFE TALKS</h1>
				<h2 class= "question">Now that you have chosen someone you can trust with your health care issues, it is important that you share your decision with this person. Would you like to 				send him or her a message?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="page14.php">YES</a></center>
					<center><a id="TemplateRight" class="answer hover" href="pageNo5.php">NO</a></center>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
				<img id="page13" src="images/sideBar/data13.png">

			</aside>
			</div>
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>