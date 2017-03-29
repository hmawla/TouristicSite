<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		<script type="text/javascript" src="jQuery/jquery.js"></script>
		<script type="text/javascript" src="jQuery/bootstrap.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/more.css">
	</head>

	<body >
		<script>
			$(window).scroll(function() {
				var height = $(window).scrollTop();

				if(height  > some_number) {
					// do something
				}
			});
		</script>
		<div>
			<div>
				<?php require_once("menu.php")?>
			</div>
			<div style="padding:10px;">
				<br><br>
				<?php require_once("slideshow.php")?>
			</div>
			<div>
				<nav class="navbar navbar-default changecolor">
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">All</a></li>
							<li><a href="#">112321</a></li>
							<li><a href="#">11321</a></li>
							<li><a href="#">1123123</a></li>
							<li><a href="#">1231231</a></li>
							<li><a href="#">1231231</a></li>
							<li><a href="#">1231231</a></li>
						</ul>
					</div>
				</nav>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>
			
			<div style="margin:auto">
				<?php require_once("about.php")?>
			</div>
		</div>
		
            
           
	</body>
</html>