<?php require_once('includes/header.php')?>

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/privateImages/ecommerceWebsite.jpeg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
    	<div id="sub_content">
    	 
    	 <h1>Place your order</h1>
            <div class="bs-wizard">
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#0" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart_2.html" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart_3.html" class="bs-wizard-dot"></a>
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
                 
                <li>Cart</li>
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
				<div class="box_style_2" id="order_process">
					<h2 class="inner">Your order details</h2>
					 
					 <div class="form-group">
						<label>First name</label>
						<?php
                         if(isset($_SESSION['userName'])){
                             ?>
                             <input type="text" class="form-control" id="customerFirstName" name="firstname_order" placeholder="First name" required value="<?php if(isset($_SESSION['userName'])) echo $_SESSION['userName']?>" disabled autocomplete="on">
						<span class="text text-danger" id="customerFirstNameError"></span>
                             <?php
                         }
                        else {
                            ?>
                            <input type="text" class="form-control" id="customerFirstName" name="firstname_order" placeholder="First name" required value="<?php if(isset($_SESSION['userName'])) echo $_SESSION['userName']?>" autocomplete="on">
						<span class="text text-danger" id="customerFirstNameError"></span>
                            <?php
                        }
                         ?>
						
					</div>
					<div class="form-group">
						<label>Last name</label>
						<?php
                        if(isset($_SESSION['lastName'])){
                            ?>
                            <input type="text" class="form-control" id="customerlastName" name="lastname_order" placeholder="Last name" required value="<?php if(isset($_SESSION['lastName'])) echo $_SESSION['lastName']?>" disabled autocomplete="on">
						<span class="text text-danger" id="lastNameErrorMessage"></span>
                            <?php
                        }
                        else {
                           ?>
                           <input type="text" class="form-control" id="customerlastName" name="lastname_order" placeholder="Last name" required value="<?php if(isset($_SESSION['lastName'])) echo $_SESSION['lastName']?>" autocomplete="on">
						<span class="text text-danger" id="lastNameErrorMessage"></span>
                           <?php 
                        }
                        ?>
				 		
					</div>
					<div class="form-group">
						<label>Telephone/mobile</label>
						<?php
                        if(isset($_SESSION['mobileNumber'])){
                            ?>
                            	<input type="tel" id="tel_order" name="tel_order" class="form-control" placeholder="Telephone/mobile" required value="<?php if(isset($_SESSION['mobileNumber'])) echo '0'.$_SESSION['mobileNumber']?>" disabled autocomplete="on">
						<span class="text text-danger" id="contactNumberError"></span>
                            <?php
                        }
                        else {
                            ?>
                            	<input type="tel" id="tel_order" name="tel_order" class="form-control" placeholder="Telephone/mobile" required value="<?php if(isset($_SESSION['mobileNumber'])) echo '0'.$_SESSION['mobileNumber']?>" autocomplete="on">
						<span class="text text-danger" id="contactNumberError"></span>
                            <?php
                        }
                        ?>
					
					</div>
					<div class="form-group">
						<label>Email</label>
						<?php
                        if(isset($_SESSION['userEmail'])){
                            ?>
                            <input type="email" id="customerEmail" name="email_order" class="form-control" placeholder="Your email" value="<?php if(isset($_SESSION['userEmail'])) echo $_SESSION['userEmail']?>" disabled autocomplete="on">
						<span class="text text-danger" id="customerEmailerror"></span>
                            <?php
                        }
                        else {
                            ?>
                            <input type="email" id="customerEmail" name="email_order" class="form-control" placeholder="Your email" value="<?php if(isset($_SESSION['userEmail'])) echo $_SESSION['userEmail']?>" autocomplete="on">
						<span class="text text-danger" id="customerEmailerror"></span>
                            <?php
                        }
                        ?>
						
					</div>
						<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label>City</label>
							 <select id="customer_city" class="form-control" required>
                             <option value="">--Select City--</option>
							 <?php
                                 $query="SELECT * FROM cities";
                                 $result=mysqli_query($connection,$query);
                                 while($row=mysqli_fetch_array($result)){
                                      ?>
                                      <option value="<?php echo $row['cities_name']?>"><?php echo $row['cities_name']?></option>
                                      <?php
                                 }
                                 ?>
							 </select>
							 <span class="text text-danger" id="cityErrorMessage"></span>
							</div>
						</div>
						 
					</div>
					<div class="form-group">
						<label>Your full address</label>
						<?php
                        if(isset($_SESSION['userAddress'])){
                            ?>
                             <input type="text" id="customerAddress" name="address_order" class="form-control" placeholder="Your full address" required value="<?php if(isset($_SESSION['userAddress'])) echo $_SESSION['userAddress']?>" autocomplete="on">
						      <span class="text text-danger" id="addressErrorMessage"></span>
                            <?php
                        }
                        else {
                            ?>
                             <input type="text" id="customerAddress" name="address_order" class="form-control" placeholder="Your full address" required value="<?php if(isset($_SESSION['userAddress'])) echo $_SESSION['userAddress']?>" autocomplete="on">
						<span class="text text-danger" id="addressErrorMessage"></span>
                            <?php
                        }
                        ?>
						
					</div>
				 	<hr>
					<div class="row">
						<div class="col-md-6 col-sm-6">
					 	</div>
						<div class="col-md-12 col-sm-12">
<!--
							<div class="form-group">
								<label>Delivery time</label>
								<select class="form-control" name="delivery_schedule_time" id="customerDeliveryTime">
									<option value="" selected>--Select time--</option>
									<option value="11.30am">11.30am</option>
									<option value="11.45am">11.45am</option>
									<option value="12.15am">12.15am</option>
									<option value="12.30am">12.30am</option>
									<option value="12.45am">12.45am</option>
									<option value="01.00pm">01.00pm</option>
									<option value="01.15pm">01.15pm</option>
									<option value="01.30pm">01.30pm</option>
									<option value="01.45pm">01.45pm</option>
									<option value="02.00pm">02.00pm</option>
									<option value="07.00pm">07.00pm</option>
									<option value="07.15pm">07.15pm</option>
									<option value="07.30pm">07.30pm</option>
									<option value="07.45pm">07.45pm</option>
									<option value="08.00pm">08.00pm</option>
									<option value="08.15pm">08.15pm</option>
									<option value="08.30pm">08.30pm</option>
									<option value="08.45pm">08.45pm</option>
								</select>
								 <span class="text text-danger" id="customerDeliveryTimeErrorMessage"></span>
							</div>
-->
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
				
								<label>Notes for the restaurant (optional)</label>
								<textarea class="form-control notesForTheRestaurant" placeholder="Ex. Allergies, cash change..." name="notes" id="customerNotes"></textarea>
				            
						</div>
					</div>
				</div><!-- End box_style_1 -->
			</div><!-- End col-md-6 -->
            
			<div class="col-md-3" id="sidebar">
            
			</div><!-- End col-md-3 -->
            
		</div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->

<!-- Footer ================================================== -->
 <?php require_once('includes/footer.php')?>