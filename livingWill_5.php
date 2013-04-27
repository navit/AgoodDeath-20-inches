

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
				<img class="icon livingWill" src="images/icons/livingWill_5.png">
				<h1 class="title">LIVING WILL</h1>
				<h2 class= "question">Imagine that you are in a permanent coma, and you are dependent on a tube inserted into your stomach for nutrition and hydration. Would it be important to you that decisions about your treatment be guided by particular religious beliefs or spiritual values?</h2>
				
				<div id ="choices">	
					<center><a id="ThreeTemplateLeft" class="ThreeAnswer" href="livingWill_6.php">yes</a></center>
					<center><a id="ThreeTemplateMiddle" class="ThreeAnswer" href="livingWill_6.php">no</a></center>	
					<center><a id="ThreeTemplateRight" class="ThreeAnswer" href="livingWill_6.php">i am uncertain</a></center>
						
				</div><!-- closing choices -->
			</div><!-- closing content -->
			
			<aside>
			<img id="livingWill" src="images/sideBar/datalivingWill_2.png">
			</aside>
			</div>
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>