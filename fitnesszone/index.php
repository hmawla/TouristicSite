

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fitness Zone</title>
<?php require_once('cssCom.php'); ?>
</head>
<body class="home">
<?php require_once("menu.php") ?>
<!-- start popup -->
<div style="display: none;">
    <div id="claim-ticket-popup" class="popup">
        <header>
            <div class="popup-icon">
               <img src="images/icon-popup.png">
            </div>
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
                    <input type="submit" value="Claim your trial!"
                        class="button button-x-large">
                </div>
                <div class="form-description md-cn">
                    This form will entitle you to a one day trial<br /> at the selected
                    fitness zone branch
                </div>
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
        $('.joinusnow, .btn-fixed').click(function(e) {
            //e.preventDefault();
            $.fancybox("#claim-ticket-popup", {
               padding : 0,
            });
        });
    });
</script>
<!-- end popup -->
<!-- Home Slider -->
<section id="home-slider">
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <ul>
                <!-- SLIDEUP -->
                    <li data-transition="slideup" data-slotamount="7"
                        data-thumb="images/slides/slide-1-thumb.jpg"><img
                            src="images/slides/slide-1-thumb.jpg" />
                        <div class="caption lft" data-x="600" data-y="100" data-speed="900"
                            data-start="1000" data-easing="easeOutBack">
                            <img src="http://fitnesszone-lb.com/images/thumbs/image.php/image_5ded483dbd424e41c74d4db737e15540.jpg?width=550&amp;height=357&amp;cropratio=550:357&amp;image=/images/sliders/image-fb46293984dc7051eaa339a22df2871c2016-02-29-11-44-20.jpg" />
                        </div>
                        <div class="caption lfb slide-heading-1 slide-heading" data-x="30"
                            data-y="60" data-speed="600" data-start="1200"
                            data-easing="easeOutExpo"></div>
                        <div class="caption lfb slide-heading-2 slide-heading" data-x="30"
                            data-y="80" data-speed="600" data-start="1300"
                            data-easing="easeOutExpo"></div>
                        <div class="caption lfb slide-heading-3 slide-heading" data-x="30"
                            data-y="190" data-speed="600" data-start="1400"
                            data-easing="easeOutExpo"></div>
                        <div class="caption sfb start" data-x="230" data-y="340"
                            data-speed="1000" data-start="1500" data-easing="easeOutBack">
                            <a href="Registration.php"
                                class="slide-button black small joinusnow">Start Now &nbsp;&nbsp;<i
                                    class="fa fa-chevron-right"></i></a>
                        </div></li>
                    <li data-transition="slideup" data-slotamount="7"
                        data-thumb="images/slides/slide-1-thumb.jpg"><img
                            src="images/slides/slide-1-thumb.jpg" />
                        <div class="caption lft" data-x="600" data-y="100" data-speed="900"
                            data-start="1000" data-easing="easeOutBack">
                            <img src="http://fitnesszone-lb.com/images/thumbs/image.php/image_53cfdefea6eeece58a8cde3a0962b0b2.jpg?width=550&amp;height=357&amp;cropratio=550:357&amp;image=/images/sliders/12715598-1004507136283389-3810234068744148455-n2016-02-17-02-46-13.jpg" />
                        </div>
                        <div class="caption lfb slide-heading-1 slide-heading" data-x="30"
                            data-y="60" data-speed="600" data-start="1200"
                            data-easing="easeOutExpo"></div>
                        <div class="caption lfb slide-heading-2 slide-heading" data-x="30"
                            data-y="80" data-speed="600" data-start="1300"
                            data-easing="easeOutExpo"></div>
                            
                        <div class="caption lfb slide-heading-3 slide-heading" data-x="30"
                            data-y="190" data-speed="600" data-start="1400"
                            data-easing="easeOutExpo"></div>
                                                   
                        <div class="caption sfb start" data-x="230" data-y="340"
                            data-speed="1000" data-start="1500" data-easing="easeOutBack">
                            <a href="#claim-ticket-popup"
                                class="slide-button black small joinusnow">Start Now &nbsp;&nbsp;<i
                                    class="fa fa-chevron-right"></i></a>
                        </div></li>
            </ul>
            <!--<div class="tp-bannertimer"></div>-->
        </div>
    </div>
