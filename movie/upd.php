<?php
session_start();
 if($_SESSION['valid'] !="ok")
{
header('location:login.php');
}

		  $servername="localhost";
								$username="root";
								$password="";
								$database="movie";
								$con=mysqli_connect($servername,$username,$password,$database);
								if(!$con)
								die("connection failed");
								$quan=$_POST['quan'];
                                $ite=$_POST['id'];
								$i=$_POST['i'];
								$sql="select* from game,item where game.gameID=item.gameID and item.gameID='$ite' and item.itemID='$i' ; ";
								$resultt=mysqli_query($con,$sql);
								$rows=mysqli_fetch_array($resultt);

		if($quan<0)
	if($quan<-$rows['stockQty'])
	{
	
	header('location:checkviewupdatequantity.php');
	
	}
	else
		{
		$a=$rows['stockQty']+$quan;
  $sql = "UPDATE item SET stockQty='$a' WHERE gameID='$ite' and itemID='$i' ";
   mysqli_query($con, $sql);
   header('location:checkviewupdatequantity.php');
   
   }
	
  if($quan >= 0)
  {
	 $a=$rows['stockQty']+$quan;
  $sql = "UPDATE item SET stockQty='$a' WHERE gameID='$ite' and itemID='$i' ";
 mysqli_query($con, $sql);
 
 header('location:checkviewupdatequantity.php');
 
 
 
 
  }
  ?>
  
  
  
 
