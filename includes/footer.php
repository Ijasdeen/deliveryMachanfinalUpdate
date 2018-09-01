<!-- Footer ================================================== -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3">
                <h3>Secure payments with</h3>
                <p>
                    <img src="img/cards.png" alt="Cards" class="img-responsive">
                </p>
                <p>
                    <img src="img/privateImages/deliverymachanMobileAppsComingSoon.png" alt="MobileAppSoon" class="img-responsive" id="mobileAppSoon">
                </p>
                <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/deliverymachan/" data-layout="box_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2Fdeliverymachan.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

                <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/deliverymachan/" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
            </div>
            <p>

            </p>
            <div class="col-md-3 col-sm-3">
                <h3>About</h3>
                <ul>
                    <li><a href="aboutus.php">About us</a></li>
                    <li><a href="#">Faq</a></li>
                    <li><a href="contactus.php">Contacts</a></li>
                    <li><a href="#loginModal" data-toggle="modal" data-target="#login_2">Login</a></li>
                    <li><a href="#register" data-toggle="modal" data-target="#register">Register</a></li>
                    <li><a href="termsandcondition.php">Terms and conditions</a></li>
                    <li><a href="privacypolicy.php">Privacy and Policy</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4" id="newsletter">
                <h3>Newsletter</h3>
                <p>
                    Join our newsletter to keep be informed about offers and news.
                </p>
                <div id="message-newsletter_2">
                </div>
                <div class="subWrapper">
                    <form method="post" id="subscribeEmail">
                        <div class="form-group">
                            <input name="email_newsletter_2" id="subEmail" type="email" value="" placeholder="Your mail" class="form-control" required>
                            <span class="text text-danger subEmailMessage"></span>
                        </div>
                        <input type="submit" value="Subscribe" class="btn_1" id="submit-newsletter_2">
                    </form>
                </div>
            </div>

        </div>
        <!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="https://www.facebook.com/deliverymachan/"><i class="icon-facebook"></i></a></li>
                        <li><a href="https://twitter.com/deliverymachan"><i class="icon-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/101014790574983432021"><i class="icon-google"></i></a></li>

                        <li><a href="https://www.youtube.com/channel/UC-uipa_iUdqX52WoBUCeCEg"><i class="icon-youtube-play"></i></a></li>
                    </ul>
                    <p>
                        © Delivery Machan 2018
                    </p>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</footer>
<!-- End Footer =============================================== -->

<div class="layer"></div>
<!-- Mobile menu overlay mask -->

<!-- Login modal -->
<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <form class="popup-form" id="userLogin" autocomplete="off">
                <div class="login_icon"><i class="icon_lock_alt"></i></div>
                <div class="form-group">
                    <input type="email" class="form-control form-white" placeholder="Your email address" id="emailAddress" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-white" id="loginPassword" placeholder="Password" required autocomplete="off">
                    <span class="text text-danger loginMessage"></span>
                </div>

<!--
              <div class="text-left">
                    <a data-dismiss='modal' href="#forgotPasswordModal" data-toggle='modal'>Forgot Password?</a>
                </div>
-->

                <button type="submit" class="btn btn-submit">Submit</button>
                <div class="form-group">
                </div>
            </form>

        </div>
    </div>
</div>
<!-- End modal -->

 

<!--ForGotPassword Modal-->
<div class="modal fade" id="forgotPasswordModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="text text-info">Forgot password info</h3>
            </div>
            <div class="modal-body">
                <div class="forgotPasswordWrapper">
                    <form method="POST" id="forGotPasswordSection">
                    <div class="form-group">
                        <label for="name">First name :</label>
                        <input type="text" class="form-control" id="forgotName" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email : </label>
                     <input type="email" class="form-control" id="forgotEmail" required>
                    </div>
                    <div class="form-group">
            <label for="mobileNumber">Mobile number :</label>
                   <input type="tel" class="form-control" id="forgotMobileNumber" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-success" value="Reset password">
                    </div>
                </form>
                </div>
                
            </div>
            <div class="modal-footer">
                <h3 class="messageTagForModal"></h3>
            </div>
        </div>
    </div>
</div>
<!--EndForGotPassword modal-->




