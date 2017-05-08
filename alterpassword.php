<?php session_start(); ?>
<!DOCTYPE HTML>

<title>Free Movies Store Website Template | Contact :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<style>
#box {
    position: absolute;
	width: 25%;
    height: 73%;
    background-color: lightblue;
	border: 1px solid black;
	opacity: 1;
	background-image:url('warcraft.jpg');
}
</style>
<?php
if(isset($_SESSION['username'])){
	$u=$_SESSION['username'];
	$p=$_SESSION['password'];
}

?>
					
						
						
						  <script type="text/javascript">
								function DropDown(el) {
									this.dd = el;
									this.initEvents();
								}
								DropDown.prototype = {
									initEvents : function() {
										var obj = this;
					
										obj.dd.on('click', function(event){
											$(this).toggleClass('active');
											event.stopPropagation();
										});	
									}
								}
					
								$(function() {
					
									var dd = new DropDown( $('#dd') );
					
									$(document).click(function() {
										// all dropdowns
										$('.wrapper-dropdown-2').removeClass('active');
									});
					
								});
					    </script>

  	
        <?php
		
								$servername="localhost";
								$username="root";
								$password="";
								$database="tourist";
								$con=mysqli_connect($servername,$username,$password,$database);
								if(!$con)
								die("connection failed");
        $query="select * from person where username='$username' ;";
								$results=mysqli_query($con,$query);
								
								
                                $rows=mysqli_fetch_array($results);
		
		   ?>
               
                                 
                                 
 <form  name="login" method="post" action="p.php" >
                                <div align="center"><font color="#FF0000" size="+3"><?php if(isset($_SESSION['error'])) {   
							                          echo $_SESSION['error'];
													  $_SESSION['error']='';} ?></font></div>
								
								
								
								
							
<table border="1">
<tr>
<td colspan="2"><font color="#FF0000" size="+2"><?php if(isset($_SESSION['erro'])){ echo $_SESSION['erro'];
 $_SESSION['erro']='' ; } ?></font></td>
</tr>
<tr>
    <td><font color="#000000" size="+2"><b>Enter Old Password:</b></font></td>
    <td> <input type="text" name="op" required /></td>
  </tr>
  <tr>
<td> <font color="#000000" size="+2"><b>  Enter New Password:</b></font></td>
<td><input type="password" name="np" required /></td>
</tr>
<tr>
 <td><font color="#000000" size="+2"><b>Retry New Password:</b></font></td>
 <td><input type="password" name="nnp" required /></td>
 </tr>

 
  <tr>
  <td colspan="2" align="center"><br/><input type="submit"  value="Change password"  style="width:150px; height:25px; " /></td>
  </tr>
 </table>
</form>