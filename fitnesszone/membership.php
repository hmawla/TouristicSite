

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

<body class="membership">

 <?php require_once("menu.php") ?>



<!-- start popup -->

<div style="display:none;">

<div id="claim-ticket-popup" class="popup">

  <header>

    <div class="popup-icon"><img src="images/icon-popup.png"></div>

    <h3>YOUR TICKET TO wellness</h3>
    
    
  </header>

  <section class="popup-body">

    <form action="" method="post" class="form-dark">

      <div class="form-field">

        <input type="text" name="name" placeholder="Name" />

      </div>

      <div class="form-field">

        <input type="email" name="email" placeholder="Email" />

      </div>

      <div class="form-field">

        <input type="text" name="phone" placeholder="Phone Number" />

      </div>

      <div class="form-field">

        <select name="branch">

          <option value="" selected="true" disabled="disabled">Select Branch</option>

          <option value="Baabda">Baabda</option>

          <option value="Hamra">Hamra</option>

          <option value="Kaslik">Kaslik</option>

          <option value="Beirut Souks">Beirut Souks</option>

        </select>

      </div>

      <div class="form-submit">

        <input type="submit" name="submit_claim" value="Claim your trial!" class="button button-x-large">

      </div>

      <div class="form-description md-cn">This form will entitle you to a one day trial<br /> at the selected fitness zone branch</div>
      <input name="ch" type="hidden" value="" />
    </form>

  </section>

</div>

</div>





  <script type="text/javascript">

    jQuery(document).ready(function($) {

      // $('#joinusnow').fancybox({

      //     type: 'inline',

      //     content: jQuery('#claim-ticket-popup').html()

      // });

      $('#joinusnow').click(function(e) {

          //e.preventDefault();



          $.fancybox("#claim-ticket-popup", {

            padding : 0,

          });

      });

    });

  </script>



	<!-- Membership Section 1 -->

  <section id="membership-section-1" class="section-full-width section-white section-offset">

    <div class="container clearfix">

      <div class="section-icon"><img src="images/icon-membership.png" alt="Membership" /></div>

      <h1 class="section-title">A YEAR FROM NOW YOU'D <br />WISH YOU STARTED TODAY.</h1>

    </div>

    <div class="section-scrollto-wrapper"><a href="#membership-plans" class="scroll-to"><img src="images/icon-scroll-circle.png" alt="Scroll" /></a></div>

  </section><!-- #End Membership Section 1 -->



	<!-- Membership Section 2 -->

  <section id="membership-plans" class="section-full-width section-blue section-offset">

    <div class="container clearfix">

      <header><h2>CHOOSE A MEMBERSHIP THAT FITS AROUND YOUR LIFE</h2></header>

      <div class="row">

      	<div class="col-md-6 col">

        	<figure class="membership-icon"><img src="images/icon-platinum-membership.png" alt="Membership" /></figure>

          <h3>platinum <br />membership</h3>

        </div>

      <!--	<div class="col-md-4 col">

        	<figure class="membership-icon"><img src="images/icon-signature-membership.png" alt="Membership" /></figure>

          <h3>Signature <br />membership</h3>

        </div> -->

      	<div class="col-md-6 col">

        	<figure class="membership-icon"><img src="images/icon-classic-membership.png" alt="Membership" /></figure>

          <h3>Classic <br />membership</h3>

        </div>

      </div>



      <!-- <footer><a href="#" class="button button-white">Get Info</a></footer> -->

    </div>

  </section><!-- #End Membership Section 2 -->



	<!-- Membership Section 3 -->
  <section id="membership-section-3" class="parallax-effect curved-section"  data-parallax="scroll" data-image-src="">

    <div class="container curved-container clearfix">

      <div class="curved-wrapper curved-white block-keep-motivated pull-right cn">

      	<h3>KEEP MOTIVATED</h3>

        <p>

        <p><strong>Memberships</strong><br /> <br /> <strong>Classic Membership</strong></p>
