
<!DOCTYPE HTML>
<head>
<title>Free Movies Store Website Template | Contact :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<style>
#box {
    position: absolute;
	
    width: 28%;
    height: 80%;
    background-color: lightblue;
	border: 1px solid black;
	opacity: 1;
	background-image:url('battle.jpg');
}
</style>
</head>
<body >
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
        <div id="box"></div>
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
<?php require_once('Connections/conn.php'); ?>
<?php

$error = "" ; 

session_start();
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

if (isset($_POST['login']) ) 
{
$colname_rsLogin = "-1";
if (isset($_POST['username'])) {
  $colname_rsLogin = $_POST['username'];
}


$colpassword_rsLogin = "-1";
if (isset($_POST['password'])) {
  $colpassword_rsLogin = $_POST['password'];
}

//mysqli_select_db($conn , $database_conn);
mysqli_select_db($conn,$database_conn);


$colpassword_rsLogin = md5($colpassword_rsLogin);

//echo $colpassword_rsLogin;

$query_rsLogin = sprintf("SELECT * FROM person WHERE username =%s and password =%s and block =0",GetsqlValueString($colname_rsLogin , "text") ,GetsqlValueString($colpassword_rsLogin,"text"));
$rsLogin = mysqli_query( $conn, $query_rsLogin) or die(mysql_error());

//$rsLogin = mysqli_query( $conn, $query_rsLogin) or die(mysqli_error($conn));
$row_rsLogin = mysqli_fetch_assoc($rsLogin);
$totalRows_rsLogin = mysqli_num_rows($rsLogin);

	if ($totalRows_rsLogin > 0 )
	{
		
		$_SESSION['userid'] = $row_rsLogin['ID'];
		$_SESSION['Username'] = $row_rsLogin['username'];
         
		 $a=$row_rsLogin['username'];
		
		
		if($row_rsLogin['pertype'] == 'A')
		{
					$_SESSION['valid']="ok";
					header('location:Administrator.php');
		}
		elseif ($row_rsLogin['pertype'] == 'C')
		{
			    $_SESSION['user'] =$colname_rsLogin;
				$_SESSION['pass'] =$colpassword_rsLogin;
				$_SESSION['si'] ="ok";
				header('location:Customer.php');	
		}
		elseif ($row_rsLogin['pertype'] == 'E')
		{
				header('Location:Employee.php');	
		}	
	
	}
	else
	{
		$error = "Invalid username or password";
	}
}
?>



<div style="margin-top:50px;" align="center" >


<font color="red"><?php echo $error ?></font><br/>




<form  name="login" method="post" action="login.php" >

    <font color="#000000" size="+2"><b>User name:</b></font><br/>
    <input type="text" name="username"><br/><br/>
  
 <font color="#000000" size="+2"><b>User password:&nbsp;</b></font><br/>
  <input type="password" name="password">
  
  <br/><br/><input type="submit"  value="Login"   name="login" id="login" style="width:100px; height:25px; " />
  
  </form>

 
   
</div>
</body>
</html>