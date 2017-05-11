<?php session_start(); ?>

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

<!-- ------------------------------------------------------------------- -->
<br><br><br>
<p style="text-align:center;font-size: 40px;;font-family:FontAwesome;color:grey;" class="field">Change your password: <p>
<form class="form-horizontal" action="password_change.php" method="POST"  name="form1" acceptcharset="UTF-8">

<fieldset >

<!-- Form Name -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Enter username:</label>  
  <div class="col-md-4">
  <input id="username" name="username" type="text" placeholder="first name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="op">Enter Old Password:</label>  
  <div class="col-md-4">
  <input id="password" name="password" type="text" placeholder="last name" class="form-control input-md" required="">
    
  </div>
    </div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newpassword">Enter New Password:</label>  
  <div class="col-md-4">
  <input id="newpassword" name="newpassword" type="text" placeholder="last name" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="confirmnewpassword">Confirm New Password:</label>  
  <div class="col-md-4">
  <input id="confirmnewpassword" name="confirmnewpassword" type="text" placeholder="last name" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button class="btn btn-primary" type="submit" name="Save" id="Save" value="Update Password">Update Password</button>
  </div>
</div>
</fieldset>
<input type="hidden" name="MM_insert" value="form1">
</form>
</div>
</body>
</html>