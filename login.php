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
mysqli_select_db( $conn  , $database_conn );


//$colpassword_rsLogin = md5($colpassword_rsLogin);

//echo $colpassword_rsLogin;

$query_rsLogin = sprintf("SELECT * FROM person WHERE username =%s and password =%s",GetsqlValueString($colname_rsLogin , "text") ,GetsqlValueString($colpassword_rsLogin,"text"));
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
					header('Location:adminpage.php');
		}
		elseif ($row_rsLogin['pertype'] == 'D')
		{
				header('Location:Adverpage.php');	
		}
	
	
	}
	else
	{
		$error = "Invalid username or password";
	}
}
?>
<div><font color="#D70000" size="+3"><?php echo $error ?></font> </div>
<form class="form-horizontal" method="post" >
    <div class="col-sm-4">
         <input type="text" class="input-large" name="username" id="username" placeholder="Your Username" />
         <br /><br />
   
         <input type="password" class="input-large" name="password" id="password" placeholder="Enter Password" /><br />
         <div class="form-group input-group">
         <br /><input type="submit" class="btn-success"  name="login" id="login" value="login" />
    </div>
    </div>
    </form>