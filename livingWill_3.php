
<!doctype html>
<html lang="en">
  <head> 
  	<?php
		include 'header.php';
	?>        
  </head>
		
		<body id="toolkit">
			
			<div id="out">
			<?php
				include 'exitButton.php';
			?>
			</div>
			
			<div id="LivingWilllLine"><img src="images/blueLivingWillLine.png"></div>
			<div id="wrapper">
			<div id= "content">
				<img class="icon livingWill" src="images/icons/livingWill.png">
				<h1 class="title">LIVING WILL</h1>
				<h2 class= "question">Which of the following do you fear most near the end of life?<h2>
				
				<div id ="choices">	
					<center><a id="ThreeTemplateLeft" class="ThreeAnswer" href="livingWill_4.php">Being in pain</a></center>
					<center><a id="ThreeTemplateRight" class="ThreeAnswer" href="livingWill_4.php">Losing the ability to think</a></center>
					<center><a id="ThreeTemplateMiddle" class="ThreeAnswer" href="livingWill_4.php">Being alone</a></center>		
				</div><!-- closing choices -->
			</div><!-- closing content -->
			
			<aside>
			<form><textarea id="graveStories" type="text" name="story" placeholder="Share your own story here..."></textarea></form>
			<img id="livingWill3" src="images/sideBar/datalivingWill_3.png">
			<!-- <input id="graveShare"type="submit" action="#"value="SHARE"> -->
			<div id="graveShare"><a class="answer" href="#">SHARE</a></div>
			<div id="thanksForSharing">
			<p> thanks for sharing!</p>
			</div>
			<!-- <div id="demo1" data-url="http://sharrre.com" data-text="Make your sharing widget with Sharrre (jQuery Plugin)" data-title="share"></div> -->						
			</aside>
			
			</div><!-- closing wrapper -->
			
			<!--
<script type='text/javascript' src="js/jquery.sharrre-1.3.4.js"></script> 
			<script type='text/javascript' src="js/jquery.sharrre-1.3.4.js"></script> 
			<script type="text/javascript">
			$('#demo1').sharrre({
					  share: {
					    /* googlePlus: true, */
					    facebook: true,
					    twitter: true
					  },
					  /*
buttons: {
					    googlePlus: {size: 'tall', annotation:'bubble'},
					    facebook: {layout: 'box_count'},
					    twitter: {count: 'vertical', via: '_JulienH'}
					  },
*/
					  hover: function(api, options){
					    $(api.element).find('.buttons').show();
					  },
					  hide: function(api, options){
					    $(api.element).find('.buttons').hide();
					  },
					  enableTracking: true
					});
			</script>	
-->
			<script type="text/javascript">
			$('#graveShare').click(function(){
					$('#thanksForSharing').fadeIn();
					});
					$('#graveShare').mouseleave(function(){
					$('#thanksForSharing').fadeOut();
					});
			</script>
			
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