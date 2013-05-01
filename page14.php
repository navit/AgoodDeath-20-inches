
<!doctype html>
<html lang="en">
  <head> 
     <?php
		include 'header.php';
	?>
   </head>
		
		<body id="toolkit">
			<div id="out">
				<a id= "exit" href="exitMessage.php"> EXIT <img id ="ex" src="images/ex.PNG"></a> 
			</div>
			
			<div id="line"><img src="images/blueLongLine.png"></div>
			<div id="wrapper">
			<div id= "content">
				<img class="icon" src="images/icons/icon13.png">
				<h1 class="title">END-OF-LIFE TALKS</h1>
				<h2 class= "question">Now that you have chosen someone you can trust with your health care issues, it is important that you share your decision with this person. Would you like to 				send him a message?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer href=" href="mailto:email@echoecho.com?subject=Health Care Proxy!
					&body=Hey I have decided to make you my health care proxy. I trust you to make health care decisions as I would for myself if I lose the ability to make them. 
					I choose you because you are reliable and will uphold my wishes when I am unable to.
					To continue this partnership, I would like to have a meaningful conversation with you!
					I started a dialogue about my end-of-life intentions through agoodeath.
					Will you be my proxy?">YES</a></center>
					<center><a id="TemplateRight" class="answer hover" href="#">NO</a></center>
					<div id= "hoverMessage"><img src= "images/hoverMessage.png"> <p>YOU NEED TO THINK <br>OF ANOTHER PERSON!</p> </div>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
				<img id="page13" src="images/sideBar/data13.png">
			</aside>
			</div><!-- closing wrraper -->
				
			<script type="text/javascript">
			$(document).ready(function() {			    
			    $('.email').click(function(){
			    	$('#emailMessage').fadeIn(1000)
			    	$('#emailMessage').modal()
			   });
	   
			});

			</script>
	        
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>