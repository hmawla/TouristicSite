
<!DOCTYPE HTML>
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
	<div class="header">
		 <div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					<ul>
                        <li><a href="index.php"><img src="images/logo.png" alt="" width="100" height="20" /></a></li>
						<li><a href="index.php">Home</a></li>
					</ul>
				</div>
					<div class="account_desc">
						<ul>
							<li><a href="register.php">Register</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</div>
				<div class="clear"></div>
			</div>
	  	</div>
  	  		<div class="wrap">
				<div class="header_top">
					
						<div class="header_top_right">
					     	
						 <div class="clear"></div>
					</div>
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
   </div>
 <div class="main">
 	<div class="wrap">
     <div class="content">
     	
    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
		
                    <!     -->
                    <?php require_once('Connections/conn.php'); ?>
<?php
$userexits = "";
if (!function_exists("GetsqlValueString")) {
function GetsqlValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
	 mysqli_select_db($conn,$database_conn);
	$sql = "select * from person where username = '".$_POST['username']."'" ;
	$Result1 = mysqli_query(  $conn,$sql    ) or die(mysql_error());

	
	if (mysqli_num_rows($Result1) == 0)
	{
	
	
  $insertsqli = sprintf("INSERT INTO person (fname, lname, father, email, phone, address, block, pertype, username, password,DOB) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s,%s)",
                       GetsqlValueString($_POST['fname'], "text"),
                       GetsqlValueString($_POST['lname'], "text"),
                       GetsqlValueString($_POST['father'], "text"),
                       GetsqlValueString($_POST['email'], "text"),
                       GetsqlValueString($_POST['phone'], "text"),
                       GetsqlValueString($_POST['address'], "text"),
                       0,
                       GetsqlValueString('C', "text"),
                       GetsqlValueString($_POST['username'], "text"),
                       GetsqlValueString(md5($_POST['password']), "text"),
					   GetsqlValueString($_POST['DOB'], "text")
					   );



  
  				$Result1 = mysqli_query( $conn,$insertsqli    ) or die(mysql_error());
				?>
				 <font color="#FF0000"><script> alert("Welcome ur registration is complete "); </script></font>
                 
<?php
										
	}
	  else
	  {
		?>  
		<font color="#FF0000"><script> alert("The Username Is Already Exist Please Enter New Username "); </script></font>
        <?php
		  
	  }
  
}

?>
                      <!              ----->
					    <form action="<?php echo $editFormAction; ?>" method="POST"  name="form1" acceptcharset="UTF-8">
					    	<div class="form-group">
						    	<label>First Name</label>
						    <input name="fname" id="fname" type="text" required class="form-control"  placeholder="Please Enter User Name" >
						    </div>
                            <div class="form-group">
						     	<label>Father</label>
						    	<input name="father" type="text" required class="form-control" class="textbox" placeholder="Please Enter Ur Father Name">
						    </div>
						   <div class="form-group">
						    	<label>Last Name</label>
						    	<input name="lname" id="lname" type="text" required class="form-control" class="textbox" placeholder="Please Enter Last Name">
						    </div>
						    
                           <div class="form-group">
						     	<label>Gender</label>
						    	<label for="gender">
          <select name="gender" id="gender" class="form-control"  style="width:770px; height:30px ">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select> </label>
						    </div>
                            
                          <div class="form-group">
						     	<label>Date Of Birth:</label><br/>
						    	<input name="DOB" id="DOB" type="date"  required class="form-control" size="20" style="width:770px; height:30px"  placeholder="DD/MM/YYYY">
						    </div>
                            
                             <div class="form-group">
						     <label>Email</label>
						    <input name="email" id="email" type="email" size="20" style="width:770px; height:30px" required class="form-control" class="textbox" placeholder="Ex:Houssein.38@hotmail.com">
						    </div>
                            <div class="form-group">
                              	<label>Phone:</label>
						    	<input name="phone" id="phone" type="text" placeholder="Ex:70/112233" required class="form-control" class="textbox">
						    </div>
                            
                            <div class="form-group">
						     	<label>User Name:</label>
						    	<input name="username" id="username"  type="text" placeholder="Please Enter User Name" required class="form-control" class="textbox"></span><font color="red"><?php echo   $userexits; ?></font>
						    </div>
                            
                            <div class="form-group">
						     	<label>Password:</label></span>
						    	<input name="password" id="password"  type="password" size="20" style="width:770px; height:30px" placeholder="Enter Password"required class="form-control" class="textbox">
						    </div>
                            
                            <div class="form-group">
						     	<label>Adress:</label>
						    <textarea name="address" id="adress"   placeholder="Ex:chiyeh chere3 3abd el kaim el 5alil bineyet yaser kazma tabe2 tene" required class="form-control" class="textbox"></textarea>
						    </div>
						    
                            
						   <div>
						   		<span><input  type="submit"  name="Save" id="Save" value="Save"  class="mybutton" onClick="addregister();"></span>
                                 
						  </div>
                          <input type="hidden" name="MM_insert" value="form1">
					    </form>
                      
				  </div>
  				</div>
				<div class="col span_1_of_3">
					<div class="contact_info">
    	 				<h2>Find Us Here</h2>
					    	  <div class="map">
							   	    <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#888;text-align:left;font-size:0.85em">View Larger Map</a></small>
							  </div>
      				</div>
      			<div class="company_address">
				     	<h2>Information :</h2>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span><a href="#">info(at)mycompany.com</a></span></p>
				   		<p>Follow on: <span><a href="#">Facebook</a></span>, <span><a href="#">Twitter</a></span></p>
				   </div>
				 </div>
			  </div>		
         </div> 
    </div>
 </div>
   <div class="footer">
   	  <div class="wrap">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#">Advanced Search</a></li>
						<li><a href="#">Orders and Returns</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="contact.html">Site Map</a></li>
						<li><a href="#">Search Terms</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="contact.html">Sign In</a></li>
							<li><a href="index.html">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="contact.html">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>+91-123-456789</span></li>
							<li><span>+00-123-000000</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li><a href="#" target="_blank"><img src="images/facebook.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/twitter.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/skype.png" alt="" /> </a></li>
							      <li><a href="#" target="_blank"> <img src="images/linkedin.png" alt="" /></a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			 <div class="copy_right">
				<p>Company Name © All rights Reseverd | Design by  <a href="http://w3layouts.com">W3Layouts</a> </p>
		   </div>			
        </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

