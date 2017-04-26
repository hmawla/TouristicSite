	<?php
	session_start();
                                $servername="localhost";
								$username="root";
								$password="";
								$database="movie";
								$con=mysqli_connect($servername,$username,$password,$database);
								if(!$con)
								die("connection failed");
								
								$fname=$_POST['fname'];
						        $lname=$_POST['lname'];
							    $father=$_POST['father'];
								$email=$_POST['email'];
								$gender=$_POST['gender'];
								$phone=$_POST['phone'];
							    $address=$_POST['address'];
						     	$username=$_POST['username'];
								$password=$_POST['password'];
								$DOB=$_POST['DOB'];
								$uu=$_POST['uu'];
								
								$_SESSION['fname']=$fname;
								$_SESSION['lname']=$lname;
								$_SESSION['father']=$father;
								$_SESSION['email']=$email;
								$_SESSION['gender']=$gender;
								$_SESSION['phone']=$phone;
								$_SESSION['address']=$address;
								$_SESSION['username']=$username;
								$_SESSION['password']=$password;
								$_SESSION['DOB']=$DOB;
								$_SESSION['uu']=$uu;
								
								$qu="select * from person where username='$uu' ;";
								$res=mysqli_query($con,$qu);
								$ra=mysqli_fetch_array($res);
								$v=$ra['pID'];
								
								
								$sql = "UPDATE person SET username='$username' WHERE username='$uu'  ";
   mysqli_query($con, $sql);
   
                                        
										$q="select * from person where username='$username' ;";
								$r=mysqli_query($con,$q);
                                       	if( mysqli_num_rows($r)>=2)
								{
									 $sql = "UPDATE person SET username='$uu' WHERE pID='$v'  ";
   mysqli_query($con, $sql);
									$_SESSION['no']="Username is already exists";
									header('location:modify.php');
									
									
								}
								else
								{
   
                                    
									 $sql = "UPDATE person SET email='$email' WHERE username='$uu'  ";
   mysqli_query($con, $sql);
						
								 $sql = "UPDATE person SET fname='$fname' WHERE username='$uu'  ";
   mysqli_query($con, $sql);
								
									 $sql = "UPDATE person SET father='$father' WHERE username='$uu'  ";
   mysqli_query($con, $sql);
   
   	                      $sql = "UPDATE person SET lname='$lname' WHERE username='$uu'  ";
   mysqli_query($con, $sql);
						       
	                          $sql = "UPDATE person SET gender='$gender' WHERE username='$uu'  ";
   mysqli_query($con, $sql);
   
                              $sql = "UPDATE person SET phone='$phone' WHERE username='$uu'  ";
   mysqli_query($con, $sql);
   
                              $sql = "UPDATE person SET address='$address' WHERE username='$uu'  ";
   mysqli_query($con, $sql);
   
                                 
                                 $sql = "UPDATE person SET password='$password' WHERE username='$uu'  ";
   mysqli_query($con, $sql);   
   
                                 $sql = "UPDATE person SET DOB='$DOB' WHERE username='$uu'  ";
   mysqli_query($con, $sql);
   
								}
								?>