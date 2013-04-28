
<!doctype html>
<html lang="en">
  <head> 
        <title>Loader</title> 
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
			    
			    $('.hover').click(function(){
			    	$('#hoverMessage').fadeIn();  
			    });
			    $('.hover').mouseleave(function(){
				    $('#hoverMessage').fadeOut();
			    });
			    
			    $('.email').click(function(){
			    	$('#emailMessage').fadeIn(1000)
			    	$('#emailMessage').modal()
			   });
		
			   
			});
			
		</script>
	        
   </head>
		
		<body id="toolkit">
			<div id="out">
				<a id= "exit" href="exitMessage.php"> EXIT <img id ="ex" src="images/ex.PNG"></a> 
			</div>
			
			<div id="wrapper">
			<div id= "nosideBar">
				<img class="icon" id="action" src="images/icons/iconAction.png">
				<h1 class="title">TAKE ACTION!</h1>
				<h2 class= "question">Now it’s time to fill the legal form concerned with your health care proxy. Would you like to view the form?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer email" href="dashBoard.php">YES</a></center>
					<center><a id="TemplateRight" class="answer hover" href="#exitMessage.php">NO</a></center>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
				<!-- <img id="page13" src="images/sideBar/data15.png"> -->
			</aside>
			</div><!-- closing wrraper -->
			
			<footer>
			 
			</footer>
		</body>
</html>