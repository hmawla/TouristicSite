<?php require_once('Connections/conn.php'); ?>
<?php

mysqli_select_db( $conn,$database_conn);
$query_rsday = "SELECT * FROM tblday";
$rsday = mysqli_query( $conn  , $query_rsday) or die(mysqli_error( $conn ));
$row_rsday = mysqli_fetch_assoc($rsday);
$totalRows_rsday = mysqli_num_rows($rsday);

mysqli_select_db( $conn ,$database_conn);
$query_rstime = "SELECT * FROM tbltime";
$rstime = mysqli_query( $conn  , $query_rstime) or die(mysqli_error($conn ));
$row_rstime = mysqli_fetch_assoc($rstime);
$totalRows_rstime = mysqli_num_rows($rstime);


?>
<!doctype html>

<html lang="en">

<head>


<!-- Facebook Conversion Code for Registrations - Fitness Zone - Instagram Pixel -->
<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = 'https://connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6050059485723', {'value':'0.00','currency':'USD'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6050059485723&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>






	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Fitness Zone</title>

  <!-- Boostrap -->

	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/pure-min.css">
	<link rel="stylesheet" href="css/pure-base.css">
	<link rel="stylesheet" href="css/pure-grid.css">

  <!-- Other Styles -->

	<link href="assets/owl-carousel/owl.carousel.css" rel="stylesheet">

	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">







  <!-- Theme Styles -->

	<link rel="stylesheet" href="css/fonts.css">



	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/responsive.css">



	<!-- REVOLUTION BANNER CSS SETTINGS -->

	<link rel="stylesheet" type="text/css" href="assets/rs-plugin/css/settings.css" media="screen" />

	<script src="assets/js/jquery-1.11.0.min.js"></script>

	<script src="assets/js/jquery-migrate-1.2.1.js"></script>

	<script src="assets/js/html5.js"></script>

  <script src="https://maps.googleapis.com/maps/api/js"></script>

  <!-- Add fancyBox main JS and CSS files -->

  <script type="text/javascript" src="assets/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

  <link rel="stylesheet" type="text/css" href="assets/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />


<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 

  ga('create', 'UA-76735626-1', 'auto');

  ga('send', 'pageview');

 
</script> 
</head>

<body class="classes">

<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<?php require_once("menu.php") ?>
<table border="1">
  <tr>
  <td>&nbsp;</td>
    <?php do { ?>
        <td><?php echo $row_rsday['description']; ?></td>
     <?php } while ($row_rsday = mysqli_fetch_assoc($rsday)); ?>
   </tr>
   
   
  <?php do { ?>
  <tr>
    <td><?php echo $row_rstime['description']; ?></td>
    
    <?php
			for ($i=1 ; $i <7 ; $i++)
			{
				echo "<td> $i </td>";
			}
			
	
	  ?>
    
  </tr>
 <?php } while ($row_rstime = mysqli_fetch_assoc($rstime)); ?>
      
  </table>

  <table border="1">
   
  </table>

</body>
</html>
<?php
mysqli_free_result($rsday);

mysqli_free_result($rstime);
?>
