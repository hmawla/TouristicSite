$_SESSION['$userexits'] = $userexits ;
<?php require_once('Connections/conn.php'); ?>
<?php
session_start();
$_SESSION['userexits'] = "";
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
	 mysqli_select_db( $conn  , $dbname );
	
	$sqli = "select * from person where username = '".$_POST['username']."'" ;
	$Result = mysqli_query(  $conn  , $sqli    ) or die(mysqli_error($conn));
	

	
	if (mysqli_num_rows($Result) == 0)
	{
  $insertsqlii = sprintf("INSERT INTO person (pfname, plname, pfathername, email, phone, address, block, pertype, username, password, DOB, gender) VALUES ('%s', '%s', '%s', '%s', '%s','%s', '%s', '%s', '%s', '%s', '%s','%s')",
                       $_POST['fname'],
                       $_POST['lname'],
                       $_POST['father'],
                       $_POST['email'],
                       $_POST['phone'],
                       $_POST['address'],
                       0 ,
                       'C',
                       $_POST['username'],
                       $_POST['password'],
					   $_POST['DOB'],
					   $_POST['gender']
					   );

  
  				$Result1 = mysqli_query(  $conn  , $insertsqlii) or die(mysqli_error( $conn ));
				
	}
	  else
	  {
		  $a = "<script>alert('User Already exists');</script>";
		  $_SESSION['userexits'] = $a;
	  }
  header('location:Registration1111.php');
}
?>