 <?php require_once('includes/header.php')?>
<!-- SubHeader =============================================== -->
<section class="header-video">
    <div id="hero_video">
        <div id="sub_content">
            <h1 class="order-food">We are proud to serve you.</h1>
             <h3 class="orderfood-sub" style="color:white"> "You choose, We serve fast & hot"</h3>
         </div><!-- End sub_content -->
    </div>
    <img src="img/privateImages/balagi.png" class="header-video--media" data-video-src="video/intro" data-teaser-source="video/intro" data-provider="Vimeo" data-video-width="1400" data-video-height="360">
      </section> 
<!-- End section -->
<!-- End SubHeader ============================================ -->
            <div id="position">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li> 
                <li><a href="aboutus.php">Page active</a></li>
            </ul>
         </div>
    </div><!-- Position -->
 
<!-- Content ================================================== -->
<div class="container margin_60_35">
	<div class="row">
		<div class="col-md-3">
			<h3 class="nomargin_top">
<!--			    <img src="img/privateImages/delivermachan.gif.gif" alt="Delivery machan gid" class="img-responsive" id="adsPicture">-->
			</h3>
		 </div>
		<div class="col-md-9 backround-color">
		 <h3>Dear Valuable Guest</h3>
		 <p>Welcome to <a href="https://deliverymachan.com/">deliverymachan.com</a></p>
		<h4>How it works</h4>
		 <img src="img/privateImages/AboutUsDeliveryMachan.jpg" alt="About us pic" class="img-responsive">
	     <h3>About us</h3>
	     <p>Founded in Sri Lanka in 2018 by Rezco Group Sdn Bhd. Malaysia, deliverymachan.com is now in Kandy – Peradeniya – Katugastota – Akurana – Madawala – Menikhinna – Digana</p>
	     <p>Operating with <span class="restaurantCount"></span> Restaurants around Kandy, We employ a team of talented employees for the service.</p>
	     <p>Deliverymachan.com would be the leader in online and mobile food ordering, providing customers with an easy and secure way to order and pay for food from our restaurant partners.</p>
	     <p>
 We use our technology to bring together over millions of customer’s with <span class="restaurantCount"></span> restaurant partners in Central Province; will be serving over <span class="menucount"></span> different cuisine types to your taste buds. We’re on a mission to create the greatest food community.
 	     </p>
 	     <p>
 	         Nobody offers more variety when it comes to bringing people food.
 	     </p>
 	     <p>
 	         Our purpose sits at the heart of everything we do and that’s to make food discovery exciting for everyone, whether it’s by giving our customers more choice than anywhere else, or by supporting our restaurant partners to get more out of their business and raise standards across the industry.
 	     </p>
 	     <p>
 	         We’re proud of what we’ve built, and the countless ways we’ve connected people with food, everywhere.
 	     </p>
 	     <p>
 	         Our people are what make <a href="https://deliverymachan.com/">deliverymachan.com</a> a great company it is.
 	     </p>
 	     <p>If you’d like to boost your business by partnering with deliverymachan.com, a leading global marketplace for online food delivery, <a href="contactus.php">Click here</a></p>
		</div>
		 
	</div><!-- End row -->
	<hr class="more_margin">
    <div class="main_title">
            <h2 class="nomargin_top">Quick food quality feautures</h2>
            <p>
                What we offer is nothing but quality.
            </p>
        </div>
	<div class="row">
		<div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
			<div class="feature staticLine">
				<i class="icon_building"></i>
				<h3><span class="restaurantCount"></span> Restaurants</h3>
				<p>
					 We connect you with over <span class="restaurantCount"></span> restaurants 
				</p>
			</div>
		</div>
		<div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
			<div class="feature staticLine">
				<i class="icon_documents_alt"></i>
				<h3><span class="menucount"></span> Food Menu</h3>
				<p>
                 <span class="menucount"></span> mouth watering menus from <span class="restaurantCount"></span> different restaurants. 
 				</p>
			</div>
		</div>
	</div><!-- End row -->
	<div class="row">
		<div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
			<div class="feature staticLine">
				<i class="icon_bag_alt"></i>
				<h3><span>Delivery</span></h3>
				<p>  
                     <b>We love serving you faster than expectation</b><br>
						 We deliver in 2 minutes per kilometer from 20 minutes of order. 
				</p>
			</div>
		</div>
		<div class="col-md-6 wow fadeIn" data-wow-delay="0.4s">
			<div class="feature staticLine">
				<i class="icon_mobile"></i>
				<h3><span>Mobile</span> support</h3>
				<p>
					 Our website is fully responsive so that you can use on your mobile,tab and PC. You will have smooth and great user-experience.
				</p>
			</div>
		</div>
	</div><!-- End row -->
	<div class="row">
		<div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
			<div class="feature staticLine">
				<i class="icon_wallet"></i>
				<h3><span>Cash</span> payment</h3>
				<p>
				   You are not interested in online payment, right? well! we understand. <br> No worries, pay cash on delivery.
				</p>
			</div>
		</div>
		<div class="col-md-6 wow fadeIn" data-wow-delay="0.6s">
			<div class="feature staticLine">
				<i class="icon_creditcard"></i>
				<h3><span>Secure card</span> payment</h3>
				<p>
					 Secured payment gateway by authorized local banks.
					  <br>
					  Highly secured online payment transaction.
				</p>
			</div>
		</div>
	</div><!-- End row -->
</div><!-- End container -->

 
<!-- End Content =============================================== -->
 <?php require_once('includes/footer.php')?>
 <!-- SPECIFIC SCRIPTS -->
<script src="js/video_header.js"></script>
<script>
$(document).ready(function() {
	'use strict';
   	  HeaderVideo.init({
      container: $('.header-video'),
      header: $('.header-video--media'),
      videoTrigger: $("#video-trigger"),
      autoPlayVideo: true
    });    

});
</script>
