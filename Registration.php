
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
<div style="margin-top:30px;" >

 
  <form action="<?php echo $editFormAction; ?>" method="POST"  name="form1" acceptcharset="UTF-8">
    <table  border="0" class="table">
   
      <tr>
        <td style="text-align: right">First Name</td>
        <td>
        <input type="text" name="fname" id="fname" required  class="form-control"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">Last Name</td>
        <td><input type="text" name="lname" id="lname" required class="form-control"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">Father</td>
        <td><input type="text" name="father" id="father"  required class="form-control"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">Gender</td>
        <td><label for="gender"></label>
          <select name="gender" id="gender" class="form-control">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">DOB</td>
        <td><label for="DOB"></label>
        <input type="date" name="DOB" id="DOB" required class="form-control" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">Email</td>
        <td><input type="email" name="email" id="email" required class="form-control"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">Phone</td>
        <td><input type="text" name="phone" id="phone" required class="form-control"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">UserName</td>
        <td><input type="text" name="username" id="username" required class="form-control"></td>
        <td><font color="red"><?php echo   $userexits; ?></font></td>
      </tr>
      <tr>
        <td style="text-align: right">Password</td>
        <td><input type="password" name="password" id="password" required class="form-control"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">Address</td>
        <td><textarea name="address" id="address" required class="form-control"> </textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align: right">&nbsp;</td>
        <td><label for="lang"></label></td>
        <td>&nbsp;</td>
      </tr>
     
      <tr>
        <td style="text-align: right">&nbsp;</td>
        <td><input  class="btn btn-default" type="submit" name="Save" id="Save" value="Save"></td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <input type="hidden" name="MM_insert" value="form1">
  </form>
</div>
