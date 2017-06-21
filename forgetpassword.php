<?php require_once('Connections/conn.php'); ?>
<?php



$recover = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $recover .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
	 mysqli_select_db( $conn  , $database_conn );
	$sqli = "select * from person where username = '".$_POST['username']."'" ;
	$Result1 = mysqli_query(  $conn  , $sqli    ) or die(mysqli_error($conn));
	

	
	$eun = $_SESSION['username'];
	//$smp = $_SESSION['ee'];
	
  $insertsqliii = sprintf("select password from person where username = '$eun'"
					   );

  
  				$Result1 = mysqli_query(  $conn  , $insertsqliii  ) or die(mysqli_error( $conn ));
	}
	// send to a mail via php  //send $result to email entered in text box of email

   //   $msg = ("your password is : $insertsqliii");
//	mail($smp,"recovered password",$msg);
?>

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
<p style="text-align:center;font-size: 40px;;font-family:FontAwesome;color:grey;" class="field">Reset Your Password: <p>
<form class="form-horizontal" action="<?php echo $recover; ?>" method="POST"  name="form1" acceptcharset="UTF-8">

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
  <label class="col-md-4 control-label" for="ee">Enter you email:</label>  
  <div class="col-md-4">
  <input id="ee" name="ee" type="email" placeholder="last name" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button class="btn btn-primary" type="submit" name="Save" id="Save" value="Save">SUBMIT</button>
  </div>
</div>
</fieldset>
<input type="hidden" name="MM_insert" value="form1">
</form>
</div>
</body>
</html>