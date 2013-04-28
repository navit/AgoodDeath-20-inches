
<!doctype html>
<html lang="en">
  <head> 
        <title>Final Disposition</title> 
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

			    });
		
			});
		</script>
	        
   </head>
		
		<body>
			
			<div id="DashWrapper">
			<nav  id ="platform">
				<ul>
					<li><a href ="Dashboard.php"> DASHBOARD</a></li>
					<li><a href ="Dashboard.php"> TOOLKIT</a></li>
					<li><a href ="Dashboard.php"> RESOURCES</a></li>
					<li><a href ="Dashboard.php"> ABOUT</a></li>
			
				</ul>
			</nav>
			<img  id="dashboard" src="images/dashBoard.png">
			
			</div><!closing wrapper-->
			
						
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>