<!-- Register modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <form action="#" class="popup-form" id="userReg" method="POST" autocomplete="off">
                <div class="form-group">
                    <div class="login_icon"><i class="icon_lock_alt"></i></div>
                    <input type="text" class="form-control form-white" placeholder="First Name" required id="regFirstName">
                    <span class="text text-danger" id="regNameMesssage"></span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-white" placeholder="Last Name" required id="regLastName" value="">
                    <span class="text text-danger" id="regLastNameError"></span>
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control form-white" placeholder="Mobile number" required id="regMobNumber">
                    <span class="text text-danger" id="regMobNumberMessage"></span>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-white" placeholder="Email" required id="regEmail" value="">
                    <span class="text text-danger" id="regEmailError"></span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-white" placeholder="Your permanat address" id="regPermanantAddress" required>
                    <span class="text text-danger" id="regPermanantAddressMessage"></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-white" placeholder="Password" id="regPassword" required autocomplete="off">
                    <span class="regPasswordMessage text text-danger"></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-white" placeholder="Confirm password" id="regConfirmPassword" required autocomplete="off">
                    <span class="text text-danger" id="regConfirmPasswordMessage"></span>
                </div>
                <div class="form-group">
                    <label><input type="checkbox" id="termconCheck"> <b>I agree with</b> <a href="#termsAndCondtion" data-toggle='modal'>Terms & condition</a></label><br/>
                    <span class="text text-danger" id="checkboxMessag"></span>
                </div>
                <div id="pass-info" class="clearfix"></div>

                <!--
                <div class="checkbox-holder text-left">
                    <div class="checkbox">
                        <input type="checkbox" value="accept_2" id="check_2" name="check_2" />
                        <label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                    </div>
                </div>
-->
                <button type="submit" class="btn btn-submit">Register</button>
            </form>
        </div>
    </div>
</div>
<!-- End Register modal -->


<!--Start message modal-->
<div class="modal fade" id="messageModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"></div>
            <div class="modal-body">
                <h3>Registered successfully.<a href="javascript:void();" data-toggle='modal' data-target='#login_2' data-dismiss='modal' class="btn btn-link">Login now</a></h3>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!--End message modal-->


<!--Start message modal-->
<div class="modal fade" id="LocationErrorMesaage" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"></div>
            <div class="modal-body">
                <div id="messageTag">
                    <h3>Please enable your location for us to find you accurately. </h3>
                    <div class="locationMessage">
                        <a href="http://www.tech-recipes.com/rx/63854/how-to-enable-location-services-on-google-chrome/" target="_blank" class="btn btn-link">HOW TO ENABLE LOCATION IN CHROME</a>
                        <br>
                        <a href="https://support.mozilla.org/en-US/kb/permissions-manager-give-ability-store-passwords-set-cookies-more?redirectlocale=en-US&redirectslug=how-do-i-manage-website-permissions" target="_blank" class="btn btn-link">HOW TO ENABLE LOCATION IN FIREFOX</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!--End message modal-->

<!--start check login modal-->
<div class="modal fade" id="checkLoginMessage" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"></div>
            <div class="modal-body">
                Please login to confirm your order. <a href="javascript:void();" data-toggle='modal' data-target='#login_2' data-dismiss='modal' class="btn btn-link">Login now</a>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!--end check login modal-->

<!--Start change password message modal-->
<div class="modal fade" id="changePasswordModalMessage">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="text text-info">Password changed successfully</h3>
            </div>
            <div class="modal-footer">
                <button class="btn btn-info" data-dismiss='modal' data-toggle='modal'>OK</button>
            </div>
        </div>

    </div>
</div>
<!--End change password message modal-->

<!--start change password modal-->
<div class="modal fade" id="changePassword" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <div class="moda-body">
                <div class="changepassword-wrapper">
                    <form method="POST" id="changePasswordForm" autocomplete="off">
                        <div class="form-group">
                            <input type="password" id="oldPassword" class="form-control" required placeholder="Old password" autocomplete="off">
                            <span class="text text-danger oldpasswordMessage"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" id="newPassword" class="form-control" required placeholder="New password" autocomplete="off">
                            <span class="text text-danger newPasswordMessage"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" id="confirmPassword" class="form-control" required placeholder="Confirm Password" autocomplete="off">
                            <span class="text text-danger confirmPasswordMessage"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-success" value="Change password">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!--end change password modal-->