</section>
<!-- end Home Slider -->
<!-- Home Tabs -->
<section id="home-tabs">
    <header class="home-tabs-header">
        <div class="container">
            <h1>whats next?</h1>
            <ul id="home-tabs-nav" class="clearfix pull-right">
                    <li><a href="#home-tab-0"
                            data-image="http://fitnesszone-lb.com/images/thumbs/image.php/image_1b49c5b49a5e406bca6ef25e0e6df3f3.jpg?width=1500&amp;height=519&amp;cropratio=1500:519&amp;image=/images/branches/baabda2016-01-14-02-54-01.JPG"><span>Baabda</span>
                        </a></li>

                    
                    <li><a href="#home-tab-1"
                            data-image="http://fitnesszone-lb.com/images/thumbs/image.php/image_a2ce9b2f2daeddbae5547b26047b9a49.jpg?width=1500&amp;height=519&amp;cropratio=1500:519&amp;image=/images/branches/hamra2016-01-14-02-54-14.JPG"><span>Hamra</span>
                        </a></li>

                    
                    <li><a href="#home-tab-2"
                            data-image="http://fitnesszone-lb.com/images/thumbs/image.php/image_b7dc435a8a51d578f04d478d944c9deb.jpg?width=1500&amp;height=519&amp;cropratio=1500:519&amp;image=/images/branches/kaslik2016-01-14-02-54-27.JPG"><span>Kaslik</span>
                        </a></li>

                    
                    <li><a href="#home-tab-3"
                            data-image="http://fitnesszone-lb.com/images/thumbs/image.php/image_cbeafbdc02df1cce52fe7cc5e39fbef1.jpg?width=1500&amp;height=519&amp;cropratio=1500:519&amp;image=/images/branches/img-76442016-01-14-02-55-08.JPG"><span>Beirut Souks</span>
                        </a></li>

                                </ul>
        </div>

    </header>

    <div class="home-tabs-content">
            <section id="home-tab-0" class="home-tab" style=''>
                <div class="home-tab-content">
                    <div class="container">
                        <div class="owl-carousel branch-slider">

                        </div>
                    </div>

                </div>

            </section>

            
            <section id="home-tab-1" class="home-tab" style='display:none'>

                <div class="home-tab-content">

                    <div class="container">
                        <div class="owl-carousel branch-slider">



                            



                        </div>
                    </div>

                </div>

            </section>

            
            <section id="home-tab-2" class="home-tab" style='display:none'>

                <div class="home-tab-content">

                    <div class="container">
                        <div class="owl-carousel branch-slider">



                            



                        </div>
                    </div>

                </div>

            </section>

            
            <section id="home-tab-3" class="home-tab" style='display:none'>

                <div class="home-tab-content">

                    <div class="container">
                        <div class="owl-carousel branch-slider">



                            



                        </div>
                    </div>

                </div>

            </section>

            


    </div>

</section>

<!-- #End Home Tabs -->



<!-- Home Blocks -->

<section id="home-blocks">

    <div class="container-full clearfix">

        <div class="col-md-4 get-in-title">

            <h1 class="title-big">
                get<br />inthe<br />zone!
            </h1>

        </div>

        <div class="col-md-8 get-in-blocks">



            <div class="col-md-4 get-in-block">

                <div class="block-icon">
                    <img src="images/icon-calender.png" alt="Calneder" />
                </div>

                <h4>fitness classes</h4>

                
                <div class="block-content clearfix">

                    <img src="http://fitnesszone-lb.com/images/thumbs/image.php/image_1c9a8e500d56c7cfe32c34153a6d1aaf.jpg?width=288&amp;height=216&amp;cropratio=288:216&amp;image=/images/classes/aerobics-640x3002016-01-20-01-31-50.jpg"
                        alt="fitness classes" />

                    <h2>Combo</h2>

                    <p style="min-height:100px">A mixture of LesMills Body Attack, Combat and Step workouts to shape and tone the entire body.Burn a lot of calories and have LOTS of fun.<a href="classes.php?class_id=27"
                        class="more">more ></a>
                    </p>

                </div>

            </div>



            <div class="col-md-4 get-in-block">

                <div class="block-icon">
                    <img src="images/icon-circle.png" alt="Calneder" />
                </div>

                <h4>our trainers</h4>

                
                <div class="block-content clearfix">

                    <img src="http://fitnesszone-lb.com/images/thumbs/image.php/image_d41d8cd98f00b204e9800998ecf8427e.jpg?width=288&amp;height=216&amp;&amp;cropratio=288:216&amp;image=/tablesl%2Fimages%2Fnot_found.jpg"
                        alt="our trainers" />

                    <h2>rana h</h2>

                    <!--	<p>combat <a href="trainers.php"
                    class="more">more ></a>
                    </p>-->


                    <p style="min-height:100px">	combat<a href="#"
                        class="more more-trainer">more ></a>
                    </p>

                </div>

            </div>



            <div class="col-md-4 get-in-block">

                <div class="block-icon">
                    <img src="images/icon-thumb.png" alt="Calneder" />
                </div>

                <h4>recent news</h4>
                                <div class="block-content clearfix">

                    <img src="http://fitnesszone-lb.com/images/thumbs/image.php/image_d41d8cd98f00b204e9800998ecf8427e.jpg?width=288&amp;height=216&amp;&amp;cropratio=288:216&amp;image=/tablesl%2Fimages%2Fnot_found.jpg" alt="fitness classes" />

                    <h2></h2>

                    <p style="min-height:100px">
                        <a href="#" class="more more-news">more ></a>
                    </p>

                </div>

            </div>



        </div>

    </div>

</section>
<!-- start popup -->
<script type="text/javascript">

    jQuery(document).ready(function($){
        $('.more-trainer').on('click', function(e){
            e.preventDefault;

            $.fancybox("#trainer-popup", {

                padding : 0,

            });
        });
        $('.more-news').on('click', function(e){
            e.preventDefault;

            $.fancybox("#news-popup", {

                padding : 0,

            });
        });
    });

