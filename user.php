<?php
require_once('Connections/conn.php');
 session_start();
	$id = $_SESSION['si'];
	if( $id != 1)
	{
		header('location:index.php');
	}
	$u_id = $_SESSION['id'];
	$u_name = $_SESSION['username'];
	?>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/colorbox.css" />
		<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
        <link rel="stylesheet" type="text/css" href="css/range.css" />
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
					<li ><a href="changepassword.php" target="_blank">change password</a></li>
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
            <img class="card-bkimg" alt="" src="IMAGES/4.JPG">
   
        </div>
        <div class="useravatar">
            <img alt="" src="images/4.jpg">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo  $_SESSION['username'] ; ?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Manage Ads</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">make Ads</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">send payment</div>
            </button>
        </div>
		<div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Inbox</div>
            </button>
        </div>
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1" style="background-color:#FFFFFF">
          <!---->
          
          
          
                   <div class="container">
        <h3>Your ads</h3>
        <!--dropdown menu-->
        <!--<div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Dropdown Example
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#"><span class="glyphicon glyphicon-plus-sign"></span>New Entry</a></li>
                <li role="seperator" class="divider"></li>
                <li><a href="#">category 1</a></li>
                <li><a href="#">category 2</a></li>
            </ul>
        </div>
        <br><br>-->
        <!--table-->
       <table class="table table-striped">
       <?php
       $sql = "select * from ads where id = $u_id";
	   $result = mysqli_query($conn, $sql);
		
       if (@mysqli_num_rows($result) > 0){
       ?>
	   <thead>
            <tr class="info">
                <th>Ads Name</th>
                <th>Start date</th>
                <th>Duration</th>
                <th>Description</th>
                <th>Ads Status</th>
                <th>Renew</th>
                <th>Stop</th>
            </tr>
        </thead>       
<?php 
 while($rows=mysqli_fetch_assoc($result)) {
	?>
<td><?php echo $rows["adsname"]; ?></td>
<td><?php echo $rows["start_date"]; ?></td>
<td><?php echo $rows["duration"] . " " . "months"; ?></td>
<td><?php echo $rows["description"]; ?></td>
<td><?php  $r =$rows['ads_state'];
  switch  ($r){
		case "1":
        echo  "proceeded";
        break;
		case "0":
        echo "Ended";
        break;
  }
  ?></td>
   <td align="center">
  	 <form method="POST" action="ads_manage_process.php">
  	 <button name="re" value="<?php echo $rows["adsid"]; ?>"><i class="glyphicon glyphicon-ban-circle"></i></button>
     </form>
     </td>
     <td align="center">
     <form method="POST" action="ads_manage_process.php">
  	 <button name="s" value="<?php echo $rows["adsid"]; ?>"><i class="glyphicon glyphicon-stop"></i></button>
     </form>
     </td>
<?php
 }}?>
    </table>
    </div>      
          
        </div>



        <div class="tab-pane fade in" id="tab2">     		
            
            
            <div class="row">
            <div class="col-sm-8">
                <form name="frmupload" method="post" action="upload_ads.php" enctype="multipart/form-data">
                    <div class="form-group float-label-control">
                        <label for="">Ads Name:</label>
                        <input type="text" name="adsname" class="form-control" placeholder="Ads Name">
                    </div>
                    <div class="form-group float-label-control">
                        <label>Start  date:</label>
                        <input type="date" name="s_dte" class="form-control">
                    </div>
                    <div class="form-group float-label-control">
                        <label>Duration:</label>
     <div class="row">
      <div class="col-xs-6">
          <div class="range range-info">
            <input type="range" name="range" min="1" max="12" value="6" onchange="rangeInfo.value=value">
            <output id="rangeInfo">6</output>
          </div>
        </div>
</div></div>
                    
      <div class="form-group float-label-control">
                        <label>Description:</label>
                        <input type="text" name="desc" class="form-control" placeholder="Description">
      </div>
      <div class="form-group float-label-control">
                        <label>Uploaded files:</label>
                        <input type="file" name="Upload" class="form-control" multiple>
      </div>
      
    <center>
             <button name="uploaded">Uploaded</button>
    
      
      
      
      
      
      </form>
</div></div>
        </div>
        <div class="tab-pane fade in" id="tab3"  >

         
         
             <h3>This is tab 3</h3>
         
         
         
         
        </div>
		<div class="tab-pane fade in" id="tab4">
          <h3>This is tab 4</h3>
        </div>
      </div>
    </div>
</div>
</div>