<div class="modal fade" id="varificationCode">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="text text-danger">
                    Varify your Email
                </h3>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="col-xs-12 col-md-4 col-lg-4">
                        <div class="input-group">
                            <span class="input-group-addon">F1G1</span>
                            <input type="text" class="form-control" placeholder="Enter your varfication code here" id="emailVarificationCode">
                        </div>
                        <span class="text text-danger" id="message"></span>
                    </div>

                    <button class="btn btn-primary" id="varifyMe">Varify me</button>

                </div>

            </div>
            <div class="modal-footer">
                <span class="text text-danger"><strong>NOTE : If you don't find varification Email, Please have a look at your spam folder.</strong></span>
            </div>
        </div>
    </div>
</div>

<!--Message modal-->
<div class="modal fade" id="generalMessageModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"></div>
            <div class="modal-body">
                <div id="generalMessageModalText"></div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!--Message modal ends-->

<!--New password section-->
<div class="modal fade" id="newPasswordModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="text text-danger">Resetting password</h3>
            </div>
            <div class="modal-body">
                <form method="POST" id="resetPasswordSection">
                     <div class="form-group">
                         <input type="text" placeholder="Enter the reset code" id="resetCode" required class="form-control">
                     </div>
                     <div class="form-group">
                      <input type="password" name="text" id="resettingNEwPassword" required class="form-control" placeholder="Enter your new password">
                      <span class="text text-danger" id="passwordFormMessage"></span>
                    </div>
                   
                   
                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-info" value="Reset password" id="resetPasswordbutton">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <span class="text text-info">Your resetting code has been sent to your email address</span>
            </div>
        </div>
    </div>
</div>
<!--End new passowrd section-->



<!--Start shopping cart modal-->
<!--        Fetch data modal-->
<div class="modal fade" id="showOrder">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ordermodal">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="text text-center">Ordered foods</h3>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="orderDetails"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!--End shopping cart modal-->

