


<nav class="navbar navbar-default  changecolor navbar-fixed-top ">
    <div class="container">
        <div class="navbar-header">
			<image src="images/logo1.png" class="changesize" href="index.php" />
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
        </div>
        <div id="navbar" class="navbar-collapse collapse">
		
				<ul class="nav navbar-nav changecolor1">
					
					<li class="active" ><a href="index.php">Home</a></li>
					<li><a onclick="scrollWin()" href="#scrollWin()">About</a></li>
					<li><a href="#contactus">Contact</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<span class="caret"></span></a>
						<ul id="login-dp" class="dropdown-menu">
							<li>
								<div class="row" style="padding:4px;">
										<form class="form" role="form" method="post" action="login.php" accept-charset="UTF-8">
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
				
							</li>
						</ul>
					</li>
				</ul>
					<form class="navbar-form navbar-right"action="searcher.php" >
						<div class="form-group">
						<label>click to search</label>
						</div>
						<button type="submit" class="btn btn-success" style="background-color: #00bbff; color:black"><i class="glyphicon glyphicon-search"></i></button>
					</form>
			</div>
       
    </div>
</nav>
<!-- ------------------------------------------------------------------- -->