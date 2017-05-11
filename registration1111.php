
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
		  <style>
		  .field{
			  margin-top:30px;
			  fixed-top;
		  }
		  </style>
	</head>
	<body style="background-color: #222222;background-image: URL('images/bgg.jpg'); background-position: center;background-repeat: no-repeat;">
	

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
<p style="text-align:center;font-size: 40px;;font-family:FontAwesome;color:grey;" class="field">Signup For Advertisement <p>
<form class="form-horizontal" action="adduser.php" method="POST"  name="form1" acceptcharset="UTF-8">

<fieldset >

<!-- Form Name -->
    <div class="form-group">
  <label class="col-md-4 control-label" for="fname">First name</label>  
  <div class="col-md-4">
  <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control input-md"  required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lname">Last name</label>  
  <div class="col-md-4">
  <input id="lname" name="lname" type="text" placeholder="last name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cmpny">father</label>  
  <div class="col-md-4">
  <input id="father" name="father" type="text" placeholder="father-name" class="form-control input-md" required="">
    
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
    <textarea class="form-control" placeholder="ex:country,city,town" name="address" id="address" required=""></textarea>
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dob">DOB</label>  
  <div class="col-md-4">
  <input id="DOB" name="DOB" type="Date" placeholder="your birth date" class="form-control input-md" required="">
    
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
    <select name="gender" id="gender" class="form-control">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">user-name</label>  
  <div class="col-md-4">
  <input id="username" name="username" type="text" placeholder="user-name" class="form-control input-md" required="" min="5">
   <div class="col-md-4"><font color="red"></font> 
  </div>
</div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Password</label>  
  <div class="col-md-4">
  <input id="password" name="password" type="password" placeholder="more than 6 characters" class="form-control input-md" required="" min="6">
    
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button class="btn btn-primary" type="submit" name="Save" id="Save" value="Save">SUBMIT</button>
  </div>
</div>
<!-- Text input-->


</fieldset>
<input type="hidden" name="MM_insert" value="form1">
</form>
</div>
</body>
</html>