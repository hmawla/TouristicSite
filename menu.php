<!DOCTYPE html>
<!-- ------------------------------------------------------------------- -->

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
					
					<li class="active" ><a href="#">Home</a></li>
					<li><a onclick="scrollWin()" href="#scrollWin()">About</a></li>
					<li><a href="#contactus">Contact</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<span class="caret"></span></a>
						<ul id="login-dp" class="dropdown-menu">
							<li>
								<div class="row" style="padding:4px;">
										<form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
											<div class="form-group">
												<label class="sr-only" for="exampleInputEmail2">Email address</label>
												<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
											</div>
											<div class="form-group">
												<label class="sr-only" for="exampleInputPassword2">Password</label>
												<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
												<div class="help-block text-right"><a href="">Forget the password ?</a></div>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-primary btn-block">Sign in</button>
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