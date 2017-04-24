<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>gotour</title>
		
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/colorbox.css" />
		
		<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
		
		
		<script type="text/javascript" src="jQuery/jquery.js"></script>
		<script type="text/javascript" src="jQuery/bootstrap.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
	</head>
	<style>
		body{
		background-image: url("images/background.jpg");
		background-attachment: fixed;
		background-size:100% 100%
		}
	</style>
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
		<br>
		<div>
			<div>
				<?php require_once("menu.php")?>
			</div>
			<div id="slideshowid" style="">
							<?php require_once("newslider.php")?>
			</div>
			<table class="container">
				
				<tr>
					<td></td>
					<td>
						<div>
							<?php require_once("category.php")?>
						</div>
					</td>
					<td></td>
				</tr>
			   
			  <tr>
				<td></td>
				<td>
					<div class="container text-center">    
						<h3>ads!</h3><br>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/1.jpg" class="img-responsive" style="width:100%" alt="Image">
								<p>Current Project</p>
							</div>
							<div class="col-sm-4"> 
								<img src="images/1.jpg" class="img-responsive" style="width:100%" alt="Image">
								<p>Project 2</p>    
							</div>
							<div class="col-sm-4">
							<div class="well">
								<p>Some text..</p>
						    </div>
							<div class="well">
								<p>Some text..</p>
							</div>
							</div>
					    </div>
                    </div>
				</td>
				<td></td>
			  </tr>
			  <br><br><br><br>
				
				<tr>
					<td>AD HOLDER</td>
					<td>
						<div id="aboutid" style="margin:auto;">
							<?php require_once("about.php")?>
						</div>
					</td>
					<td>AD HOLDER</td>
				</tr>
			</table>
				
			
			
		</div><br><br>
           <div id="contactus" >
				<?php require_once("contactus.php")?>
			</div>
			
<footer class="container-fluid text-center" style="background-color:white">
  <p>site design / logo © 2017 Stack Exchange Inc; user contributions licensed under cc by-sa 3.0 with attribution required
rev 2017.4.21.25730</p>
</footer>

	</body>
</html>
