<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="js/jquery-1.11.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="js/bootstrap.js"></script>
</head>

<body>
      	<div class="navbar navbar-default ">
            <div class="container-fluid">
            	<div class="navbar-header">
                	<a href="#" class="navbar-brand"><i>Beauty</i></a>
                
                </div>
                
                <ul  class="nav navbar-nav">
        
                    <li><a href="index.php">Home</a></li>
                 
                    <li><a href="productlst.php">Products</a></li>
                    <li><a href="plogin.php">Login</a></li>
                     <li><a href="pRegistration.php">SignUp</a></li>

        		</ul>
                        
                       
               <form class="navbar-form navbar-right" role="search" method="post" action="SearchProd.php">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Search" name="txtsearch" >
                    </div>
                    <div class="form-group">
                     <button class="btn btn-success-outline" type="submit"><span class="glyphicon  		glyphicon-search"></span></button>
                    </div>
                  
                </form>
                   </div>    
             </div>
     
            <?php require_once('login.php'); ?>
   
      
</body>
</html>