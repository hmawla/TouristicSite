<!DOCTYPE html>

<!-- ------------------------------------------------------------------- -->
  <script type="text/javascript">
        function farid(x){
            if(x ==1){
               alert("Welcome Admin!");
               }else if(x == 2){
                   alert("Welcome User!");
               }else{
                   alert("invalid username or password");
               }
        }
    </script>

<?php require_once('Connections/conn.php'); ?>
<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$IsLogin = 0;


  


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


//$colpassword_rsLogin = md5($colpassword_rsLogin);

//echo $colpassword_rsLogin;
$sql = "SELECT id, username, password, block, pertype FROM person WHERE username = '" . $username . "' AND password = '" . $password . "'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	
	$_SESSION['id'] = $row['id'];
	$_SESSION['username'] = $username;
	
	// output data of each row
    //$row = mysqli_fetch_assoc($result);
	 if( $row["block"] == 1 ){
		 
		   echo "<script>
						alert('This User is already blocked please contact us for more info!');
				window.location = 'index.php';
				</script>";
		   
							 }
    else if( $row["username"] == $username && $row["block"] == 0 ){       
	  
	   if($row["pertype"] == "A"){
           // $IsLogin = 2;
            $_SESSION['valid'] = 2;
            //echo "<script>farid(1);</script>";
            header('Location:admin.php');
        }else{
			
            //$IsLogin = 1;
            $_SESSION['si'] = 1;
            header('Location:user.php');
        }
	}
}    } 
  else{
    $IsLogin = 0;
	echo "<script>alert('invalid username or password');
	             window.location = 'index.php';
	      </script>" ;
   
   
}


?>



