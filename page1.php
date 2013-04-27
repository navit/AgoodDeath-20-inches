
<!doctype html>
<html lang="en">
  <head> 
        <title>Loader</title> 
        <link type="stylesheet" rel="stylesheet" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script> 
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <script type="text/javascript">
			$(document).ready(function() {
			    $("body").css("display", "none");
			 
			    $("body").fadeIn(1000);
			 
			    $("a.transition").click(function(event){
			        event.preventDefault();
			        linkLocation = this.href;
			        $("body").fadeOut(400, redirectPage);      
			    });
			/*
     var p=0;
               $("#progressbar").progressbar({value:0});
               var timer = setInterval(function(){
	               //This animates the bar
	               $("#progressbar .ui-progressbar-value").animate({width: p+"%"},500);
	               //This does static sets of the value
	               //$("#myProgressBar").progressbar("option","value",p);
	               p = p +33.33;
	               if(p>33.33){
                $("#progressbar .ui-progressbar-value").animate({width: "100%"}, 500);
                //$("#myProgressBar").progressbar("option","value",100);
                clearInterval(timer);
                	}
                },500);         
			});
*/
		</script>
	        
   </head>
		
		<body id="toolkit">
					
			<div id="out">
			<a id= "exit" href="exitMessage.php"> EXIT <img id ="ex" src="images/ex.PNG"></a> 
			</div>
			
			<div id="line"><img src="images/blueLine.png"></div>
			<div id="wrapper">			
			<div id= "content">
				<img class="icon" id="postPages" src="images/icons/icon1.png">
				<h1 class="title">POST MORTEM PLANNING</h1>
				<h2 class= "question">Ever joked about what you would want your funeral to look like, what song would be played and where would it take place?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="page2.php">YES</a></center>
					<center><a id="TemplateRight" class="answer" href="pageNo1.php">NO, NEVER</a></center>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img src="images/sideBar/data1.png">
			</aside>
			</div>
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>