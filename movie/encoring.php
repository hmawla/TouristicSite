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

		$d=$_GET['idd'];
		$t=$_GET['itt'];
		
	   $querry="select * from game,item where item.gameID=game.gameID and item.itemID='$t' and item.gameID='$d' and del='1' ;";
 $resul=mysqli_query($con,$querry);
	if( mysqli_num_rows($resul)<=0)
		{
			echo"no rows";
			}
			else
			{
 $sql = "UPDATE item SET del=0 WHERE gameID='$d' and itemID='$t' ";
   mysqli_query($con, $sql);
 


header('location:checkviewdelete.php');
			}
mysqli_close($conn);
?>