<?php
session_start();


                                $servername="localhost";
								$username="root";
								$password="";
								$database="tourist";
								$con=mysqli_connect($servername,$username,$password,$database);
								if(!$con)
								die("connection failed");
							
								$old=$_POST['op'];
                                $new=$_POST['np'];
                                $rn=$_POST['nnp'];
                              $use=$_POST['use'];
							  $pa=$_POST['pa'];
							  		  
							
							$b=md5($old);
							
	if($pa=md5($old))						
	if($new==$rn)						)	
{
	$n=md5($new);
	
 $sql = "UPDATE person SET password='$np' WHERE username='$use' ; ";
 mysqli_query($con, $sql);?>
 
<?php
$_SESSION['username']=$use;
$_SESSION['password']=$pa;
$_SESSION['error']="Password has been changed";
	
header('location:alterpassword.php');
}
else
{
	$_SESSION['error']="New password is incorrect";
header('location:alterpassword.php');
}
?>