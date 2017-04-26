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


</head>
<body>
<?php
if($_SESSION['si'] !="ok")
{
header('location:login.php');
}
?>
<?php
            if(isset($_SESSION['user']) and isset($_SESSION['pass']))
			{
	          $u=$_SESSION['user'] ;
				$p=$_SESSION['pass'] ;
			}
			else
			{
				$u=$_GET['u'];
                $p=$_GET['p'];
			}
?>
<div class="header">
		 <div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					<ul>
                 <li><a href="Customer.php?u=<?php echo $u;?>& p=<?php echo $p;  ?>"><img src="images/logo.png" alt="" width="100" height="20" /></a></li>
						<li><a href="Customer.php?u=<?php echo $u;?>& p=<?php echo $p;  ?>">Home</a></li>
                         <li><a href="viewconfirmorder.php?u=<?php echo $u;?>& p=<?php echo $p;  ?>" rel="external">View Confirm Order</a></li>
						<li><a href="complaint.php?u=<?php echo $u;?>& p=<?php echo $p;  ?>" rel="external">Complaint</a></li>
						<li><a href="modify.php?u=<?php echo $u;?>& p=<?php echo $p;  ?>"rel="external">Modify Profile Info</a></li>
                        <li><a href="alterpassword.php?u=<?php echo $u;?>& p=<?php echo $p;  ?>" rel="external">Alter Password</a></li>
                        <li><a href="openoldorder.php?u=<?php echo $u;?>& p=<?php echo $p;  ?>" rel="external">Open Old Order</a></li>
                        <li><a href="openneworder.php?u=<?php echo $u;?>& p=<?php echo $p;  ?>" rel="external">Open New Order</a></li>
                        <li><a href="confirmproductsincart.php?u=<?php echo $u;?>& p=<?php echo $p;  ?>" rel="external">Confirm Products In Cart</a></li>
                         <li><a href="payment.php?u=<?php echo $u;?>& p=<?php echo $p;  ?>" rel="external">Payment</a></li>
                         <li><a href="addtocart.php?u=<?php echo $u;?>& p=<?php echo $p;  ?>" rel="external">Add To Cart</a></li><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <li><a href="changequantity.php?u=<?php echo $u;?>& p=<?php echo $p;  ?>" rel="external">Change Quantity</a></li>
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
  		</div></div></div>


</body>
</html>