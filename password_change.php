<?php require_once('Connections/conn.php'); ?>
<?php
$echoer = " ";
if(!$conn){
	die("connection failed");
}
							

$username = ($_POST['username']);
$echoer = $echoer . "username = " . $username . " ";

$password = ($_POST['password']);
$echoer = $echoer . "password = " . $password . " ";

$newpassword = $_POST['newpassword'];
$echoer = $echoer . "newpassword = " . $newpassword . " ";

$confirmnewpassword = ($_POST['confirmnewpassword']);
$echoer = $echoer . "confirmnewpassword = " . $confirmnewpassword . " ";

$b = ($password);
$sql = mysqli_query($conn, "SELECT password from person  WHERE username='$username'") ;
$echoer = $echoer . "Sql = " . $sql . " ";

if ($sql != $password){
	echo $echoer . "Your passwords do not match.";
}

if($newpassword != $confirmnewpassword)
{                                                                
	echo "new passwords do not match";
}
else {
	mysqli_query($conn,"UPDATE person SET password='$newpassword' WHERE username='$username'");
}

   // echo "You have successfully changed your password.";
   
   mysqli_close($conn);

   
?>