<!--Start terms and condtion-->
<div class="modal fade" id="termsAndCondtion">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss='modal'>&times;</button>
                <h3>Terms & Condition</h3>
            </div>
            <div class="modal-body">
                <div class="padding-area">
                    <h3 class="text text-danger">
                        Dear valuable user’s
                    </h3>
                    <div class="paragraph-condition">
                        <p>Please read the terms and conditions ("Terms and Conditions") below carefully before ordering any Goods or Services from deliverymachan.com. By ordering any Goods or Services deliverymachan.com by phone, or by our mobile applications, you agree to be bound to the Terms and Conditions of the deleverymachan.com venture.</p>

                        <ul>
                            <li>Section 1: Introduction we are deliverymachan.com, a brand of <a href="https://www.deleverymachan.com">https://deliverymachan.com/</a>, unless otherwise stated.</li>
                            <li>Section 2:</li>
                        </ul>
                        <div class="termsAndCondition">
                            <ul>
                                <li><b>2.1</b> "Agreement" is a reference to these Terms and Conditions, the Privacy Policy, any order form and payment instructions provided to you;</li>
                                <li><b>2.2</b> "Privacy Policy" means the policy displayed on our Website which details how we collect and store your personal data;</li>
                                <li><b>2.3</b> "you", "your" and "yours" “whoever it may concern” are references to you the person accessing deliverymachan.com and ordering any Goods or Services from deliverymachan.com or from any other channel provided by deliverymachan.com;</li>
                                <li><b>2.4</b> "we", "us", "our", and " deliverymachan.com " are references to the Company;</li>
                                <li><b>2.5</b> "Goods" is a reference to any goods which we may offer for sale from deliverymachan.com from time to time;</li>
                                <li><b>2.6</b> "Service" or "Services" is a reference to any service which we may supply and which you may request via deliverymachan.com;</li>
                                <li><b>2.7</b> "Participating Restaurant" is a third party, which has agreed to co-operate with the Company to prepare and/or deliver the Goods or Services.</li>
                                <li><b>2.8</b> "Food Delivery" is a reference to perishable goods and to any form of delivery service, which both are provided by our Participating Restaurants and for both of which our Participating Restaurants take full responsibility.</li>
                                <li><b>2.9</b> "deliverymachan.com " is a reference to our Website http://www.deliverymachan.com or our mobile applications on which we offer our Goods or Services</li>
                            </ul>
                        </div>
                        <ul>
                            <li>Section 3: Ordering</li>
                        </ul>
                        <div class="termsAndCondition">
                            <ul>
                                <li><b>3.1</b> Any contract for the supply of Food Delivery from this Website is between you and the Participating Restaurant; for the supply of Goods or Services from this Website any contact is between you and deliverymachan.com You agree to take particular care when providing us with your details and warrant that these details are accurate and complete at the time of ordering. You also warrant that the credit or debit card details that you provide are for your own credit or debit card and that you have sufficient funds to make the payment. No concern person from deliverymachan.com will or have rights to ask “you” ”your” credit/debit card details at any time. In such kind of issue deliverymachan.com will not be responsible.</li>
                                <li><b>3.2</b> Food Delivery, Goods and Services purchased from this Website are intended for your use only and you warrant that any Goods purchased by you are not for resale and that you are acting as principal only and not as agent for another party when receiving the Services.</li>
                                <li><b>3.3</b> Please note that some of our Goods may be suitable for certain age ranges only. You should check that the product you are ordering is suitable for the intended recipient.</li>
                                <li><b>3.4</b> When ordering from this Website you may be required to provide an e-mail address and password. You must ensure that you keep the combination of these details secure and do not provide this information to a third party.</li>
                                <li><b>3.5</b> We will take all reasonable care, in so far as it is in our power to do so, to keep the details of your order and payment secure, but in the absence of negligence on our part we cannot be held liable for any loss you may suffer if a third party procures unauthorized access to any data you provide when accessing or ordering from the Website</li>
                                <li>
                                    <b>3.6</b> Any order that you place with us is subject to product availability, delivery capacity and acceptance by us and the Participating Restaurant. When you place your order online, we will send you an email to confirm that we have received it. This email confirmation will be produced automatically so that you have confirmation of your order details. You must inform us immediately if any details are incorrect. The fact that you receive an automatic confirmation does not necessarily mean that either we or the Participating Restaurant will be able to fill your order. Once we have sent the confirmation email we will check availability and delivery capacity.
                                </li>
                                <li><b>3.7</b> If the ordered Food Delivery and delivery capacity is available, the Participating Restaurant will accept the contract and confirm it to deliverymachan.com. If the details of the order are correct, the contract for the Food Delivery, Goods or Services will be confirmed by text message (SMS), call or conformation email</li>
                                <li><b>3.8</b> In the case that Goods offered by deliverymachan.com were ordered, deliverymachan.com will confirm availability together with or separately from Food Delivery.</li>
                                <li><b>3.9</b> The confirmation message will specify delivery details including the approximate delivery time specified by the Participating Restaurant and confirm the price of the Food Delivery, Goods and Services ordered.</li>
                                <li><b>3.10</b>If the Food Delivery and/or Goods are not available or if there is no delivery capacity, we will also let you know by text message (SMS) or phone call.</li>
                            </ul>
                        </div>
                        <ul>
                            <li>Section 4 : Prices and payment</li>
                        </ul>
                        <div class="termsAndCondition">
                            <ul>
                                <li><b>4.1</b> Any contract for the supply of Food Delivery from this Website is between you and the Participating Restaurant; for the supply of Goods or Services from this Website any contact is between you and deliverymachan.com You agree to take particular care when providing us with your details and warrant that these details are accurate and complete at the time of ordering. You also warrant that the credit or debit.card details that you provide are for your own credit or debit card and that you have sufficient funds to make the payment. </li>
                                <li><b>4.2</b> All prices listed on the Website are correct at the time of publication and have been input as received by the restaurant; While we give great care to keep them up to date, the final price charged to you by the restaurant can change at the time of delivery based on the latest menu and prices of the restaurant. We also reserve the right to alter the Goods or Services available for sale on the Website and to stop listing restaurants, Goods or Services.</li>
                                <li><b>4.3</b> All prices listed on the Website for Food Delivery by the Participating Restaurant reflect the price the Participating Restaurant charges at the time of listing. In case the price listed is not current and the restaurant informs us immediately after placing the order, we will put our best effort to contact you to inform you about the price difference and you can choose to opt-out of the order at that time.</li>
                                <li><b>4.4</b> All prices for delivery by deliverymachan.com or a third party provider assigned by deliverymachan.com listed on the Website are correct at the time of publication, however, we reserve the right to alter these in the future</li>
                                <li><b>4.5</b> The total price for Food Delivery, Goods or Services ordered, including delivery charges and other charges, will be displayed on the Website when you place your order. Full payment must be made for all Goods dispatched and Services provided. Payment has to be made in cash or, if available on the website, by online payment, e.g. credit or debit card.</li>
                                <li><b>4.6</b> If you choose online payment, you must pay for your order before it is delivered. To ensure that shopping online is secure, your debit/credit card details will be encrypted to prevent the possibility of someone being able to read them as they are sent over the internet. Your credit card company may also conduct security checks to confirm it is you placing the order</li>
                                <li><b>4.7</b> The prices reflected on the website/mobile application/email are determined solely by the Participating Restaurant and informed to deliverymachan.com at the time of listing or afterwards. Any change in the prices of menu at the time of placing order is at the sole discretion of the Participating restaurant.</li>
                                <li><b>4.8</b>All applicable taxes and levies, the rates thereof and the manner of applicability of such taxes are being charged and determined by the Participating Restaurant and deliverymachan.com is merely collecting the same on behalf of such Participating Restaurant.</li>
                                <li><b>4.9</b>The entire amount of applicable taxes collected by deliverymachan.com is directly remitted as it is to Participating Restaurants and deliverymachan.com does not retain any amounts thereof</li>
                                <li><b>4.10</b>Deliverymachan.com is not responsible for validating the legal sanctity of the applicable taxes and the manner of its applicability on behalf of the Participating Restaurant. Deliverymachan.com holds no responsibility for the legal correctness/validity of the levy of such taxes. The sole responsibility for any legal issue arising on the taxes shall reside with the Participating Restaurant.</li>
                                <li><b>4.11</b>The prices reflected on the website/mobile application are determined solely by the Participating Restaurant and informed to deliverymachan.com at the time of listing. Any change in the prices of menu at the time of placing order is at the sole discretion of the Participating restaurant</li>
                                <li><b>4.12</b>The transaction of sale of food or food items is between Participating Restaurant and the customer, and accordingly, deliverymachan.com is not liable to charge or deposit any taxes applicable on such transaction</li>
                                <li><b>4.13</b>The final tax invoice will be issued by the Participating Restaurant and delivered to the customer along with the orde</li>
                            </ul>
                        </div>
                        <ul>
                            <li>Section 5: Delivery</li>
                        </ul>
                        <div class="termsAndCondition">
                            <ul>
                                <li><b>5.1</b>. Delivery periods quoted at the time of ordering are approximate only and may vary. Goods will be delivered to the address designated by you at the time of ordering.</li>
                                <li><b>5.2</b>If delivery is done by the Participating Restaurant, it is the Participating Restaurants sole responsibility to provide Food Delivery in a timely manner.</li>
                                <li><b>5.3</b>In the case delivery is done by deliverymachan.com .we will give great care to deliver in a timely manner. No responsibility is taken for late delivery by deliverymachan.com in either case.</li>
                                <li><b>5.4</b>All orders are delivered by a reputable courier. We and the Participating Restaurant will make every effort to deliver within the time stated; however, we will not be liable for any loss caused to you by ordering late. If the Goods are not delivered within the estimated delivery time quoted by us, please contact the participating restaurant first. You may also contact us by telephone or email and we will try to ensure that you receive your order as quickly as possible.</li>
                                <li><b>5.5</b>In case of a late delivery, the delivery charge will neither be voided nor refunded by deliverymachan.com.</li>
                                <li><b>5.6</b>All risk in the Goods and the Food Delivery shall pass to you upon delivery.</li>
                                <li><b>5.7</b> If you fail to accept delivery of Food Delivery and/or Goods at the time they are ready for delivery, or we are unable to deliver at the nominated time due to your failure to provide appropriate instructions, or authorizations, then such goods shall be deemed to have been delivered to you and all risk and responsibility in relation to such goods shall pass to you. Any storage, insurance and other costs which we incur as a result of the inability to deliver shall be your responsibility and you shall indemnify us in full for such cost.</li>
                                <li>
                                    <b>5.8</b> You must ensure that at the time of delivery of Food Delivery and/or Goods adequate arrangements, including access where necessary, are in place for the safe delivery of such goods. We cannot be held liable for any damage, cost or expense incurred to such goods or premises where this arises as a result of a failure to provide adequate access or arrangements for delivery.
                                </li>
                                <li><b>5.9</b> Participating restaurants, who will prepare your order, aim</li>
                                <div class="inner-sub-content">
                                    <ul>
                                        <li><b>5.9.1</b> to deliver the product to you at the place of delivery requested by you in your order;</li>
                                        <li><b>5.9.2</b>to deliver within the time confirmed by the restaurant;</li>
                                        <li><b>5.9.3</b>&nbsp;to inform you if they expect that they are unable to meet the estimated delivery time.</li>
                                    </ul>
                                    <br/>
                                </div>
                                <li><b>5.10</b> Participating Restaurants and we shall not be liable to you for any losses, liabilities, costs, damages, charges or expenses arising out of late delivery;</li>
                                <li><b>5.11</b> Please note that it might not be possible for Participating Restaurants to deliver to some locations. If this is the case, our Participating Restaurants or we will inform you using the contact details that you provide to us when you make your order and arrange for cancellation of the order or delivery to an alternative delivery address;</li>

                            </ul>
                        </div>
                        <ul>
                            <li>Section 6: Cancellation</li>
                        </ul>
                        <div class="termsAndCondition">
                            <ul>
                                <li><b>6.1</b> You must notify the participating restaurant immediately if you decide to cancel your order, preferably by phone, and quote your order number. If the restaurant accepts your cancellation, no cancellation fee applies. If the restaurant refuses cancellation, e.g. because preparation of Food Delivery has been completed and/or delivery personnel has already been dispatched, it may not be cancelled. We will not be able to refund any order, which has been already dispatched</li>
                                <li><b>6.2</b> We may cancel a contract if the product is not available for any reason. We will notify you if this is the case and return any payment that you have made;</li>
                                <li><b>6.3</b> If the cancellation was made in time and once the restaurant has accepted your cancellation, we will refund or re-credit your debit or credit card with the full amount within 14 days, which includes the initial delivery charge (where applicable) which you paid for the delivery of the Goods or the Services, as applicable.</li>
                                <li><b>6.4</b> In the unlikely event that the Participating Restaurant delivers a wrong item, you have the right to reject the delivery of the wrong item and you shall be fully refunded for the missing item. If the Participating Restaurant can only do a partial delivery (a few items might be not available), its staff should inform you or propose a replacement for missing items. You have the right to refuse a partial order before delivery and get a refund. We are not responsible for wrong or partial delivery. The issue has to be settled directly with the Participating Restaurant.</li>

                            </ul>
                        </div>
                        <ul>
                            <li>Section 7 : Information</li>
                        </ul>
                        <div class="termsAndCondition">
                            <ul>
                                <li><b>7.1</b> Where we have requested information from you to provide Food Delivery, Goods or Services you agree to provide us with accurate and complete information.</li>
                                <li><b>7.2</b> You authorize us to use, store or otherwise process your personal information in order to provide the Food Delivery, Goods or Services to you and for marketing and credit control purposes (the "Purpose"). The Purpose may include the disclosure of your personal information to selected third parties from time to time where we believe that the services offered by such third parties may be of interest to you or where this is required by law or in order to provide the Food Delivery, Goods or Service to you. More information can be found in our Privacy Policy.</li>
                                <li><b>7.3</b> You are entitled to request a copy of the personal information we hold on you. Please contact us if you wish to request this information</li>
                            </ul>
                        </div>
                        <ul>
                            <li>Section 8: Linked Sites There may be a number of links on our Website to third party Websites which we believe may be of interest to you. We do not represent the quality of the Goods or Services provided by such third parties nor do we have any control over the content or availability of such sites. We cannot accept any responsibility for the content of third party Websites or the Services or Goods that they may provide to you.</li>
                            <li>Section 9 : Complaints We take complaints very seriously and aim to respond to your complaints within 5 business days. All complaints should be addressed to info@deliverymachan.com</li>
                            <li>Section 10 : Limitation of Liability</li>
                        </ul>
                        <div class="termsAndCondition">
                            <ul>
                                <li><b>10.1</b> Great care has been taken to ensure that the information available on this Website is correct and error free. We apologize for any errors or omissions that may have occurred. We cannot warrant that use of the Website will be error free or fit for purpose, timely, that defects will be corrected, or that the site or the server that makes it available are free of viruses or bugs or represents the full functionality, accuracy, reliability of the Website and we do not make any warranty whatsoever, whether express or implied, relating to fitness for purpose, or accuracy.</li>
                                <li><b>10.2</b> By accepting these terms of use you agree to relieve us from any liability whatsoever arising from your use of information from any third party, or your use of any third party website, or your consumption of any food or beverages from a Participating Restaurant.</li>
                                <li><b>10.3</b> We disclaim any and all liability to you for the supply of the Food Delivery, Goods and Services to the fullest extent permissible under applicable law. This does not affect your statutory rights as a consumer. If we are found liable for any loss or damage to you such liability is limited to the amount you have paid for the relevant Goods or Services. We cannot accept any liability for any loss, damage or expense, including any direct or indirect loss such as loss of profits to you, howsoever arising. This limitation of liability does not apply to personal injury or death arising as a direct result of our negligence.</li>
                                <li><b>10.4</b> We do not accept any liability for any delays, failures, errors or omissions or loss of transmitted information, viruses or other contamination or destructive properties transmitted to you or your computer system via our Website.</li>
                                <li><b>10.5</b> We shall not be held liable for any failure or delay in performing Services or delivering Goods where such failure arises as a result of any act or omission, which is outside our reasonable control such as all overwhelming and unpreventable events caused directly and exclusively by forces of nature that can be neither anticipated, nor controlled, nor prevented by the exercise of prudence, diligence, and care, including but not limited to: war, riot, civil commotion; compliance with any law or governmental order, rule, regulation or direction and acts of third parties</li>
                                <li><b>10.6</b> If we have contracted to provide identical or similar order to more than one Customer and are prevented from fully meeting our obligations to you by reason of an Event of Force Majeure, we may decide at our absolute discretion which orders we will fill and to what extent.</li>
                                <li><b>10.7</b> The products sold by us are provided for private domestic and consumer use only. Accordingly, we do not accept liability for any indirect loss, consequential loss, loss of data, loss of income or profit, loss of damage to property and/or loss from claims of third parties arising out of the use of the Website or for any products or services purchased from us.</li>
                                <li><b>10.8</b> We have taken all reasonable steps to prevent Internet fraud and ensure any data collected from you is stored as securely and safely as possible. However, we cannot be held liable in the extremely unlikely event of a breach in our secure computer servers or those of third parties.</li>
                                <li><b>10.9</b> In the event deliverymachan.com has a reasonable belief that there exists an abuse of vouchers and/or discount codes or in suspected instances of fraud, deliverymachan.com may cause the shopper (or customer) to be blocked immediately and reserves the right to refuse future service. Additionally, should there exist an abuse of vouchers or discount codes, deliverymachan.com reserves the right to seek compensation from any and all violators.</li>
                                <li><b>10.10</b> Offers are subject to deliverymachan.com’s discretion and may be withdrawn at any time and without notice.</li>
                            </ul>
                        </div>
                        <ul>
                            <li>Section 11: General</li>
                        </ul>
                        <div class="termsAndCondition">
                            <ul>
                                <li><b>11.1</b> All prices are in Srilankan's rupees. GST could be included where indicated</li>
                                <li><b>11.2</b> We may subcontract any part or parts of the Services or Goods that we provide to you from time to time and we may assign or novate any part or parts of our rights under these Terms and Conditions without your consent or any requirement to notify you.</li>
                                <li><b>11.3</b> We may alter or vary the Terms and Conditions at any time without notice to you</li>
                                <li><b>11.4</b> Payment must be made either at the time of ordering the Food Delivery, Goods or Services from us by credit card or at the time of delivery by cash. Failure to pay on time will result in the cancellation of your order.</li>
                                <li><b>11.5</b> Do not use or launch any automated system or program in connection with our website or its online ordering functionality.</li>
                                <li><b>11.6</b> Do not collect or harvest any personally identifiable information from the website, use communication systems provided by the website for any commercial solicitation purposes, solicit for any reason whatsoever any users of the website with respect to their submissions to the website, or publish or distribute any vouchers or codes in connection with the website, or scrape or hack the website.</li>
                                <li><b>11.7</b> The Terms and Conditions together with the Privacy Policy, any order form and payment instructions constitute the entire agreement between you and us. No other terms whether expressed or implied shall form part of this Agreement. In the event of any conflict between these Terms and Conditions and any other term or provision on the Website, these Terms and Conditions shall prevail.</li>
                                <li><b>11.8</b> If any term or condition of our Agreement shall be deemed invalid, illegal or unenforceable, the parties hereby agree that such term or condition shall be deemed to be deleted and the remainder of the Agreement shall continue in force without such term or condition.</li>
                                <li><b>11.9</b> These Terms and Conditions and our Agreement shall be governed by and construed in accordance </li>
                                <li><b>11.10</b> No delay or failure on our part to enforce our rights or remedies under the Agreement shall constitute a waiver on our part of such rights or remedies unless such waiver is confirmed in writing.</li>
                                <li><b>11.11</b> Customers placing order with deliverymachan.com are liable of receiving promotional SMS, irrespective of their number being registered under SLTRC. If customer wish to not receive promotional SMS, they may contact us on customercare@deliverymachan.com</li>
                                <li><b>11.12</b> . These Terms and Conditions and a contract (and all non-contractual obligations arising out of or connected to them) shall be governed and construed in accordance with Sri Lanka Laws. Both we and you hereby submit to the non-exclusive jurisdiction of the Sri Lanka Courts. All dealings, correspondence and contacts between us shall be made or conducted in the English language.</li>
                                <li><b>11.13</b> The voucher calculation is subject to deliverymachan.com discretion and may be altered at any time and without notice. The voucher can discount any/all of the components including food cost, taxes and fees and likewise.</li>
                                <li><b>11.14</b> Any Service Fee/Delivery Fee charged by deliverymachan.com is subject to prevailing GST Rates.</li>
                                <li><b>11.15</b> . Rates under the GST regime has recently been notified. The restaurants are currently examining the taxability of their supplies. Deliverymachan.com hence, does not bear any responsibility on the taxes charged by the restaurant in the interim period.</li>
                            </ul>
                        </div>


                    </div>
                    <!--         Pragraph condition-->
                </div>
            </div>
            <div class="modal-footer">
                <h3>Footer section</h3>
            </div>
        </div>
    </div>
