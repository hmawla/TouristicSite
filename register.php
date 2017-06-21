<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body>
  <form method="post">
   <?php
    $Servrename="Localhost";
    $Username="root";
    $Password="";
    $Database="Register";
    
    $con = mysqli_connect($Servername, $Username, $Password, $Database);
     if(!$con) {
       die("no Connection");
       }
   ?>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Bridge Restaurant</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#home">Home</a></li>
              <li><a href="login.html">Log in</a></li>
              <li class="active"><a href="register.html">Register</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
    
    <img src="images/bridge.png" align="left">   
    <br><br><br>
    <div class="container" align="right">
    
    <h1>Create an account</h1>
 
    <pre style="background:none">
    First name     <input type="text" size="15" name="fname" required>
    Last name      <input type="text" size="15" name="lname" required>
    E-mail         <input type="email" size="30" name="email" required>
    Confirm E-mail <input type="email" size="30" name="cemail" required>
    New password   <input type="password" size="30" name="password" required>
    Birthday       <input type="date" name="birthday" required>
    Gender         <input type="radio" name="gender" value="male" checked>Male    <input type="radio" name="gender" value="Female">Female 
                  
                   <input type="submit" value="Create account" name="createbtn" class="btn-success" onClick="
				   <?php 
				      
				      $sql ='INSERT INTO Register (fname, lname, email, password, birthday, gender) VALUES ('$_POST[fname]' ,'$_POST[lname]' , '$_POST[email]' , '$_POST[password]' , '$_POST[birthday]' , '$_POST[gender]'); ?> ">
         
    </pre>
    </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
