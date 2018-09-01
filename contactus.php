<?php require_once('includes/header.php')?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div>
                <h3 class="text text-info">Contact us</h3>
            </div>
            <div id="contactusWrapper">
                <form method='POST' id="contactForm">
                    <div class="form-group">
                        <label for="name">Your name :</label>
                        <input type="text" class="form-control" id="contactusForm" required placeholder="E.g. : Manom sathusan">
                        <span class="text text-danger" id="contactusNameMessage"></span>
                    </div>
                    <div class="form-group">
                        <label for="chooseSubject">Choose your subject  : </label>
                        <select name="suggestion" id="customerSubject" class="form-control" required>
                    <option value="">--Select one--</option>
                    <option value="complain">Customer complain and suggestion</option>
                    <option value="listingwebsite">We would like to list our restaurant</option>
                    <option value="Others">Others</option>
                </select>
                   <span class="text text-danger" id="subjectMessage"></span>
                    </div>
                    <div class="form-group">
                        <label for="emailAddress">Email :</label>
                        <input type="email" class="form-control" id="contactusEmail" required placeholder="E.g. : youremail@gmail.com">
                        <span class="text text-danger" id="contactusEmailMessage"></span>
                    </div>
                    <div class="form-group">
                        <label for="TelephoneNumber">Telephone Number : </label>
                        <input type="tel" name="telehhone" id="contactusTel" class="form-control" required maxlength="10" placeholder="E.g. : 0758953...">
                        <span class="text text-danger" id="contactUsTelErrorMessasge"></span>
                    </div>
                    <div class="form-group">
                        <label for="address">Address :</label>
                        <input type="text" class="form-control" id="contactusAddress" placeholder="E.g. : Kandy veediya....">
                        <span class="text text-danger" id="contactusAddressError"></span>
                    </div>
                    <div class="form-group">
                        <label for="message">Message : </label>
                        <textarea id="contactusMessage" class="form-control" required></textarea>
                        <span class="text text-danger" id="conMessageErrorMes"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-info" value="Send message" id='contactusButton'>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3">

            <div class="box_style_2 hidden-xs info">
                <h4 class="nomargin_top">Delivery time <i class="icon_clock_alt pull-right"></i></h4>
                <p>
                    <b>We love serving you faster than expectation</b><br> We deliver in 2 minutes per kilometer from 20 minutes of order.
                </p>
                <hr>
                <h4>Secure payment <i class="icon_creditcard pull-right"></i></h4>
                <p>
                    You may make the payment on website. It is completely secured
                </p>
            </div>
            <!-- End box_style_1 -->

            <div class="box_style_2 hidden-xs" id="help">
                <i class="icon_lifesaver"></i>
                <h4>Need <span>Help?</span></h4>
                <a href="tel:0717335544" class="phone">0 7621 4 7621
</a>
                <h3>8.00 AM - 11.45PM</h3>
            </div>

        </div>
        <!-- End col-md-3 -->
        <div class="col-md-3">
            <div class="img-wrapper">

                <img src="img/privateImages/adsPart.gif" alt="img-responsive" class="img-responsive"><br/>
            </div>
            <div class="img-wrapper">
             <img src="img/privateImages/adsPart.gif" alt="" class="img-responsive"><br/>
             </div>
        </div>




        <div style="margin-bottom:200px;"></div>
    </div>
</div>
    <?php require_once('includes/footer.php')?>