</div>
<!--End terms and condtion-->



<!-- COMMON SCRIPTS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>

<script src="js/main.js"></script>
<!-- SPECIFIC SCRIPTS -->

<!-- Modernizr -->
<script src="js/modernizr.js"></script>

<!--<script src="js/geolocation.js"></script>-->

<!-- SPECIFIC SCRIPTS -->
<script src="js/cat_nav_mobile.js"></script>
<script>
    $('#cat_nav').mobileMenu();
</script>

<script src="js/map.js"></script>
<!--<script src="js/infobox.js"></script>-->

<!--Geo location script-->
<script src="js/jquery.geolocation.js"></script>
<script src="js/mapfunction.js"></script>

<!--End geo location script-->


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwJ2Vepe9L2Miuh7QH87SR_RItIXHlX6Q&libraries=places"></script>
<!-- SPECIFIC SCRIPTS -->
<script src="js/theia-sticky-sidebar.js"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
        additionalMarginTop: 80
    });
</script>

<!-- WhatsHelp.io widget -->
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function() {
        var options = {
            whatsapp: "+94762147621", // WhatsApp number
            call_to_action: "Whats app", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol,
            host = "whatshelp.io",
            url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
<!-- /WhatsHelp.io widget -->
<!--<button class="eb" id="eb"></button>-->
</body>

</html>