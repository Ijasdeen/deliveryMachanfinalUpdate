<?php require_once('includes/header.php')?>
<!-- End Header =============================================== -->
<!-- End Header =============================================== -->
<!-- SubHeader =============================================== -->
<?php
if(!isset($_SESSION['userId'])){
  echo '<script>window.location.href=error.php=You need a login;"</script>';    
}
?>
    <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/privateImages/ecommerceWebsite.jpeg" data-natural-width="1400" data-natural-height="350">
        <div id="subheader">
            <div id="sub_content">
                <h1>Place your order</h1>
                <div class="bs-wizard">
                    <div class="col-xs-4 bs-wizard-step complete">
                        <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="cart.html" class="bs-wizard-dot"></a>
                    </div>

                    <div class="col-xs-4 bs-wizard-step complete">
                        <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="cart_2.html" class="bs-wizard-dot"></a>
                    </div>

                    <div class="col-xs-4 bs-wizard-step complete">
                        <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <a href="#0" class="bs-wizard-dot"></a>
                    </div>
                </div>
                <!-- End bs-wizard -->
            </div>
            <!-- End sub_content -->
        </div>
        <!-- End subheader -->
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="cart.php">Shopping cart</a></li>
                <li><a href="payment.php">Patyment</a></li>
                <li>Check out</li>
            </ul>

        </div>
    </div>
    <!-- Position -->

    <!-- Content ================================================== -->
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="box_style_2">
                    <h2 class="inner">Order confirmed!</h2>
                    <div id="confirm">
                        <i class="icon_check_alt2"></i>
                        <h3>Thank you!</h3>
                        <p>
                            Thanks for choosing us. We are so glad to have you once again.
                        </p>
                    </div>
                    <h4>Summary</h4>

                    <table class="table table-striped nomargin">
                        <tbody>
                            <?php
                    $total=0; 
                     if(isset($_COOKIE['shopping_cart'])){
             $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true);
         }
         
        else {
             $cart_data=array();
            } 
                    
                    foreach($cart_data as $keys =>$values){
                        
                        ?>
                                <tr>
                                    <td>
                                        <strong><?php echo $values['item_quantity']?>x</strong>
                                        <?php echo $values['foodsName']?>
                                    </td>
                                    <td>
                                        <strong class="pull-right">LKR. <?php echo number_format($values['item_quantity']*$values['price'],2)?></strong>
                                    </td>
                                </tr>
                                <?php
                    $total+=($values['item_quantity']*$values['price']); 
                    
                    }
                    
                    ?>
                                    <tr>
                                     
                                        <td><strong>Delivery Fee</strong></td>
                                        <td><strong class="pull-right">LKR. 200.00</strong></td>
                                    </tr>
                                    <tr>
                                    </tr>
                                    <tr>
                                        <td class="total_confirm">
                                            TOTAL
                                        </td>
                                        <td class="total_confirm">
                                            <span class="pull-right">LKR . <?php echo number_format($total,2)?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <div class="pull-right">
                                            <div class="summerLikebutton">
                                                <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/deliverymachan/" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
                                            </div>
                                        </div>
                                        <div class="text text-info">Date:
                                            <?php echo (date("Y-m-d",time())); ?>
                                        </div>
                                        <div class="text text-warning">Time : <span class="checoutTime"></span></div>
                                        <div class="text text-muted">Name :
                                            <?php if(isset($_SESSION['TemfullName'])){echo $_SESSION['TemfullName'];}?>
                                        </div> <br/>
                                        <div class="text text-danger">Address :
                                            <?php if(isset($_SESSION['temAddress'])) echo $_SESSION['temAddress']?>
                                            <br/> Contact number :
                                            <?php if(isset($_SESSION['temContactNumber'])) echo '0'.$_SESSION['temContactNumber']?>

                                        </div>

                                    </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
    <!-- End Content =============================================== -->

    <!-- Footer ================================================== -->

    <?php require_once('includes/footer.php')?>


<!--
    <script>
        $(document).ready(function() {
                
            $.ajax({
            url:'sendConfirmationMail.php',
            method:'POST',
            data:{enableEmail:1},
            success:function(data){
                console.log(data);
            },
            error:function(err){
                console.log(err);
            }
        });
     
            $.ajax({
                url: 'action.php',
                method: 'POST',
                data: {
                    disableCookies: 1
                },
                success: function(data) {
                    console.log(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });
    </script>
    -->
