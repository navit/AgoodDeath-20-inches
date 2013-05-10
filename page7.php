
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
			
			<div id="line"><img src="images/blueLine.png"></div>
			<div id="wrapper">
			<div id= "content">
				<img class="icon" src="images/icons/icon7.png">
				<h1 class="title">END-OF-LIFE TALKS</h1>
				<h2 class= "question">Does this person live close by or could travel to be at your side if needed?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="page8.php">YES</a></center>
					<center><a id="TemplateRight" class="answer hover" href="#">NO</a></center>
					<div id= "hoverMessage"><img src= "images/hoverMessage.png"> <p>MAYBE YOU NEED TO THINK OF ANOTHER PERSON!</p> </div>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
				<form><textarea id="personalStories" type="text" name="story" placeholder="Share your own story here..."></textarea><br></form>
				<img id="stories" src="images/sideBar/data7.png">
				<div id="storyShare"><a class="answer" href="#">SHARE</a></div>
				<div id="thanksForSharing">
				<p> thanks for sharing!</p>
				<!--
<div id= "social">
				<img src= "images/sharing/social.png">
				</div>
				<ul id="social_sharing">
					<li>
						<a href="https://twitter.com/intent/tweet"><img class="share-facebooksrc" src=" images/sharing/facebook.png"></a>
						</a>					
					</li>
				
				</ul>
-->
				<!-- <div id="demo1" data-url="http://sharrre.com" data-text="Make your sharing widget with Sharrre (jQuery Plugin)" data-title="share"></div>  -->

			</aside>
			</div> <!-- closing wrapper -->
			
			<!--
<script type='text/javascript' src="js/jquery.sharrre-1.3.4.js"></script> 
			<script type="text/javascript">
			$('#demo1').sharrre({
					  share: {
					    facebook: true,
					    twitter: true
					  },
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
			$('#storyShare').click(function(){
					$('#thanksForSharing').fadeIn();
					});
					$('#storyShare').mouseleave(function(){
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