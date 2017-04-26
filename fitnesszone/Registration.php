<html>
<head>
<title>Registration</title>
</head>

<?php require_once('Connections/conn.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

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

	mysqli_select_db( $conn  , $database_conn );
$query_rsType = "SELECT * FROM membershiptype";
$rsType = mysqli_query( $conn , $query_rsType) or die(mysqli_error($conn));
$row_rsType = mysqli_fetch_assoc($rsType);
$totalRows_rsType = mysqli_num_rows($rsType);

mysqli_select_db( $conn  , $database_conn );
$query_rsbranch = "SELECT * FROM branch";
$rsbranch = mysqli_query( $conn , $query_rsbranch) or die(mysqli_error($conn));
$row_rsbranch = mysqli_fetch_assoc($rsbranch);
$totalRows_rsbranch = mysqli_num_rows($rsbranch);

$userexits = "";


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
	
	
  $insertsqli = sprintf("INSERT INTO person (fname, lname,father, DOB, username, password, email, gender, phone , mobile , Address , maritalStatus) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s,%s,%s)",
                       GetsqlValueString($_POST['fname'], "text"),
                       GetsqlValueString($_POST['lname'], "text"),
                       GetsqlValueString($_POST['father'], "text"),
					   GetsqlValueString($_POST['DOB'], "text"),
                       GetsqlValueString($_POST['username'], "text"),
					   GetsqlValueString(md5($_POST['password']), "text"),
                       GetsqlValueString($_POST['email'], "text"),
                       GetsqlValueString($_POST['gender'], "text"),
                       GetsqlValueString($_POST['phone'], "text"),
					   GetsqlValueString($_POST['mobile'], "text"),
					   GetsqlValueString($_POST['address'], "text") , 
					   GetsqlValueString($_POST['MaritalStatus'], "text")
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

<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">


  <?php require_once('cssCom.php'); ?>

	  
		  
		  
  
</head>

<body class="home">

<?php require_once("menu.php") ?>
<br><br><br><br><br><br><br><br><br><br><br><br>
<ul>
  <form action="<?php echo $editFormAction; ?>" method="POST"  name="form1" acceptcharset="UTF-8">
    <table  border="0"  cellspacing="20" class="table">
      <tr><td><B>PERSONAL INFORMATION :</B><br/><br/></td></tr>
      <tr>
       <td style="text-align: left">First Name:       </td>
       <td><input type="text" name="fname" id="fname" required  class="form-control" size="20"/></td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
       
       <td style="text-align: left">Last Name:</td>
       <td><input type="text" name="lname" id="lname" required class="form-control" size="20"/></td>
      </tr>
      <tr>
       <td style="text-align: left">Date of Birth:</td>
       <td><input type="date" name="DOB" id="DOB" value="DD/MM/YYYY" required class="form-control" size="20"/></td>
       <td>&nbsp;</td>
       <td style="text-align: left">Father Name:</td>
       <td><input type="text" name="father" id="father"  required class="form-control" size="20" /></td>
      </tr>
      <tr>
       <td style="text-align: left">Marital Satatus:</td>
       <td><select name="MaritalStatus" id="MaritalStatus" width="20">
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Devorsed">Devorsed</option>
            <option value="Widow">Widow</option>
            </select></td>
       <td>&nbsp;</td>    
       <td style="text-align:left">Gender:</td>
       <td><select name="gender" id="gender" class="form-control" width="20">
            <option value="M">Male</option>
            <option value="F">Female</option>
             </select>  </td>
     </tr>
     <tr>
      <td style="text-align: left">Phone:</td>
      <td><input type="text" name="phone" id="phone"  class="form-control" size="20"/></td>
      <td>&nbsp;</td>
      <td style="text-align: left">Mobile:</td>
      <td><input type="text" name="mobile" id="mobile" required class="form-control" size="20"/></td>
     </tr>
      
      <tr>
       <td style="text-align: left">Email:</td>
       <td><input type="email" name="email" id="email" value="Me@Example.com"required class="form-control" size="20" /> </td>
      </tr>
      <tr>
       <td style="text-align: left">Address</td>
       <td><textarea name="address" id="address" required class="form-control" size="20"> </textarea></td>
      </tr>
            <tr>
       <td><B>ACCOUNT :</B></td>
      </tr>
               
      <tr>
       <td style="text-align: left">UserName:</td>
       <td><input type="text" name="username" id="username" required class="form-control"></td>
       <td><font color="red"><?php echo   $userexits; ?></font></td>
      </tr>
      
      <tr>
       <td style="text-align: left">Password:</td>
       <td><input type="password" name="password" id="password" required class="form-control"></td>
      </tr>
      <tr> 
       <td style="text-align: left"> Confirm Password:</td>
       <td><input type="password" name="Cpassword" id="Cpassword" required class="form-control"></td>
      </tr>
     <tr>
      
      <tr><td><B>MEMBERSHIP DETAILS:</B></td></tr>
    
      <tr>
       <td style="text-align:left">Membership Type:</td>
       <td><select name="Membership" id="Membership" width="20" onChange="SelectType(this.value);">
         <?php
do {  
?>
         <option value="<?php echo $row_rsType['id']?>"><?php echo $row_rsType['membertype']?></option>
         <?php
} while ($row_rsType = mysqli_fetch_assoc($rsType));
  $rows = mysqli_num_rows($rsType);
  if($rows > 0) {
      mysqli_data_seek($rsType, 0);
	  $row_rsType = mysqli_fetch_assoc($rsType);
  }
?>
       </select></td>
       <td style="text-align:left">Branch:</td>
       <td><select name="Branch" id="Branch" width="20">
         <?php
do {  
?>
         <option value="<?php echo $row_rsbranch['id']?>"><?php echo $row_rsbranch['branchname']?></option>
         <?php
} while ($row_rsbranch = mysqli_fetch_assoc($rsbranch));
  $rows = mysqli_num_rows($rsbranch);
  if($rows > 0) {
      mysqli_data_seek($rsbranch, 0);
	  $row_rsbranch = mysqli_fetch_assoc($rsbranch);
  }
?>
       </select></td>     
     </tr>
     <tr>
       <td style="text-align:left">Monthly Fee:</td>
       <td><input type="text" name="Monthly Fee" id="MonthlyFee"   readonly class="form-control" size="20"/></td>
       
       <td style="text-align:left">Member Fee:</td>
       <td><input type="text" name="MemberFee" id="MemberFee" readonly class="form-control" size="20" value="60"/></td>
     </tr>  
     <tr>
       <td style="text-align:left">Begining date:</td>
       <td><input type="date" name="begdate" id="begdate" required class="form-control" size="20" onChange="setExDate();"/></td>
       <td style="text-align:left">Duration</td>
       <td><input type="number" value="1" size="10" id="duration" onChange="setExDate();"/> </td>
      </tr>
      
      <tr>
        <td style="text-align:center">Expiry Date:</td>
        <td><input type="text" name="expdate" id="expdate"  readonly class="form-control" size="20" /></td>
      </tr>
      
      <tr>
        <td style="text-align:center"><U>Total =</U></td>
        <td><input type="text" name="Total" id="Total"  readonly class="form-control" size="20" /> </td>
      </tr> 

       <td><B>CREDIT CARD DETAILS:</B></td>
     </tr>
     <tr>
       <td style="text-align: left">Card Type:</td>
       <td><select name="Cardtype" id="Cardtype" width="20">
             <option value="V">Visa Card</option>
             <option value="M">Master Card</option>
             <option value="A">American Express</option>
             </select></td>
             
     </tr>
     <tr>
       <td style="text-align: left">Card Number:</td>
       <td><input type="text" name="Cnumber" id="Cnumber" required class="form-control"/></td>
       
       <td style="text-align: left">Card Expiry:</td> 
       <td><input type="date" name="Cexpiry" id="Cexpiry" required class="form-Control"/></td>
     </tr>     
 
      <tr>
      <td style="text-align: right">&nbsp;</td>
      <td><input  class="btn btn-default" type="submit" name="Save" id="Save" value="Save"></td>
      
      <td style="text-align: right">&nbsp;</td>
      <td><input  class="btn btn-default" type="Reset" name="New" id="New" value="New"></td>
      <td>&nbsp;</td>
      </tr>
    </table>
    <input type="hidden" name="MM_insert" value="form1">
</form>
</div>


<script>
 function SelectType(T)
 {
	document.getElementById("MonthlyFee").value=T;
	
	if(T==175)
	 document.getElementById("Branch").value=1;
	 
	 setExDate();
 }
 
  function setExDate(){
	       var duration = document.getElementById("duration").value;
	  var BD = document.getElementById("begdate").value;
	  
	  	var MFee = document.getElementById("MonthlyFee").value;
	var Fee = document.getElementById("MemberFee").value;
	 document.getElementById("Total").value = ( MFee * duration ) + parseInt(Fee)
	  
 
	 var MemDate = new Date(BD);

 	if (MemDate != 'Invalid Date')
	 {
	  var D = MemDate.getDate();
	  
	  var M = MemDate.getMonth() +1  + parseInt(duration);
	
	  var Y = MemDate.getFullYear();
	
	  document.getElementById("expdate").value = D + "/"+ M +  "/" + Y ;
	 }
		


  }
</script>

</body>
</html>
<?php
mysqli_free_result($rsType);

mysqli_free_result($rsbranch);

?>
