<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
		<script src="js/jquery-1.11.2.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		<script src="js/bootstrap.js"></script>
	</head>

	<body >
		<div id="wrap">
			<header id="header" class="my-nav-style navbar-fixed-top" role="banner" >
       
				<ul class="nav nav-tabs ">
					<li role="presentation"><a class="navbar-brand" href="#">GO TOUR</a></li>
					<li role="presentation" class="active"><a href="#">Home</a></li>
					<li role="presentation"><a href="#">Search</a></li>
					<li role="presentation"><a href="#">Contact Us</a></li>
					<li role="presentation"><a href="#">About</a></li>
					<li role="presentation" class="active my-2 search_style"><input type="text" href="#"></a></li>
				</ul>
                
                 <div class="navbar-form navbar-right" > <?php require_once('login.php'); ?> </div>
			</header>
			
			<div class="my-nav-style"  id="content" role="main">
				<image src="images/green-landscape-11.jpg" />
			</div>
            
            
          
		</div>
	</body>
</html>