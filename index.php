<?php require_once('includes/header.php')?>
<!-- SubHeader =============================================== -->
 
   <div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

         <div class="carousel-inner">
            <div class="item active">
                <img src="img/privateImages/deliverymachan_buriyaninew2-min.png" alt="Tempting picture" class="img-responsive">
            </div>
            <div class="item">
                <img src="img/privateImages/deliverymachan_shawaramanew-min.png" alt="Tempting picture" class="img-responsive">
            </div>
            <div class="item">
                <img src="img/privateImages/tastyking_deliverymachanIcon.png" alt="Tempting picture" class="img-responsive">
            </div>
            <div class="item">
                <img src="img/privateImages/delievrymachan_banner6.png" alt="Tempting picture" class="img-responsive">
            </div>

        </div>

         <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
</div>
<!-- End SubHeader ============================================ -->
<!--      Start header text-->
<div class="wrapper"></div>
<div class="col-md-12 adswrapper">
    <h4><span class="text text-muted">Get your favourite food in 2 simple steps </span></h4>
</div>
<!--     End header text-->

 <!-- Content ================================================== -->
 <!-- Restaurant -->
<div class="white_bg">
      <br><br><br>
    <hr>
    <div class="container" id="mainArea"> 
        <div class="row">
            <div class="col-md-12">
            <h3 class="text text-danger text-center"><a href="restaurants.php" class="btn btn-danger yellow-text"><b>CLICK HERE</b></a> to find more restaurants </h3>
              <hr>
               <br/>
                <?php
                 $query="select * from restaurants order by rand() limit 6"; 
                 $result=mysqli_query($connection,$query); 
               
                if($result){
                     while($row=mysqli_fetch_array($result)){
                         ?>
                <div class="col-md-4" class="restaurantBoxModal">
                    <a href="list_page.php?id=<?php echo $row[0]?>&&name=<?php echo $row['restaurant_name']?>" class="strip_list" id="randomRes">
                        <div class="ribbon_1">Popular</div>
                        <div class="desc">
                            <div class="thumb_strip">
                                <img src="img/privateImages/<?php echo $row['restaurant_cuisinePic']?>" alt="<?php echo $row['restaurant_name']?>" class="img-responsive">
                            </div>
                            <div class="rating">
                                <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                            </div>
                            <h5>
                                <?php echo $row['restaurant_name']?>
                            </h5>
                            <div class="type">
                                <?php echo $row['restaurant_type']?>
                            </div>
                               <ul>

                                <li>Delivered by delivery machan<i class="icon_check_alt2 ok"></i></li>
                            </ul>
                        </div>
                        <!-- End desc-->
                    </a>
                    <!-- End strip_list-->
                </div>
                <?php
                     }
                 }
                 ?>
            </div>
           
        </div>
        <!-- End row -->


    </div>
    <!--Container end-->
</div>
<!-- <//Restaurant>-->

<!--        main ads starts-->
<div class="container mainadswrapper">
    <div class="mainads-wrapper">
        <div class="row">
            <div class="col-md-3 mainadsWrapperpadding">
                <a href="list_page.php?id=17&&name=GreenCafé" class="seehow"> <img src="img/privateImages/deliverymachangreencafebanner2.gif" alt="privateImages" class="img-responsive" id="comingSoongPic"></a>
            </div>
            <div class="col-md-3 mainadsWrapperpadding">
                <a href="list_page.php?id=14&&name=RedChillies">
                    <img src="img/privateImages/redChilliesDeliveryMachanAds.png" alt="Ads part" class="img-responsive comingSoon">
                </a>
            </div>
          
            <div class="col-md-3 mainadsWrapperpadding">
            <a href="list_page.php?id=18&&name=TasyKings">
                    <img src="img/privateImages/tastykingkandydeliverymachanAds.png" alt="Ads part" class="img-responsive comingSoon">
                </a>
            </div>
             <div class="col-md-3 mainadsWrapperpadding">
                <a href="list_page.php?id=208&&name=Captains Table">
                    <img src="img/privateImages/dv.png" alt="DevonRestaurant" class="img-responsive comingSoon" id="captainsTablePic">
                </a>
            </div> 
            </div>
            
    </div>
</div>
<!--       main ads ends-->
<div class="container margin_60 deliverdetails">
    <div class="main_title">
        <h2 class="nomargin_top padding0">How it works</h2>
        <p>
            Easy and secure
        </p>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="box_home" id="one">
                <span>1</span>
                <h3>Search by Names</h3>
                <p>
                    Find your favourite restaurant
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box_home" id="two">
                <span>2</span>
                <h3>Choose menu</h3>
                <p>
                    We have <b class="menucount"></b> menus online
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box_home" id="three">
                <span>3</span>
                <h3>Pay by card or cash</h3>
                <p>
                    It's quick, easy and totally secure
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box_home" id="four">
                <span>4</span>
                <h3>Hot Delivery</h3>
                <p>
                    We are on the way fast & hot
                </p>
            </div>
        </div>
    </div>
    <!-- End row -->

    <div id="delivery_time" class="hidden-xs">
        <strong><span>4</span><span>9</span></strong>
        <h4>The minutes that usually takes to deliver!</h4>
    </div>
</div>
<!-- End container -->
<div class="high_light">
    <div class="container-fluid">
        <h3>Choose from over <span class="restaurantCount"></span> Restaurants</h3>
        <p>Choose from best restaurants. deliverymachan will deliver</p>

    </div>
    <!-- End container -->
</div>
<!-- End hight_light -->

<!--    Caraousal starts         -->


<!--  Caraousal ends-->

<!-- End Content =============================================== -->
 

<!-- Footer ================================================== -->
<?php require_once('includes/footer.php')?>

 