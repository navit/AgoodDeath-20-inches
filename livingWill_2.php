

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
				<img class="icon livingWill" src="images/icons/livingWill_2.png">
				<h1 class="title">LIVING WILL</h1>
				<h2 class= "question" id="living2">Imagine that you had Alzheimer's disease and it had progressed to the point where you could not recognize or converse with your loved ones. When spoon-feeding was no longer possible, would you want to be fed by a tube into your stomach?<h2>
				
				<div id ="choices">	
					<center><a id="ThreeTemplateLeft" class= "ThreeAnswer" href="livingWill_3.php">YES</a></center>					
					<center><a id="ThreeTemplateRight" class="ThreeAnswer" href="livingWill_3.php">I AM UNCERTAIN</a></center>
					<center><a id="ThreeTemplateMiddle" class="ThreeAnswer" href="livingWill_3.php">NO</a></center>	
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