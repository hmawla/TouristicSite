<?php require_once('Connections/conn.php'); ?>	
    <?php session_start(); 
	

	$id = $_SESSION['valid'];
	if( $id != 'ok')
	{
		header('location:index.php');
	}
	?>
    
    
    
    	<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/colorbox.css" />
		<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
		<script type="text/javascript" src="jQuery/jquery.js"></script>
		<script type="text/javascript" src="jQuery/bootstrap.js"></script>
		<script>
		$(document).ready(function() {
		$(".btn-pref .btn").click(function () {
		$(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
		// $(".tab").addClass("active"); // instead of this do the below 
		$(this).removeClass("btn-default").addClass("btn-primary");   
		});
		});
		</script>
<style>
		/* USER PROFILE PAGE */
 .card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height:130px;
}
.card-background img {
    -webkit-filter: blur(25px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}

.w3-display-right{position:absolute;top:50%;right:0%;transform:translate(0%,-50%);-ms-transform:translate(0%,-50%)}


</style>




<nav class="navbar navbar-default navbar-fixed-top changecolor ">
    <div class="container">
        <div class="navbar-header">
			<image src="images/logo1.png" class="changesize" href="#" />
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<div>
				<ul class="nav navbar-nav changecolor1">
					<li ><a href="index.php" >Home</a></li>
				</ul>
				<ul class="nav navbar-nav changecolor1 w3-display-right">
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> logout</a></li>
				</ul>
			</div>
        </div>
    </div>
</nav>


<div style="padding-top:30px"  >
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="IMAGES/logo1.png">
   
        </div>
        <div class="useravatar">
            <img alt="" src="images/logo1.png">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo  $_SESSION['Username'] ; ?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Manage advertiser account</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Touristic data</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Manage the advertisement</div>
            </button>
        </div>
		<div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">send verification</div>
            </button>
        </div>
	</div>

    <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          
	<!--      admin user control          -->	  
		  




<center>
<p>
<form method="POST" action="#">
<input type="text" name="u_s" placeholder="Search Of User Name" size="50" id="s_u"/>
<input type="submit" value="Search"/>
</form>
<?php
if(isset($_POST['username']))
// Search with USER
 if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['username'])){
{
$search = $_POST['username'];
if($search !=""){
$sql = "SELECT * FROM person where username = '$search'";
$result = mysqli_query($conn, $sql);

if (@mysqli_num_rows($result) <= 0){
echo "<br/><b>No Record</b>";
}

if (@mysqli_num_rows($result) > 0){
?>
  <p>
<table border="1" cellpadding="0" width="50%">
<tr>
 <th width="35%">User Full Name</th>
 <th width="35%">User Name</th>

 <th width="15%">User Type</th>
 <th width="15%">Block</th>
 <th width="15%">unBlock</th>
</tr>       
<?php 
 while($rows=mysqli_fetch_assoc($result)) {
?>	 
<tr>
  <td><?php echo $rows['pfname'].' '.$rows['pfathername'].' '.$rows['plname']; ?></td>
  <td><?php echo $rows['username'];?></td>
  <td><?php echo $rows['email'];?></td>
  <td><?php $r =$rows['pertype'];
  switch  ($r){
		case "A":
        echo "admin";
        break;
		case "C":
        echo "Student";
		default:
        break;
  }
  ?>
  </td>
  <td align="center">
  	 <form method="POST" action="user_manage_process.php">
  	 <button name="b" value="<?php echo $rows["id"]; ?>"><img src="/images/skype.png" height="20" width="15"/></button>
     </form>
     </td>
     <td align="center">
     <form method="POST" action="user_manage_process.php">
  	 <button name="ub" value="<?php echo $rows["id"]; ?>"><img src="/images/skype.png" height="20" width="15"/></button>
     </form>
     </td>
</tr>
<?php   
 }}}else echo"";}
 }
?>
</table>
<?php
// Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * from person";

$result = @mysqli_query($conn, $sql);
if (@mysqli_num_rows($result) < 0) 
// output data of each row
	echo "No records";
else { 
 
if (@mysqli_num_rows($results) <= 0)
{
?>
</table>
<!--Users Table-->
<?php
//Table to display users table
?>
<p>
<table border="1" cellpadding="0" width="50%">
<tr>
 <th width="35%">User Full Name</th>
 <th width="35%">User Name</th>
 
 <th width="15%">User Type</th>
 <th width="15%">Block</th>
 <th width="15%">unBlock</th>
</tr>       
<?php
while($rows = mysqli_fetch_assoc($result)) {
?>
<tr>
  <td><?php echo $rows['pfname'].' '.$rows['pfathername'].' '.$rows['plname']; ?></td>
  <td><?php echo $rows['username'];?></td>

  <td><?php $r =$rows['pertype'];
  switch  ($r){
		case "A":
        echo "admin";
        break;
		case "c":
        echo "user";
			default:
  }
  ?>
  </td>  
  <td align="center">
     <form name="frm_block" id="frm_block" method="POST" action="user_manage_process.php">
  	 <button name="b" value="<?php echo $rows["u_ID"]; ?>">
     		<img src="/images/skype.png" height="25" width="20" /></button>
     </form>
  </td>
  <td>
     <form method="POST" action="user_manage_process.php">
  	 <button name="ub" value="<?php echo $rows["u_ID"]; ?>">
     		<img src="/images/skype.png" height="25" width="20"/></button>
     </form>
  </td>
</tr>
<?php }}} 
@mysqli_close($conn);
?>
</table>
<?php
if(isset($_SESSION['block']))
{
	echo $_SESSION['block'];
		 $_SESSION['block'] = "";
}
if(isset($_SESSION['unblock']))
{
	echo $_SESSION['unblock'];
		 $_SESSION['unblock'] = "";
}
?>
</body>
</html>	  
		  
		  
		  
		  
		  
			  
        </div>
        <div class="tab-pane fade in" id="tab2">
          <h3><?php require_once("blockunblock.php")?></h3>
        </div>
        <div class="tab-pane fade in" id="tab3">
          <h3>This is tab 3</h3>
        </div>
		<div class="tab-pane fade in" id="tab4">
          <h3>This is tab 4</h3>
        </div>
      </div>
    </div>
</div>
</div>
            
    

