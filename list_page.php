 <?php
 require_once('includes/header.php');
$id=(int)mysqli_real_escape_string($connection,$_GET['id']);
 if(!isset($id)){
     header("location:index.php");
 }
$_SESSION['id']=$id;
 require_once('validateData.php');
?>
     <?php
    $query="select * from restaurants where restaurant_id='$id'";
    $result=mysqli_query($connection,$query); 
    if($result){
        while($row=mysqli_fetch_array($result)){
            ?>
                 <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/privateImages/<?php echo $row['restaurant_bannerPic']?>" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
	<div id="sub_content">
    	<h1 class="restaurantName"><?php echo $row['restaurant_name']?></h1>
        <div><i class="icon_pin restaurantName"></i><?php echo $row['restaurant_location']?></div>
    </div>
  
    </div>    
</section>
            <?php
        }
    }
    ?>
        
   <!-- End SubHeader ============================================ -->
     <div id="position">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="javascript:void();">Restaurants</a></li>
                <li>
                    <?php
                    $name=mysqli_real_escape_string($connection,validateData($_GET['name']));
                    echo $name; 
                    ?>
                    
                </li>
            </ul> 
             <a href="javascript:void(0);" class="search-overlay-menu-btn">
                 <form method="POST" id="searchBar">
                <input type="text" id="searchText" placeholder="Search by name" class="form-control">
            </form>
             </a>
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
                
		 
		
		
<!--
 			<div id="filters_col">
				<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters <i class="icon-plus-1 pull-right"></i></a>
				<div class="collapse" id="collapseFilters">
					<div class="filter_type">
                      	<h6>Type</h6>
						<ul>
							<li><label><input type="checkbox" checked class="icheck">All <small>(0)</small></label></li>
							<li><label><input type="checkbox" class="icheck">Indian <small>(0)</small></label><i class="color_1"></i></li>
							<li><label><input type="checkbox" class="icheck">Chinese <small>(0)</small></label><i class="color_2"></i></li>
							<li><label><input type="checkbox" class="icheck">Hamburger <small>(0)</small></label><i class="color_3"></i></li>
							<li><label><input type="checkbox" class="icheck">Srilankan <small>(0)</small></label><i class="color_4"></i></li>
							<li><label><input type="checkbox" class="icheck">Vegetarian <small>(0)</small></label><i class="color_5"></i></li>
							<li><label><input type="checkbox" class="icheck">Pizza <small>(0)</small></label><i class="color_6"></i></li>
							<li><label><input type="checkbox" class="icheck">Grill <small>(0)</small></label><i class="color_7"></i></li>
						</ul>
					</div>
 
					 
				</div>			</div> 
-->
		</div><!--End col-md -->
        
		<div class="col-md-9">
        
        <div id="tools">
				<div class="row">
				<?php
                    if(isset($_SESSION['id'])){
                        ?>
                        <div class="col-md-3 col-sm-3 col-xs-6">
						<div class="styled-select">
							<select name="sort_rating" id="sort_rating" restaurantId="<?php echo $id?>">
								<option value="all" selected restaurantId="<?php echo $id?>">ALL</option>
								<option value="lowtoHigh" restaurantId="<?php echo $_SESSION['id']?>">Price,Low to High</option>
								<option value="hightoLow" restaurantId="<?php echo $_SESSION['id']?>">Price High to Low</option>
								<option value="AZ" restaurantId="<?php echo $_SESSION['id']?>">Alphabetically, A-Z</option>
								<option value="ZA" restaurantId="<?php echo $_SESSION['id']?>">Alphabetically, Z-A</option>
							</select>
						</div>
					</div>
                        <?php
                    }
                    ?>
					
					 
				</div>
			</div><!--End tools -->
        
        <input type="hidden" id="hidden_id" value="<?php echo $_SESSION['id']?>">
         <div class="show-menu">
<!--             		The menu will be rendered via jquery from database-->
         </div>
   		</div><!-- End col-md-9-->
 	</div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->
<?php
require_once('includes/footer.php')
?>