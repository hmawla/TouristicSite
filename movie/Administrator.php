<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Free Movies Store Website Template | Contact :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<?php
if($_SESSION['valid'] !="ok")
{
header('location:login.php');
}
?>
<style>

#box {
    position: absolute;
	
    width: 27%;
    height: 65%;
    background-color: lightblue;
	border: 1px solid black;
	opacity: 1;
	background-image:url('callofduty.jpg');
}
#bo {
    position: absolute;
	
    width: 27%;
    height: 65%;
    background-color: lightblue;
	border: 1px solid black;
	opacity: 0.7;
	background-image:url('dragon.jpg');
}
</style>
</head>

<body >
  	<div class="header">
		 <div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					<ul>
                        <li><a href="Administrator.php"><img src="images/logo.png" alt="" width="100" height="20" /></a></li>
						<li><a href="Administrator.php">Home</a></li>
						<li><a href="checkviewselleditem.php" rel="external">View Selled Item</a></li>
						<li><a href="checkviewstock.php"rel="external">View Stock</a></li>
                        <li><a href="checkviewcomplaints.php">View Complaints</a></li>
                        
                        <li><a href="checkviewdelete.php">Delete Game</a></li>
                        <li><a href="gamedeleted.php">Encoring Game Deleted</a></li>
                        <li><a href="checkviewupdatequantity.php">Update Quantity</a></li>
                        <li><a href="checkviewadd.php">Add Game</a></li>
                        
					</ul>
				</div>
					<div class="account_desc">
						<ul>
							<li><a href=""></a></li>
							
						</ul>
					</div>
                    
                    
				<div class="clear"></div>
			</div>
	  	</div>
        <div id="box"></div>
        
     
						<div class="wrap">
				<div class="header_top">
				
						
						  <script type="text/javascript">
								function DropDown(el) {
									this.dd = el;
									this.initEvents();
								}
								DropDown.prototype = {
									initEvents : function() {
										var obj = this;
					
										obj.dd.on('click', function(event){
											$(this).toggleClass('active');
											event.stopPropagation();
										});	
									}
								}
					
								$(function() {
					
									var dd = new DropDown( $('#dd') );
					
									$(document).click(function() {
										// all dropdowns
										$('.wrapper-dropdown-2').removeClass('active');
									});
					
								});
					    </script>
			 <div class="clear"></div>
  		</div>      
         	
   </div>
       
                          
                               
						
                           </body>
                           </html>