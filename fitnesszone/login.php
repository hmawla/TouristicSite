<html>
<head>
<Title>Login</Title>
<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">


  <?php require_once('cssCom.php'); ?>
<style>
body { 
      background-image : url('images/1.jpg');
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-position: center;
	  background-size: 100% 100%;
}
</style>
</head>
<body >
<?php require_once("menu.php") ?>
  <?php
$error = "" ; 

session_start();


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

mysqli_select_db( $conn  , $database_conn );

$query_rsLogin = sprintf("SELECT * FROM person WHERE username ='%s' and password ='%s' ",$colname_rsLogin  ,$colpassword_rsLogin);
$rsLogin = mysqli_query(  $conn  , $query_rsLogin) or die(mysqli_error($conn));

//$rsLogin = mysqli_query( $conn, $query_rsLogin) or die(mysqli_error($conn));
$row_rsLogin = mysqli_fetch_assoc($rsLogin);
$totalRows_rsLogin = mysqli_num_rows($rsLogin);

	if ($totalRows_rsLogin > 0 )
	{
		
		$_SESSION['userid'] = $row_rsLogin['ID'];
		$_SESSION['Username'] = $row_rsLogin['username'];

		
		
		if($row_rsLogin['pertype'] == 'A')
		{
					header('Location:administrator.php');
		}
		elseif ($row_rsLogin['pertype'] == 'C')
		{
				header('Location:Customer.php');	
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
<div><font color="red" data-role="popup"><?php echo $error ?></font> </div>
<br />

<form class="form-horizontal" method="post" >
  <div class="form-group">
    <label for="inputEmail3" class="col-md-3 control-label"></label>
    <div class="col-sm-4">
   <div class="form-group input-group">
      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
         <input type="text" class="form-control" name="username" id="username" placeholder="Your Username" />
   </div>
   <div class="form-group input-group">
       <span class="input-group-addon"><i class="glyphicon glyphicon-lock"  ></i></span>
         <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" />
    </div>
    
      <div class="form-group input-group">
         <input type="submit" class="form-control"  name="login" id="login" value="login" />
    </div>
    
    </div>
    </div>
    </form>
</div>
