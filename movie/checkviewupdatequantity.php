<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Free Movies Store Website Template | Contact :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<style>
table, th, td {
    border: 1px solid black;
	border-collapse: collapse;
}
th, td {
    padding: 15px;
}
th {
    text-align: center;
}
table {
    border-spacing: 5px;
}
td {
    text-align: center;
}

#box {
    position: absolute;
	
    width: 27%;
    height:78%;
    background-color: lightblue;
	border: 1px solid black;
	opacity: 1;
	background-image:url('code.jpg');
}

</style>
<?php
if($_SESSION['valid'] !="ok")
{
header('location:login.php');
}
?>
</head>
<body>
  	<div class="header">
		 <div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					<ul>
                        <li><a href="Administrator.php"><img src="images/logo.png" alt="" width="100" height="20" /></a></li>
						<li><a href="Administrator.php">Home</a></li>
						<li><a href="checkviewselleditem.php" rel="external">View Selled Item</a></li>
						<li><a href="checkviewstock.php"rel="external">View Stock</a></li>
                        <li><a href="checkviewcomplaints.php">View Complaints</a></li>
                        <li><a href="checkviewdelete.php">Delete Game</a></li>
                        <li><a href="gamedeleted.php">Encoring Game Deleted</a></li>
                        <li><a href="checkviewupdatequantity.php">Update Quantity</a></li>
                         <li><a href="checkviewadd.php">Add Game</a></li>
                         
					</ul>
				</div>
					<div class="account_desc">
						<ul>
							<li><a href=""></a></li>
							
						</ul>
					</div>
				<div class="clear"></div>
			</div>
	  	</div>
        <div id="box"></div>
						<div class="wrap">
				<div class="header_top">
					
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
			 <div class="clear"></div>
  		</div></div></div> 
        <?php
         $servername="localhost";
								$username="root";
								$password="";
								$database="movie";
								$con=mysqli_connect($servername,$username,$password,$database);
								if(!$con)
								die("connection failed");   
		$querry="select* from game,item where game.gameID=item.gameID  ;";
 $resul=mysqli_query($con,$querry);
		if( mysqli_num_rows($resul)<=0)
		{
			echo"no rows";
			}
			else
			{
				?><br/>
                      <div align="right">
                      <form method="post" action="update.php">
                       <table style="width:72%">
                       <tr bgcolor="#FF9900">
                       <th><font color="#000000" size="+2">Game ID</font></th>
                        <th><font color="#000000" size="+2">Item Type</font></th>
                          <th><font color="#000000" size="+2">Game Name</font></th>
                       <th><font color="#000000" size="+2">Category Name</font></th>
                       <th><font color="#000000" size="+2">Quantity</font></th>
                       <th><font color="#000000" size="+2">Update</font></th>
                       </tr>
  
                <?php
				$color="yellow";
			while($row=mysqli_fetch_array($resul))
			{
			?>
     
  <tr bgcolor="#FFFFFF">
   <td><font color="#000000" size="+2"><?php echo $row['gameID']; ?></font> </td>
       <td><font color="#000000" size="+2"><?php echo $row['itemID']; ?></font> </td>
    <td><font color="#000000" size="+2"><?php echo $row['name']; ?></font> </td>

    <td><font color="#000000" size="+2"><?php
	$c=$row['ID'];
	                                            $querrrry="select* from category where ID='$c' ;";
                                               $resull=mysqli_query($con,$querrrry);
											   $fa=mysqli_fetch_array($resull);
	                                             echo $fa['CatName'];
	
	                                         ?></font> </td>
    <td><font color="#000000" size="+2"><?php echo $row['stockQty']; ?></font> </td>
    <td><font  size="+2"><a href="update.php?gid=<?php echo $row['gameID'];  ?>& it=<?php echo $row['itemID'];  ?>  "><img src="picture/update.jpg" width="100" height="30"/></a></font></td>
</tr>    
<?php


			}
			
				?>
            </table>
            </form>
            </div>
            <?php
			}
			

mysqli_close($con);

	
		
		
		
		
		
		?>
        </body>
        </html>
		