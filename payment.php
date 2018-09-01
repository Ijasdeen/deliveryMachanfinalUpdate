<?php
if(!isset($_COOKIE['shopping_cart'])){
    header('Location:index.php');
    exit();
}
?>
   <?php require_once('includes/header.php')?>
    <!-- End Header =============================================== -->
<?php
if(!isset($_SESSION['userId'])){
  echo '<script>window.location.href="window.location.href=You need a login;"</script>';    
}
?>
<!-- SubHeader =============================================== -->
<section class="parallax-window"  id="short"  data-parallax="scroll" data-image-src="img/privateImages/ecommerceWebsite.jpeg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
    	<div id="sub_content">
    	 <h1>Place your order</h1>
            <div class="bs-wizard">
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="javascript:void();" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum"><strong>2.</strong>Payment</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#0" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="javascript:void();" class="bs-wizard-dot"></a>
                </div>  
		</div><!-- End bs-wizard --> 
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="payment.php">Cart</a></li>
                <li>Payment</li>
              </ul>
         </div>
    </div><!-- Position -->
    
<!-- Content ================================================== -->
<div class="container margin_60_35">
		<div class="row">
				<div class="col-md-3">
            
				<div class="box_style_2 hidden-xs info">
					<h4 class="nomargin_top">Delivery time <i class="icon_clock_alt pull-right"></i></h4>
					<p>
						 <b>We love serving you faster than expectation</b><br>
						 We deliver in 2 minutes per kilometer from 20 minutes of order. 
					</p>
					<hr>
					<h4>Secure payment <i class="icon_creditcard pull-right"></i></h4>
					<p>
						You may make the payment on website. It is completely secured
					</p>
				</div><!-- End box_style_1 -->
                
				<div class="box_style_2 hidden-xs" id="help">
					<i class="icon_lifesaver"></i>
					<h4>Need <span>Help?</span></h4>
					<a href="tel:0717335544" class="phone">0 7621 4 7621
</a> 
                <h3>8.00 AM - 11.45PM</h3>
         		</div>
                
			</div><!-- End col-md-3 -->
            
         	<div class="col-md-6">
				<div class="box_style_2">
					<h2 class="inner">Payment methods</h2>
					<div class="payment_select">
						<label><input type="radio" value="" checked name="payment_method" class="icheck" id="creditRD">Credit card</label>
						<i class="icon_creditcard"></i>
					</div>
					<div class="form-group">
						<label>Name on card</label>
						<input type="text" class="form-control" id="name_card_order" name="name_card_order" placeholder="First and last name">
						<span class="text text-danger crNameMessage"></span>
					</div>
					<div class="form-group">
						<label>Card number</label>
						<input type="text" id="card_number" name="card_number" class="form-control" placeholder="Card number" maxlength="16">
						<span class="text text-danger cartNumberMessage"></span>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Expiration date</label>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<input type="tel" id="expire_month" name="expire_month" class="form-control" placeholder="MM" maxlength="2">
										<span class="expireMonthMessage text text-danger"></span>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<input type="tel" id="expire_year" name="expire_year" class="form-control" placeholder="YYYY" maxlength="4">
										<span class="text text-danger expire_yearMesage"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label>Security code</label>
								<div class="row">
									<div class="col-md-4 col-sm-6">
										<div class="form-group">
											<input type="tel" id="ccv" name="ccv" class="form-control" placeholder="CCV" maxlength="3">
											<span class="text text-danger ccvMessage"></span>
										</div>
									</div>
									<div class="col-md-8 col-sm-6">
										<img src="img/icon_ccv.gif" width="50" height="29" alt="ccv"><small>Last 3 digits</small>
									</div>
								</div>
							</div>
						</div>
					</div><!--End row -->
<!--
					<div class="payment_select" id="paypal">
						<label><input type="radio" value="" name="payment_method" class="icheck" id="paypalwithEzCash">Pay with EZcash</label>
					</div>
--> 	<div class="payment_select nomargin">
						<label><input type="radio" value="" name="payment_method" class="icheck" id="payWithCash">Pay with cash</label>
						<i class="icon_wallet"></i>
					</div>
				</div><!-- End box_style_1 -->
			</div><!-- End col-md-6 -->
            
			<div class="col-md-3" id="finalSideBar">
             
			</div><!-- End col-md-3 -->
            
		</div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->

<!-- Footer ================================================== -->
<?php require_once('includes/footer.php')?>