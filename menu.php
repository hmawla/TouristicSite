<!DOCTYPE html>

<!-- ------------------------------------------------------------------- -->
  <script type="text/javascript">
        function farid(){
            alert("invalid username or password");
        }
    </script>

<?php require_once('Connections/conn.php'); ?>
<?php
if (!function_exists("GetsqlValueString")) {
function GetsqlValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if (isset($_POST['login']) ) 
{
$colname_rsLogin = "-1";
if (isset($_POST['username'])) {
  $colname_rsLogin = $_POST['username'];
}


$colpassword_rsLogin = "-1";
if (isset($_POST['password'])) {
  $colpassword_rsLogin = $_POST['password'];
}

mysqli_select_db( $conn  , $dbname);


//$colpassword_rsLogin = md5($colpassword_rsLogin);

//echo $colpassword_rsLogin;

$query_rsLogin = sprintf("SELECT * FROM person WHERE username =%s and password =%s",GetsqlValueString($colname_rsLogin , "text") ,GetsqlValueString($colpassword_rsLogin,"text"));
$rsLogin = mysqli_query(  $conn  , $query_rsLogin) or die(mysqli_error($conn));

//$rsLogin = mysqli_query( $conn, $query_rsLogin) or die(mysqli_error($conn));
$row_rsLogin = mysqli_fetch_assoc($rsLogin);
$totalRows_rsLogin = mysqli_num_rows($rsLogin);

	if ($totalRows_rsLogin > 0 )
	{
		
		$_SESSION['userid'] = $row_rsLogin['id'];
		$_SESSION['Username'] = $row_rsLogin['username'];

		
		
		if($row_rsLogin['pertype'] == 'A')
		{
			 $_SESSION['valid'] = "ok";
			
					header('Location:admin.php');
		}
		elseif ($row_rsLogin['pertype'] == 'C')
		{
			$_SESSION['user'] =$colname_rsLogin;
				$_SESSION['pass'] =$colpassword_rsLogin;
				$_SESSION['si'] ="ok";
				header('Location:user.php');	
		}
	
	
	}
	else
	{
		echo '<script>farid();</script>';
	}
}
?>






<nav class="navbar navbar-default  changecolor ">
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
					
					<li class="active" ><a href="#">Home</a></li>
					<li><a onclick="scrollWin()" href="#scrollWin()">About</a></li>
					<li><a href="#contactus">Contact</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<span class="caret"></span></a>
						<ul id="login-dp" class="dropdown-menu">
							<li>
								<div class="row" style="padding:4px;">
										<form class="form" role="form" method="post"  accept-charset="UTF-8">
											<div class="form-group">
												<label class="sr-only" for="username">username</label>
												<input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
											</div>
											<div class="form-group">
												<label class="sr-only" for="passsword">Password</label>
												<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
												<div class="help-block text-right"><a href="forgetpassword.php"target="_blank" >Forget the password ?</a></div>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-primary btn-block" name="login" id="login">Sign in</button>
											</div>
											
										</form>
									</div>
									<div class="bottom text-center">
										New Here? <a href="Registration1111.php"><b>Join Us</b></a>
									</div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
					<form class="navbar-form navbar-right">
						<div class="form-group">
							<input id="searcher" type="text" placeholder="Search" class="form-control">
						</div>
						<button type="submit" class="btn btn-success" style="background-color: #00bbff; color:black"><i class="glyphicon glyphicon-search"></i></button>
					</form>
			</div>
        </div>
    </div>
</nav>
<!-- ------------------------------------------------------------------- -->