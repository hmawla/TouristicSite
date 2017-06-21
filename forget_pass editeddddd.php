<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ar" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>Al Afak Institute</title>
   		<link rel="stylesheet" type="text/css" href="slider/style.css" />
		<script type="text/javascript" src="slider/jquery.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  		<script src="bootstrap/jQuery/bootstrap.js"></script>
  		<script src="bootstrap/jQuery/jquery.js"></script>
</head>
<body>
<div class="container">
  <h2><center>Add Empoyee</center></h2>
  <form name="frm" action="#" method="post">
   <fieldset>
    <legend>Forget Password:</legend>
    <div clas="form-group">
		<label for="un">User Name:</label>
      	<input type="text" class="form-control" name="un" placeholder="Enter User Name" required />
	</div>
    <p>
    <div clas="form-group">
		<label for="email">email:</label>
      	<input type="text" class="form-control" name="email" placeholder="Enter email" required />
	</div>
    <p>
    <div clas="form-group">
		<label for="phone">phone:</label>
      	<input type="text" class="form-control" name="phone" placeholder="enter your phone" required />
	</div>
    <p>
    <div clas="form-group">
		<label for="np">New password:</label>
      	<input type="password" class="form-control" name="np" placeholder="Enter New password" required />
	</div>
    <p>
    <div clas="form-group">
		<label for="rp">Return password:</label>
      	<input type="password" class="form-control" name="rp" placeholder="Return password" required />
	</div>
        <p>
        <div clas="form-group">
      	<input type="submit" class="form-control" name="s" value="Accept" />
	</div>
</fieldset>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['s']) && $_POST['np'] == $_POST['rp'])
{
$un 	= $_POST['un'];	
$sq 	= $_POST['email'];	
$sa 	= $_POST['phone'];
$pass 	= $_POST['np'];

if(!$conn)
 die("No connection" . mysqli_connect_error());
 

 $sql_users 	= "select * from users where user_Name = '$un'";
 $result		= mysqli_query($conn, $sql_users);

	while($row = mysqli_fetch_assoc($result))
		{
			$unn = $row['user_Name'];
			$sqq = $row['secret_question'];
			$saa = $row['secret_Answer'];
			$id  = $row['u_ID'];
		}
	if($un == $unn && $sq == $sqq && $sa == $saa)
		{
			$sql = "UPDATE users SET user_Pass = '$pass' WHERE u_ID = $id";
			if (mysqli_query($conn, $sql)) 
				{
				header('Location:index.php');
				}
				else echo  "Error in user update " . mysqli_error($conn);

		}
}
?>