<p>Full Access, Full Time to Hamra Branch.</p>
<p>&nbsp;</p>
<p><strong>Platinum Membership</strong></p>
<p>Full Access and Full time to all branches: Beirut Souks, Baabda, Kaslik and Hamra.</p>
<p>&nbsp;</p>
<p><strong>Membership Benefits</strong></p>
<p>Unlimited access to Fitness Zone</p>
<p>Unlimited access to all Group Exercise classes</p>
<p>Fitness Assessment and Gym program</p>
<p>Free Parking</p>
<p>Free Wi-Fi Access</p>
<p>Free Sauna and Steam</p>
<p>Highly equipped Lockers area including free towels and shampoo.</p>
<p>&nbsp;</p>
<p><strong>Membership Options</strong></p>
<p>One Membership fee against almost all facilities and services</p>
<p>Flexible Membership type: Monthly or Annual</p>
<p>Freezing System</p>
<p>Members&rsquo; accident insurance</p>
<p>One time Joining fee</p>
<p>One time Admin fee</p>
<p>&nbsp;</p>
<p><strong>Membership rates</strong></p>
<p>Fitness Zone provides different membership options for different needs, where we provide off-peak memberships, full time access, and corporate rates.</p>
<p>To know more about the membership&rsquo;s options,&nbsp;contact&nbsp;one of our friendly Membership Advisors.</p>
        </p>

        <a href="Registration.php" class="button-large button-black cn" id="joinusnow">JOIN US NOW</a>

      </div>

    </div>

  </section><!-- #End Membership Section 3 -->

		 	 	<footer id="footer">
  	<div class="container-md clearfix">
    	<div class="col-md-6 col col-address">
      	<div class="footer-col-address">
          <div id="footer-logo">
            <a href="index.php"><img src="images/logo.png" alt="Fitness Zone"></a>
          </div>          
		  <address>   
         <!--		  
		  Head office  Baabda, Hadath Road, Fitness Zone Center   05-958058<br>                    		Hamra, Taj Tower, Main street 01-751666<br>                    		Baabda, Hadath Road, Fitness Zone Center  05-958158<br>                    		Kaslik, costal road, 09-222770<br>                    		Beirut Souks 01-999901<br>                    		<span class="email">Email: <a href="mailto:info@fitnesszone-lb.com">info@fitnesszone-lb.com</a></span>                    	
          -->
         	 <p>Baabda 961&nbsp;5 958158<br /> Hamra&nbsp; 961 1&nbsp;751666<br /> Kaslik&nbsp;961 9&nbsp;222770<br /> Beirut Souks 961 1 999901</p>
<p>Head Office 961 5 958058</p>
<p><span class="email">Email: <a href="mailto:info@fitnesszone-lb.com">info@fitnesszone-lb.com</a></span></p>		  
		</address> 
          <div class="enlighten-text"><img src="images/enlighten-text.png" alt="Enlighten Us" /><a href="contact.php" target="_blank" class="tell-us">Tell us how was your experience ></a></div>
          
          <ul class="clearfix social-links">
            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    	<div class="col-md-3 col col-map">
      <!--	<div class="footer-map">
          <div class="responsive-iframe">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.426710134675!2d35.533133!3d33.8528923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f17900b031b6f%3A0x86901f65b7af1fa4!2sFitness+Zone!5e0!3m2!1sen!2s!4v1435958639678" width="296" height="423" frameborder="0" style="border:0" allowfullscreen></iframe>
        	</div>
  
        </div> -->
      </div>
    	<div class="col-md-3 col col-schedule">
      	<div class="col-time-schedule" id="opening-hours">
        	<header><h4>Opening Hours</h4></header>
         <!-- <ul class="clearfix">                                <li> <span class="time-label">weekdays</span>  <span class="time">6:00 AM-11:00 PM</span>                                 </li>                                <li> <span class="time-label">WEEKENDS</span>  <span class="time">8:00 AM-8:00 PM</span>                                 </li>                                <li> <span class="time-label">Holidays</span>  <span class="time">8:00 AM-8:00 PM</span>                                 </li>                         
		  </ul> -->
         <ul class="clearfix">
<li><span class="time-label">weekdays</span> <span class="time">6:00 AM-11:00 PM</span></li>
<li><span class="time-label">WEEKENDS</span> <span class="time">8:00 AM-8:00 PM</span></li>
<li><span class="time-label">Holidays</span> <span class="time">8:00 AM-8:00 PM</span></li>
</ul>	
		</div>
      </div>
    </div>
  </footer>
  <footer id="footer-2">


  	<div class="container">


    	<p class="copyright">copyright fitnesszone 2017. Designed and developed by Mojtaba Taha & Ali Badra <a target="_blank" href="http://www.grindd.com"><img class="pure-img grind-logo" src="images/grind.png" width="23px" ></a></p>


    </div>


  </footer>				
	
  <!-- Scripts -->
	<script src="assets/owl-carousel/owl.carousel.js"></script>
  <script src="assets/js/parallax.min.js"></script>
	<script src="assets/js/scripts.js"></script>
        <script src="assets/js/main.js"></script>
       
</body>
</html>