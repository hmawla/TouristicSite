<?php

                                $servername="localhost";
								$username="root";
								$password="";
								$database="movie";
								$con=mysqli_connect($servername,$username,$password,$database);
								if(!$con)
								die("connection failed");

				
 $gname=$_POST['gname'];
  $desc=$_POST['desc'];
   $release=$_POST['re'];
     $nbqty=$_POST['nbqty'];
	  $cat=$_POST['cat'];
	  $price=$_POST['price'];
	  
	  
	  $q="INSERT INTO game (ID, name, description, releaseDate)
		 VALUES('$cat','$gname','$desc','$release') ;";
	   $result=mysqli_query($con,$q);
	   
 	 		
	 if(isset($_POST['Nintendo1']))
	 {
		 $Nintendo1=$_POST['Nintendo1'];
		
		
      $qua="select * from game where name='$gname' ;";
		$re=mysqli_query($con,$qua);
		$rr=mysqli_fetch_array($re);
		$aa=$rr['gameID'];
		
		$qa="INSERT INTO item (itemID,gameID,price,stockQty)
		 VALUES('$Nintendo1','$aa','$price','$nbqty') ;";
       mysqli_query($con,$qa);
		
				
	
 }
 
 if(isset($_POST['Playstation1']))
	 {
		 $Playstation1=$_POST['Playstation1'];
		
	   
	   $qua="select * from game where name='$gname' ;";
		$re=mysqli_query($con,$qua);
		$rr=mysqli_fetch_array($re);
		$aa=$rr['gameID'];
	   
		
		$qa="INSERT INTO item (itemID,gameID,price,stockQty)
		 VALUES('$Playstation1','$aa','$price','$nbqty') ;";
       mysqli_query($con,$qa);
		
		
	 }
	 
	 if(isset($_POST['Playstation2']))
	 {
		 $Playstation2=$_POST['Playstation2'];
		
		
		$qua="select * from game where name='$gname' ;";
		$re=mysqli_query($con,$qua);
		$rr=mysqli_fetch_array($re);
		$aa=$rr['gameID'];
		
	   $qa="INSERT INTO item (itemID,gameID,price,stockQty)
		 VALUES('$Playstation2','$aa','$price','$nbqty') ;";
       mysqli_query($con,$qa);	



	 }
 
 
	 if(isset($_POST['Playstation3']))
	 {
		 $Playstation3=$_POST['Playstation3'];
       
		
		$qua="select * from game where name='$gname' ;";
		$re=mysqli_query($con,$qua);
		$rr=mysqli_fetch_array($re);
		$aa=$rr['gameID'];
		
		    $qa="INSERT INTO item (itemID,gameID,price,stockQty)
		 VALUES('$Playstation3','$aa','$price','$nbqty') ;";
       mysqli_query($con,$qa);



	 }
	 
	 
	 if(isset($_POST['Playstation4']))
	 {
	  $Playstation4=$_POST['Playstation4'];
		
		$qua="select * from game where name='$gname' ;";
		$re=mysqli_query($con,$qua);
		$rr=mysqli_fetch_array($re);
		$aa=$rr['gameID'];
		
		    $qa="INSERT INTO item (itemID,gameID,price,stockQty)
		 VALUES('$Playstation4','$aa','$price','$nbqty') ;";
       mysqli_query($con,$qa);
	 }
	header('location:checkviewadd.php');
 ?>



