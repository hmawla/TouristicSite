<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
		
		
		<link rel="stylesheet" type="text/css" href="css/style.css"   media="all" />
		
		
		<link rel="stylesheet" type="text/css" href="css/more.css" />
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/colorbox.css" />
		<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
		
		
		<script type="text/javascript" src="jQuery/jquery.js"></script>
		<script type="text/javascript" src="jQuery/bootstrap.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
	</head>

	<body >
		<script>
			$(window).scroll(function() {
				var height = $(window).scrollTop();
				document.getElementById("searcher").placeholder = height;
				if(height  < 589 ){
					document.getElementById("cat-nav").className = "navbar navbar-default changecolor";
					document.getElementById("cat-nav").style = "";
					document.getElementById("aboutid").style = "margin:auto;";
					
				}
				else if(height  < 2468 ){
					document.getElementById("cat-nav").className = "navbar navbar-default navbar-fixed-top changecolor";
					document.getElementById("cat-nav").style = "top:52px;";
					document.getElementById("aboutid").style = "padding-top: 72px; margin:auto;";
				}
				else {
					document.getElementById("cat-nav").className = "navbar navbar-default changecolor";
					document.getElementById("cat-nav").style = "";
					document.getElementById("aboutid").style = "margin:auto;";
				}
			});
			function scrollWin() {
				var height = $(window).scrollTop();
				
				window.scrollBy(0, 2468-height);
				getElementById("openabout").visibility = visible;
			}
		</script>
		<div>
			<div>
				<?php require_once("menu.php")?>
			</div>
			<div id="slideshowid" style="padding-top: 20px; padding-bottom:20px;">
				<br><br>
				<?php require_once("slideshow.php")?>
			</div>
			<div>
				<?php require_once("category.php")?>
			</div>
			
			<div id="aboutid" style="margin:auto;">
				<?php require_once("about.php")?>
			</div>
		</div>
		
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           <div>
				<?php require_once("contactus.php")?>
			</div>
	</body>
</html>
