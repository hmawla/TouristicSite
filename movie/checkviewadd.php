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

<?php
if($_SESSION['valid'] !="ok")
{
header('location:login.php');
}
?>
<style>
table, th, td {
    border: 1px solid black;
	border-collapse: collapse;
}
th, td {
    padding: 10px;
}
th {
    text-align: center;
}
table {
    border-spacing: 1px;
}
td {
    text-align: center;
}


#box {
    position: absolute;
	
    width: 27%;
    height: 80%;
    background-color: lightblue;
	border: 1px solid black;
	opacity: 1;
	background-image:url('counter.jpg');
}

</style>
</head>
<body >
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
		$querry="select* from category;";
 $resul=mysqli_query($con,$querry);
		if( mysqli_num_rows($resul)<=0)
		{
			echo"no rows";
			}
			else
			{
				?><br/>
                       <div align="center">
                      
                       <form name="frm" method="post" action="add.php">
                       
                       <table width="70%" border="1" bordercolor="#00FF00" cellspacing="0" bgcolor="#FFFFFF" align="right" >
                       
    <tr> 
   <td><font color="#000000" size="+2"><b>Game Name</b></font></td>
    <td><input type="text"  name="gname" required /></td>
    </tr>
    <tr>
       <td><font color="#000000" size="+2"><b>Description</b></font></td>
       <td><input type="text" name="desc"  required /></td>
           </tr>
           <tr>
           <td><font color="#000000" size="+2"><b>Release Date<b/></font></td>
           		  
           <td><input type="date" name="re" style=" width:170px; height:20px " required /></td>
           </tr>
                       <tr>
            <td><font color="#000000" size="+2"><b>Number Of Quantity</b></font></td>
            <td><input type="number" name="nbqty" required /></td>
            </tr>
                  <tr>
            <td><font color="#000000" size="+2"><b>Price</b></font></td>
            <td>&nbsp;&nbsp;<input type="number" name="price" required />$</td>
            </tr>
            <tr>
            <td><font color="#000000" size="+2"><b>Check ur Item</b></font></td>
            <td>
                  <?php
				  $qu="select* from item GROUP BY itemID;";
                $resu=mysqli_query($con,$qu);
				?>
                <div align="center">
                <table>
                <?php
				while($row=mysqli_fetch_array($resu))
				{  
				  ?>
                  <tr>     
      <td><?php echo $row['itemID'];  ?></td><td><input type="checkbox" name="<?php echo $row['itemID']; ?>" value="<?php echo $row['itemID']; ?>"  /></td>
      </tr>
            <?php 
				}
			?>
            </table>
            </div>
                    </td>
   
            </tr>
            <tr>
            
           <td><font color="#000000" size="+2"><b>Category</b></font></td>
            <td><select name="cat" style="width:180px; height:25px;">
            <?php
			while($rows=mysqli_fetch_array($resul))
			{
				
			?>
          
         <option value="<?php echo $rows['ID'];?>"><?php echo $rows['CatName'];?>
            </option>
            
            <?php
			}
			?>
            </select>
            </td>
            </tr>
            <tr>
          <td align="center" colspan="2"><input type="submit" value="Add Game And Update Quantity"  style="width:250px; height:20px; color:#000" /></td>
           </tr>
          
           </table>
           </div>
             </form>
             </div>
             </body>
             </html>
             <?php
			}
			mysqli_close($con);
			?>
			</body>
            </html>