<title>A GOOD DEATH</title>
        <link type="stylesheet" rel="stylesheet" href="css/style.css" />
        <link type="stylesheet" rel="stylesheet" href="css/slider.css" />
        <link type="stylesheet" rel="stylesheet" href="css/sharingStyle.css" />
        <link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
        <script type='text/javascript' src="js/jquery.simplemodal.1.4.4.min.js"></script>
        <script type="text/javascript">
		$(document).ready(function() {
		
		(function resetWebsite(){
		
		window.setTimeout(function(){
		window.location = './index.php';
		},200000);
		
		})();
		
		$("body").css("display", "none");
		
		$("body").fadeIn(600);
		
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
	
		$(function() {
			$( "#slider" ).slider();
		});
		
		});

		</script>

