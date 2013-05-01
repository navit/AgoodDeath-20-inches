<!doctype html>
<html lang="en">
  <head> 
        <title>Loader</title> 
        <LINK href="css/style.css" rel="stylesheet" type="text/css">
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
		<body>	
			<div id="emailMessage">
				<div id="Emessage">
				<form>
					To: <input type="text" name="firstname"><br>
					subject:<input type="text" placeholder="Health Care Proxy!" name="lastname">
				</form>
				<form>
					<input id="mail" type="text" placeholder="Hey I have decided to make you my health care proxy.I trust you to make health care decisions as I would for myself if I lose the ability to makethem.<br>I choose you because you are reliable and will uphold my wishes when I am unable to.<br>To continue this partnership, I would like to have a meaningful conversation with you!<br>I started a dialogue about my end-of-life intentions through a good death <br>Will you be my proxy?">
				</form>
				<input id ="send" type="submit" value="Submit">
				</div>
			</div><!closing exitmessage-->
	</body>
</html>

