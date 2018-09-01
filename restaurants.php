<?php require_once('includes/header.php')?>
<!-- End Header =============================================== -->
 <!-- SubHeader =============================================== -->
<!--

<!-- End section -->
<!-- End SubHeader ============================================ -->
 <div id="position">
    <div class="container">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>Restaurants</li>
            
        </ul>
          <a href="javascript:void(0);" class="search-overlay-menu-btn">
                 <form method="POST" id="restaurantSearchBar">
                <input type="text" id="searchRestaurant" placeholder="Search by name" class="form-control">
            </form>
             </a>
    </div>
</div>

<!-- Position -->

<!-- Content ==================3================================ -->
<div class="container margin_60_35">
    <div class="row">
 
        <div class="col-md-3">
                 <div class="box_style_1 hidden-xs hidden-sm">
                <ul id="cat_nav">
                  <?php
            $query="select restaurant_id,restaurant_name from restaurants";
            $result=mysqli_query($connection,$query);
            while($row=mysqli_fetch_array($result)){
                ?>
                    <li><a href="list_page.php?id=<?php echo $row['']?>&&name='<?php echo $row['restaurant_name']?>'"><?php echo strtoupper($row['restaurant_name'])?></a></li>
<!--                    <span>(141)</span>-->
                 <?php
            }
            ?>
                  </ul>
            </div>
             <div class="box_style_2 hidden-xs" id="help">
                <i class="icon_lifesaver"></i>
                <h4>Need <span>Help?</span></h4>
                <a href="tel:0717335544" class="phone">0 7621 4 7621
</a>
                <h3>8.00 AM - 11.45PM</h3>
            </div>
        </div>
  
        <div class="col-md-6" id="showMenuArea">
        <div class="box_style_2" id="main_menu">
                <h2 class="inner">Restaurants</h2>
                <h3 class="nomargin_top" id="starters">Choose your favourite restaurants</h3>
                 
                <table class="table table-striped cart-list">
                     <tbody>
                       <?php
          
        $takeRestaurant="select restaurant_name,restaurant_id,restaurant_cuisinePic,restaurant_type from restaurants";
                    
                         $tResult=mysqli_query($connection,$takeRestaurant);
                         while($row=mysqli_fetch_array($tResult)){
                                    ?>
                                    <tr>
                           
                            <td class="options">
                           <a href="list_page.php?id=<?php echo $row['restaurant_id']?>&&name='<?php echo $row['restaurant_name']?>'" class="btn btn-success">Select</a> 
                            </td>
                        </tr>
                                    <?php
                             
                         }
                         ?>
                        
                         
                    </tbody>
                </table>
            </div>
      </div>
          <div class="col-md-3" id="sidebars">
            <div class="theiaStickySidebar">
                <div id="cart_boxs">
                    <div class="fb-page" data-href="https://www.facebook.com/deliverymachan/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/deliverymachan/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/deliverymachan/">Deliverymachan.com in kandy</a></blockquote></div>
                </div>
                <!-- End cart_box -->
            </div>
          
            <!-- End theiaStickySidebar -->
        </div>
        <!-- End col-md-3 -->
              <div class="col-md-3" id="cartArea">
              <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/deliverymachan/" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
        </div>
    </div>
    <!-- End row -->
</div>
<!-- End container -->
<!-- End Content =============================================== -->

<!-- Footer ================================================== -->
<?php require_once('includes/footer.php')?>
<script src="js/video_header.js"></script>
<!--
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
-->