</script>
<div style="display: none;">
    <div id="trainer-popup" class="popup" style="text-align: initial;max-width: 646px;height:100%">

        <section class="popup-body " id="trainer_13">
            <h1>rana h</h1>
            <img src="http://fitnesszone-lb.com/images/thumbs/image.php/image_d41d8cd98f00b204e9800998ecf8427e.jpg?width=288&amp;height=216&amp;&amp;cropratio=288:216&amp;image=/tablesl%2Fimages%2Fnot_found.jpg"
                alt="our trainers" />
            <h2></h2>
            <div><p>combat</p></div>
        </section>
    </div>
</div>

<div style="display: none;">
    <div id="news-popup" class="popup" style="text-align: initial;max-width: 646px;height:100%">

        <section class="popup-body " id="trainer_">
            <h1></h1>
            <img src="http://fitnesszone-lb.com/images/thumbs/image.php/image_d41d8cd98f00b204e9800998ecf8427e.jpg?width=288&amp;height=216&amp;&amp;cropratio=288:216&amp;image=/tablesl%2Fimages%2Fnot_found.jpg"
                alt="our trainers" />
            <div></div>
        </section>
    </div>
</div>



<!-- #End Home Blocks -->



<!-- Home Success Story -->

<!-- <section id="home-success-story">

<div class="container-full clearfix">

<div class="success-story-title pull-right"><h1 class="title-big">no<br /> guts<br /> no<br /> glory!</h1></div>

<div class="success-story-content pull-right">

<h3>Success story</h3>

<h4>Nabil lost 15kgs in just 4 months!</h4>

<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora</p>

</div>

</div>

</section> -->
<!-- #End Home Success Story -->



<!-- About Section 2 -->
<section id="home-success-story-2"
    class="parallax-effect curved-section home-success-story"
    data-parallax="scroll" data-image-src="">
    <div class="container-full curved-container clearfix">
        <div
            id="demo-1" data-zs-src='["images/success_stories/sherif2016-01-15-12-36-56.jpg"]' data-zs-overlay="dots" style="height: 100%;width: 57%;background-size: contain; background-repeat: no-repeat;position: absolute;">

        </div>

        <div
            class="curved-wrapper curved-blue block-home-success-story pull-right">

            <div class="success-story-title pull-right">
                <h1 class="title-big">
                    no<br /> guts<br /> no<br /> glory!
                </h1>
            </div>

            <div class="success-story-content pull-right">



                <h3>Success story</h3>

                <h4>Sherif's Success Story</h4>

                <p>

                                        <p>I have been working out on and off for the past 10 years. 2 years ago, I decided to apply myself and started going regularly to the gym. Even though I was working out on a daily basis, the result was not as I would have wished. After doing a small research and asking around, a personal trainer was the missing element. Now the question was how to choose a personal trainer?? I began observing the trainers present at the gym and after a while I set my sights on one. And by god, did I choose the right one. From a training schedule to a well-balanced diet, with a constant motivation to keep going forward, Ali Zeitoun transformed my life. The most remarkable asset was that even when I was injured, Ali would come up with many ways for me to train without aggravating my injury and therefore being able to never disrupt my training schedule. Today, at 34 years old, I feel stronger and fitter than I would have ever dreamed of being.</p>                </p>

            </div>

        </div>

    </div>

</section>
<!-- #End About Section 2 -->
</div>


<!-- MODULES ONLY FOR THE DEMONSTATION -->

<script type="text/javascript"
    src="assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>

<script type="text/javascript"
    src="assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript">



    var tpj=jQuery;

    tpj.noConflict();



    tpj(document).ready(function() {



        if (tpj.fn.cssOriginal!=undefined)

            tpj.fn.css = tpj.fn.cssOriginal;



        tpj('.fullwidthbanner').revolution(

            {

                delay:9000,

                startwidth:1180,

                startheight:418,



                onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off



                thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)

                thumbHeight:50,

                thumbAmount:4,



                hideThumbs:200,

                navigationType:"bullet",					//bullet, thumb, none, both	 (No Shadow in Fullwidth Version !)

                navigationArrows:"none",		//nexttobullets, verticalcentered, none

                navigationStyle:"round",				//round,square,navbar

                navigationHAlign:"right",   // left,center,right



                touchenabled:"on",						// Enable Swipe Function : on/off



                navOffsetHorizontal:500,

                navOffsetVertical:20,



                fullWidth:"off",



                shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)



        });









    });

</script>

<script type="text/javascript">

    jQuery( document ).ready(function($){

        $("#home-tabs-nav a").click(function(e){

            e.preventDefault();

            var bg_image = $( this ).attr('data-image');

            $('#home-tabs .home-tab').css({

                background : "url(" + bg_image + ") no-repeat top center",

            });

        });

        jQuery("#success-carousel").owlCarousel({
            navigation: false,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            pagination: true
        });

        jQuery(".branch-slider").owlCarousel({
            navigation: false,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            pagination: true
        });
    });

</script>
<div id="pixel" style="visibility: hidden;"></div>
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
<script type="text/javascript" src="assets/js/jquery.zoomslider.min.js"></script>