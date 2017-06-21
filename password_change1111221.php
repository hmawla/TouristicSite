<?php 
require_once('Connections/conn.php'); 
session_start()
?>
<?php 

if(!$conn)
die("connection failed");
							

$username = md5($_POST['username']);
$password = md5($_POST['password']);
$newpassword = $_POST['newpassword'];
$confirmnewpassword = md5($_POST['confirmnewpassword']);
$b = md5($password);
//$check= sprintf(" SELECT password from person WHERE username='$username'"  );
//$Result1 = mysqli_query(  $conn  , $check   ) or die(mysqli_error( $conn ));
//if($password != $Result){
//echo ("paswword incorrect");
//}
//elseif($newpassword != $confirmnewpassword){
	//echo ("confirm password incorrect");}

//	elseif($password=md5($password))						
	//if($newpassword==$confirmnewpassword){
		// $sql = "UPDATE person SET password='$newpassword' WHERE username='$username' ; ";
//	mysqli_query($con, $sql);}





if ($username)

{
$queryget =("SELECT password FROM person WHERE username='$username'");
		$row = mysqli_query($queryget,$conn) or die("Query didn't work");	
		$oldpassworddb = $row['password'];
	
		if ($password==$oldpassworddb)
		{
		
		if ($newpassword==$confirmnewpassword)
		{
		
		 if ($newpassword=="")
		{
		 echo "Password must be betwwen 6 & 25";
		}

		else
		{
				$querychange = mysql_query("
				UPDATE person SET password='$newpassword' WHERE username='$username'");
				session_destroy();
				die("Your pass has benn changed.");		
		}
		}
		else
				die("New Pass don't match");
		}
		else
			die("Old Pass doesn't match");
		}
		
		else
		{
		echo "
		
		thanks
		
		";
}		

?>
