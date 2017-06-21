
    	<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/colorbox.css" />
		<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
		<script type="text/javascript" src="jQuery/jquery.js"></script>
		<script type="text/javascript" src="jQuery/bootstrap.js"></script>
<?php
session_start();
//$ins = $_SESSION["ins"];?>
<?php require_once('Connections/conn.php'); 

$id = $_SESSION['id'];
if($id == "") // to not write url in address bar
{
	header('Location:index.php');
}
$id = $_SESSION['id'];
if(!$conn)
 die("No connection" . mysqli_connect_error());

 $sql 	= "select * from person where Id = $id";
 $result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_array($result))
		{
			$pfname = $row['pfname'];
			$plname = $row['plname'];
		}
	}
?>
		 
		 
		 <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h2 class="panel-title display-td"><b>Payment Details</h2>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="images/payments.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" method="POST" action="pay_process.php">
                  <div class="row">
                       <div class="col-xs-12">
                           <div class="form-group">
                             <label for="f_name">Full Name</label>
                             <input type="text" class="form-control" value="<?php echo $pfname . " " . $plname; ?>" name="fname" readonly />
                           </div>
                       </div>                        
                  </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input 
                                            type="tel"
                                            class="form-control"
                                            name="c_n"
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><img src="images/cr.png" width="20" height="20"></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                  <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control" 
                                        name="e_d"
                                        placeholder="MM / YY"
                                        autocomplete="cc-exp"
                                        required 
                                    />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control"
                                        name="cv"
                                        placeholder="CVC"
                                        autocomplete="cc-csc"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cc">COUPON CODE</label>
                                    <input type="text" class="form-control" name="cc" />
                                </div>
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="am">Amount</label>
                                    <input type="text" class="form-control" name="am" value="your payment amount " readonly />
                                </div>
                            </div>                        
                        </div>                        
                        <div class="row">
                            <div class="col-xs-12">
                                <input type="submit" class="subscribe btn btn-success btn-lg btn-block" value="Pay"/>                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
		 
<?php //echo $_SESSION['ins'] . " " . "$"; ?>