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
if(isset($_SESSION['userr']) and isset($_SESSION['passw']))
{
	$u=$_SESSION['userr'];
	$p=$_SESSION['passw'];
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
         <div class="main">
 	<div class="wrap">
     <div class="content">
     	
    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
        <?php
		
								$servername="localhost";
								$username="root";
								$password="";
								$database="movie";
								$con=mysqli_connect($servername,$username,$password,$database);
								if(!$con)
								die("connection failed");
        $query="select * from person where username='$u' ;";
								$results=mysqli_query($con,$query);
								if(mysqli_num_rows($results) <=0)
								echo"no rows";
								else
								{
                                $rows=mysqli_fetch_array($results);
		
		                      ?>
 
 <form action="mo.php" method="POST"  name="form1" acceptcharset="UTF-8">
					    	<div>
                            <div align="center"><font color="#FF0000" size="+3"><?php if(isset($_SESSION['no'])){    
							                          echo $_SESSION['no'];
													  $_SESSION['no']='';
							}?></font></div>
						    	<span><label>First Name</label></span>
			<span><input name="fname" id="fname" type="text"  value="<?php if(isset($_SESSION['fname'])){                       echo $_SESSION['fname'];
			}
			else
								  echo $rows['fname']; ?>" required class="form-control" class="textbox"  ></span>
						    </div>
                            <div>
						     	<span><label>Father</label></span>
						    	<span><input name="father" type="text" value="<?php if(isset($_SESSION['father'])){                       echo $_SESSION['father'];
			}
			else 
			echo $rows['father']; ?>" required class="form-control" class="textbox" placeholder="Please Enter Ur Father Name"></span>
						    </div>
						    <div>
						    	<span><label>Last Name</label></span>
						    	<span><input name="lname" id="lname" type="text" value="<?php 
								if(isset($_SESSION['lname']))                     
								  echo $_SESSION['lname'];
			
			else
			 echo $rows['lname']; ?>" required class="form-control" class="textbox" placeholder="Please Enter Last Name"></span>
						    </div>
						    
                            <div>
						     	<span><label>Gender</label></span>
						    	<span><label for="gender">
                                <?php $a=$rows['gender']; ?>
          <select name="gender" id="gender" class="form-control" size="1" style="width:770px">
            <option value="M" <?php  if(isset($_SESSION['gender']))                   
			 if( $_SESSION['gender']='M')
			     echo "checked";            
			
			else
			
			                      if($a=='M') echo "checked"; ?> >Male</option>
                                  
            <option value="F" <?php if(isset($_SESSION['gender']))                   
			 if( $_SESSION['gender']='F')
			     echo "checked";
				 else
				 
			if($a=='F') echo "checked"; ?>>Female</option>
        </select> </label></span>
						    </div>
                            
                            <div>
						     	<span><label>Date Of Birth</label></span>
						    	<span><input name="DOB" id="DOB" type="date" value="<?php    
								if(isset($_SESSION['DOB']))                     
								  echo $_SESSION['DOB'];  
								  else               
			 
				 echo $rows['DOB']; ?>" size="20" style="width:200px" required class="form-control" class="textbox" placeholder="DD/MM/YYYY"></span>
						    </div>
                            
                             <div>
						     	<span><label>Email</label></span>
						    	<span><input name="email" id="email" type="email" value="<?php 
								if(isset($_SESSION['email']))                     
								  echo $_SESSION['email'];
								  else
								echo $rows['email']; ?>" size="20" style="width:200px" required class="form-control" class="textbox" placeholder="Ex:Houssein.38@hotmail.com"></span>
						    </div>
                            
                            <div>
						     	<span><label>Phone</label></span>
						    	<span><input name="phone" id="phone" type="text" value="<?php echo $rows['phone']; ?>" placeholder="Ex:70/112233" required class="form-control" class="textbox"></span>
						    </div>
                            
                            <div>
						     	<span><label>User Name</label></span>
						    	<span><input name="username" id="username"  type="text" value="<?php 
								if(isset($_SESSION['username']))                     
								  echo $_SESSION['username'];
								else
								echo $rows['username']; ?>" placeholder="Please Enter User Name" required class="form-control" class="textbox"></span>
						    </div>
                            
                            <div>
						     	<span><label>Password</label></span>
						    	<span><input name="password" id="password"  type="password" value="<?php
								if(isset($_SESSION['password']))                     
								  echo $_SESSION['password'];
								else
								 echo $rows['password']; ?>" size="20" style="width:200px" placeholder="Enter Password"required class="form-control" class="textbox"></span>
						    </div>
                            
                             <div>
						     	<span><label>Adress</label></span>
						    	<span> <div>
						    	<span><textarea name="address" id="adress"   placeholder="Ex:chiyeh chere3 3abd el kaim el 5alil bineyet yaser kazma tabe2 tene" required class="form-control" class="textbox"><?php
								if(isset($_SESSION['address']))                     
								  echo $_SESSION['address'];
								else
								 echo $rows['address']; ?></textarea></span>
						    </div>
						    
                             <div>
						   		<span><input  type="hidden"  name="uu" id="uu" value="<?php 
								if(isset($_SESSION['uu']))                     
								  echo $_SESSION['uu'];
								else
								echo $u; ?>"  class="mybutton" />                             </span>
                                 
						  </div>
                            
						   <div>
						   		<span><input  type="submit"  name="Save" id="Save" value="Save"  class="mybutton" /></span>
                                 
						  </div>
                        
					    </form>
						<?php } ?>
                         </div>
  				</div>
						</body></html>