
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourist";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$echoer = " ";						

$username = ($_POST['username']);
$echoer = $echoer . "username = " . $username . " " . "<br>";

$password = ($_POST['password']);
$echoer = $echoer . "password = " . $password . " " . "<br>";

$newpassword = $_POST['newpassword'];
$echoer = $echoer . "newpassword = " . $newpassword . " " . "<br>" ;

$confirmnewpassword = ($_POST['confirmnewpassword']);
$echoer = $echoer . "confirmnewpassword = " . $confirmnewpassword . " " . "<br>";

$b = ($password);
//$sql = "SELECT password from person WHERE username=" . $username;
//$result=mysqli_query($conn,$sql);
//$row = mysqli_fetch_assoc($result);
$sql = "SELECT id, username, password FROM person WHERE username = '" . $username . "'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);

      

} 

if ($password != $row["password"]){
	echo $echoer . "Your passwords do not match." . "<br>";
}else if($newpassword != $confirmnewpassword)
{                                                                
	echo "new passwords do not match";
}
else {
	mysqli_query($conn,"UPDATE person SET password='" . $newpassword . "' WHERE username='" . $username . "'");
}

   // echo "You have successfully changed your password.";
   
   mysqli_close($conn);
header('location:changepassword.php');
   
?>