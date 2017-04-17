
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



  
  				$Result1 = mysqli_query( $conn  , $insertsqli    ) or die(mysqli_error($conn));
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
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<li class="dropdown active">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
						<ul id="login-dp" class="dropdown-menu">
							<li>
								<div class="row" style="padding:4px;">
										<form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
											<div class="form-group">
												<label class="sr-only" for="exampleInputEmail2">Email address</label>
												<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
											</div>
											<div class="form-group">
												<label class="sr-only" for="exampleInputPassword2">Password</label>
												<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
												<div class="help-block text-right"><a href="">Forget the password ?</a></div>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-primary btn-block">Sign in</button>
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
<br><br>
<form class="form-horizontal" >
<fieldset>

<!-- Form Name -->
<legend>registration</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fn">First name</label>  
  <div class="col-md-4">
  <input id="fn" name="fn" type="text" placeholder="first name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ln">Last name</label>  
  <div class="col-md-4">
  <input id="ln" name="ln" type="text" placeholder="last name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cmpny">Company</label>  
  <div class="col-md-4">
  <input id="cmpny" name="cmpny" type="text" placeholder="company" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="email" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="add1">Address 1</label>  
  <div class="col-md-4">
  <input id="add1" name="add1" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="add2">Address 2</label>  
  <div class="col-md-4">
  <input id="add2" name="add2" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">City</label>  
  <div class="col-md-4">
  <input id="city" name="city" type="text" placeholder="city" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="zip">Zip Code</label>  
  <div class="col-md-4">
  <input id="zip" name="zip" type="text" placeholder="Zip Code" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ctry">Country</label>  
  <div class="col-md-4">
  <input id="ctry" name="ctry" type="text" placeholder="Country" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Text InputPhone</label>  
  <div class="col-md-4">
  <input id="phone" name="phone" type="text" placeholder="Phone#" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Training">Would you like to attend our Networking Reception on September 3, 2015?</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="Training-0">
      <input type="radio" name="Training" id="Training-0" value="yes" checked="checked">
      Yes
    </label> 
    <label class="radio-inline" for="Training-1">
      <input type="radio" name="Training" id="Training-1" value="no">
      No
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Networking_Reception">Would you like to attend our Technical Product Update Session on September 4, 2015?</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="Networking_Reception-0">
      <input type="radio" name="Networking_Reception" id="Networking_Reception-0" value="meet_yes" checked="checked">
      Yes
    </label> 
    <label class="radio-inline" for="Networking_Reception-1">
      <input type="radio" name="Networking_Reception" id="Networking_Reception-1" value="meet_no">
      No
    </label>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select Basic</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control input-md">
      <option>Option one</option>
      <option>Option two</option>
    </select>
  </div>
</div>


<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Dinner">Would you like to attend our Networking Dinner on September 4, 2015?</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="Dinner-0">
      <input type="radio" name="Dinner" id="Dinner-0" value="dinner_yes" checked="checked">
      Yes
    </label> 
    <label class="radio-inline" for="Dinner-1">
      <input type="radio" name="Dinner" id="Dinner-1" value="dinner_no">
      No
    </label>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">SUBMIT</button>
  </div>
</div>

</fieldset>

</form>
</div>
	</body>
</html>