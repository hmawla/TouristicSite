
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
	<body style="background-color: #222222;background-image: URL('images/bgg.jpg'); background-position: center;background-repeat: no-repeat;">
	

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
	mysqli_select_db( $conn  , $database_conn );
	$sql = "select * from person where username = '".$_POST['username']."'" ;
	$Result1 = mysqli_query(  $conn   , $sql   ) or die(mysqli_error($conn));

	
	if (mysqli_num_rows($Result1) == 0)
	{
			
  			mysql_query("INSERT INTO PERSON (pfname,plname,pfathername,email,address,dob,username,password,phone) values($fn,$ln,$pfn,$email,$add,$dob,$phone,$gender,$uname,$pass)");
				//payment
				//get last id for registeration 
				//insert on table registeration 
				
				
				
				
	}
	  else
	  {
		 $userexits = "User Already exists";
	  }
  
}

?>
<!DOCTYPE html>
<!-- ------------------------------------------------------------------- -->
<div >
<nav class="navbar navbar-default navbar-fixed-top changecolor ">
    <div class="container">
        <div class="navbar-header">
			<image src="images/logo1.png" class="changesize" href="#" />
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<div>
				<ul class="nav navbar-nav changecolor1">
					
					<li><a href="index.php">Home</a></li>
					<li ><a href="#aboutid">About</a></li>
					<li ><a href="#">Contact</a></li>
					<li class="dropdown active">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
						<ul id="login-dp" class="dropdown-menu">
							<li>
								<div class="row" style="padding:4px;">
										<form class="form" role="form" method="post"  accept-charset="UTF-8" id="login-nav">
											<div class="form-group">
												<label class="sr-only" for="username">username</label>
												<input type="text" class="form-control" id="username" placeholder="Username" required>
											</div>
											<div class="form-group">
												<label class="sr-only" for="passsword">Password</label>
												<input type="password" class="form-control" id="password" placeholder="Password" required>
												<div class="help-block text-right"><a href="">Forget the password ?</a></div>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-primary btn-block" name="login" id="login">Sign in</button>
											</div>
											
										</form>
									</div>
									<div class="bottom text-center">
										New Here? <a href="#"><b>Join Us</b></a>
									</div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
					
			</div>
        </div>
    </div>
</nav>
<!-- ------------------------------------------------------------------- -->
<br><br><br>
<p style="text-align:center;font-size: 40px;;font-family:FontAwesome;color:grey;">Signup For Advertisement <p>
<form class="form-horizontal" >

<fieldset>

<!-- Form Name -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pfname">First name</label>  
  <div class="col-md-4">
  <input id="pfname" name="pfname" type="text" placeholder="first name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="plname">Last name</label>  
  <div class="col-md-4">
  <input id="plname" name="plname" type="text" placeholder="last name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pfathername">father</label>  
  <div class="col-md-4">
  <input id="pfathername" name="pfathername" type="text" placeholder="father-name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="email" placeholder="Email-Address" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text area-->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address</label>  
  <div class="col-md-4">
 <!-- <input id="add" name="add" type="textarea" placeholder="ex:country,city,town" class="form-control" required="">-->
    <textarea class="form-control" placeholder="ex:country,city,town" id="address" required=""></textarea>
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dob">DOB</label>  
  <div class="col-md-4">
  <input id="dob" name="dob" type="Date" placeholder="your birth date" class="form-control input-md" required="">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Phone</label>  
  <div class="col-md-4">
  <input id="phone" name="phone" type="number" placeholder="Phone#" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Gender</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="Training-0">
      <input type="radio" name="M" id="M" value="m" checked="checked">Male</input>
    </label> 
    <label class="radio-inline" for="f">
      <input type="radio" name="f" id="f" value="f">Female</input>
    </label>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">user-name</label>  
  <div class="col-md-4">
  <input id="username" name="username" type="text" placeholder="user-name" class="form-control input-md" required="" min="5">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>  
  <div class="col-md-4">
  <input id="password" name="password" type="password" placeholder="more than 6 characters" class="form-control input-md" required="" min="6">
    
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button  onclick="<?php  mysqli_query($conn,"INSERT INTO PERSON (pfname,plname,pfathername,email,address,dob,username,password,phone) values('hassan','ali','klay','123@as.com','asd','11-11-1111','1234567','m','ali11','123123123')"); ?>"  class="btn btn-primary">save</button>
  </div>
</div>

</fieldset>

</form>
</div>
	</body>
</html>