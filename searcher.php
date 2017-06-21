<?php require_once("menu.php")?>
<?php require_once("Connections/conn.php")?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>gotour</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/colorbox.css" />
		<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
		<script type="text/javascript" src="jQuery/jquery.js"></script>
		<script type="text/javascript" src="jQuery/bootstrap.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		
		
		</head>
		<body>
		<br/><br/><br/><br/>
		<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#t" data-toggle="tab">Search for Tourist sites</a></li>
	  <li><a href="#a" data-toggle="tab">search for ADS</a></li>
	</ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="t">
          	<div>
			<br/>
		<label>Region:</label>
		<select name="rgn" class="form-control">
			<?php
	$sql		= "SELECT * FROM region";
	$result 	= mysqli_query($conn, $sql);
		while($row = mysqli_fetch_array($result))
		{
 ?>
        <option value="<?php echo $row['rid']?>"><?php echo $row['rname']?></option>
<?php }?>
        </select>

<label>Name:</label>
<input type="text" class="form-control" name="t_name" placeholder="Tourist Name" />

		</div>
		<div><br/>
		<center>
        	    <button name="searcht" class="btn btn-primary">Search</button>
        </center>	
			</div>
        </form>
      </div>
	  
	  
      <div class="tab-pane fade" id="a">
    	<br/>
		<form id="tab2" action="" method="post">
		
        	<label>Category:</label>
			<select name="cate" id="cate" class="form-control">
			<?php
	$sql		= "SELECT * FROM category";
	$result 	= mysqli_query($conn, $sql);
		while($row = mysqli_fetch_array($result))
		{
 ?>
        <option value="<?php echo $row['cid']?>"><?php echo $row['cname']?></option>
<?php }?>
        </select>
		
<label>Name:</label>
<input type="text" class="form-control" name="a_name" placeholder="Ads Name"/>

        	<div><br/>
			<center>
        	    <input type="submit" name="searcha" class="btn btn-primary" value="Search"/>
        	</center>
			</div>
    	</form>
      </div>
  </div>
  </div>
  <?php
  if(isset($_POST['searcha']))
  {
	
  
  }
  ?>