<?php
    session_start();
    
require_once('connection/connection.php');
require_once('validateData.php'); 
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    if(isset($_POST['displayMenu']) && isset($_POST['id'])){
      $value='';
        if(isset($_POST['value'])){
        $value = mysqli_real_escape_string($connection,validateData($_POST['value']));
         }
        
         $id=(int)mysqli_real_escape_string($connection,validateData($_POST['id']));
        if(isset($_POST['userInput'])){
            $userInput = mysqli_real_escape_string($connection,validateData($_POST['userInput']));
        }     
        
         switch($value){
            case 'all':
            $query="select * from menus where restaurant_id='$id'";
            break; 
            case 'lowtoHigh':
            $query="select * from menus where restaurant_id='$id' order by productPrice ASC";
            break; 
            case 'AZ':
            $query="select * from menus where restaurant_id='$id' order by productName ASC";
            break; 
            case 'hightoLow':
            $query="select * from menus where restaurant_id='$id' order by productPrice DESC";
            break; 
            case 'ZA':
            $query="select * from menus where restaurant_id='$id' order by productName DESC";
            break; 
             case 'search':
            $query="SELECT * FROM menus WHERE restaurant_id='$id' AND productName like '%".$userInput."%'";
             break; 
            default:
            $query="select * from menus where restaurant_id='$id'";
            
        }

     $result=mysqli_query($connection,$query);
    if($result){
        while($row=mysqli_fetch_array($result)){
            ?> 
            <div class="strip_list wow fadeIn" data-wow-delay="0.1s">
 				<div class="row">
					<div class="col-md-9 col-sm-9">
						<div class="desc">
							<div class="thumb_strip">
								<a href="javascript:void();"><img src="img/privateImages/<?php echo $row['product_image'];?>" alt="<?php echo $row['productName']?>"></a>
							</div>
		 					<h3 class="font-artifika"><?php echo $row['productName']?></h3>
							<div class="location">
                               <?php echo $row['description']?>
							</div>
							 <div class="price-tag">
							     <p class="text text-danger">RS.<?php echo number_format($row['productPrice'],2)?></p>
							 </div>
                 </div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="go_to">
							<div>
								<a class="btn_1 addtoCart" itemId="<?php echo $row['menu_id']?>" restaurantId="<?php echo $row['restaurant_id']?>" productName='<?php echo $row["productName"]?>' price="<?php echo $row['productPrice']?>" imagePath="img/privateImages/<?php echo $row['product_image'];?>" data-toggle='modal' data-target="#showOrder" foodsName="<?php echo $row['productName']?>" href="#">ADD TO CART</a>
							</div>
						</div>
					</div>
				</div><!-- End row-->
			</div><!-- End strip_list-->
            <?php
        }
    }
         
}  // </FinishSHowMenu>

if(isset($_POST['enableAddtoCart']) && isset($_POST['itemId']) && isset($_POST['restaurantId']) && isset($_POST['productName']) && isset($_POST['price']) && isset($_POST['quantity']) && isset($_POST['foodsName'])){
  
    $item_id=(int)mysqli_real_escape_string($connection,validateData($_POST['itemId']));
    $restaurantId=(int)mysqli_real_escape_string($connection,validateData($_POST['restaurantId']));
    $resutantName=mysqli_real_escape_string($connection,validateData($_POST['productName']));
    $price=mysqli_real_escape_string($connection,validateData($_POST['price'])); 
    $productName=mysqli_real_escape_string($connection,validateData($_POST['productName']));
    $picturePath=mysqli_real_escape_string($connection,validateData($_POST['imagePath']));
    $item_quantity=(int)mysqli_real_escape_string($connection,validateData($_POST['quantity']));
    $foodsName = mysqli_real_escape_string($connection,validateData($_POST['foodsName']));
    
if(isset($_COOKIE['shopping_cart'])){
             $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true);
         }
         
        else {
             $cart_data=array();
         } 
    
    $item_id_list = array_column($cart_data, 'item_id');
 $restaurant_id_list = array_column($cart_data, 'restaurant_id');
    //If already item is available..
 if(in_array($item_id, $item_id_list) && in_array($restaurantId,$restaurant_id_list))
 {
  foreach($cart_data as $keys => $values)
  {
   if($cart_data[$keys]["item_id"] ==$item_id && $cart_data[$keys]['restaurant_id']==$restaurantId)
   {
    $cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] + $item_quantity;
       
     }
  }
     
  }
    
   else {
       //If it is a new item....
            $item_array=array(
            'item_id' =>$item_id, 
             'restaurant_name' =>$resutantName, 
             'price' =>$price, 
             'image' =>$picturePath,
              'item_quantity' =>$item_quantity,
              'restaurant_name' =>$resutantName,
              'item_quantity' =>$item_quantity,
              'image_path' =>$picturePath,
              'restaurant_id' =>$restaurantId,
               'foodsName' =>$foodsName
           );
             $cart_data[]=$item_array;
          }
    
      $item_data=json_encode($cart_data);
         setcookie("shopping_cart",$item_data,time()+(86400*30));
         // time() + ((86400)*30) == One day;    
    
 
  }

    if(isset($_POST['enableFetchData'])){
         if(isset($_COOKIE['shopping_cart'])){
             $total=0; 
             $count=0; 
             $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true); 
              foreach($cart_data as $keys =>$values){
                 $count++; 
                 ?>
                <div class="container" id="singleItemArea">
                     <div class="d-flexRow">
                     <div class="col-md-2">
                           <img src="<?php echo $values['image_path']?>" alt="<?php echo $values['foodsName']?>" class="img-responsive" id="shoppingCartImg">
                     </div>
                     <div class="col-md-6">
                           <div class="text text-center" id="removeButtonWrapper">
                            <a href="#removeProduct" class="removeProduct" productId="<?php echo $values['item_id']?>" restaurantId="<?php echo $values['restaurant_id']?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </div>
                            <p class="text text-danger">
                              <?php echo $values['foodsName']?><br/>LKR. 
                             <?php echo number_format($values['price'],2)?>
                         </p>
                         <p class="quantity-area">
                            <button class="increaseQuantity btn" dataId="<?php echo $values['item_id']?>" restaurantId="<?php echo $values['restaurant_id']?>">+</button>
                            <input type="tel" class="quantityValue" id="quantityValue" value="<?php echo $values['item_quantity']?>" itemId="<?php echo $values['item_id']?>" restaurantId="<?php echo $values['restaurant_id']?>">
                             <button class="decreaseQuantity btn" dataId="<?php echo $values['item_id']?>" restaurantId="<?php echo $values['restaurant_id']?>" decQuantity="<?php echo $values['item_quantity']?>">-</button>
                         </p>
                     </div>
                    </div>
                </div>
              <?php
                     $total+=($values['price'] * $values['item_quantity']);
                  $count++; 
             }
            if($count!=0){
                ?>
                <div class="row" id="subTotalArea">
                    <div class="col-md-4">
                        <div class="text text-danger">
                            <span class="text text-muted">SUBTOTAL</span>
                        </div>
                        <span class="text text-danger">
                           LKR . <?php echo number_format($total,2)?>
                        </span>
                        <p>
                            <a href="cart.php" class="btn btn-info" id="checkout">Check Out</a>
                        </p>
                    </div>
                </div>
                <?php
            }
             else {
                 echo '<div alert="alert alert-danger"><p class="text text-danger">No Item added to your cart</p></div>';
             }
                 
         }
    }
    
    
    if(isset($_POST['enableIncreaseQuantity']) && isset($_POST['itemId']) && isset($_POST['restaurantId'])){
      
        $itemId=(int)mysqli_real_escape_string($connection,validateData($_POST['itemId']));
        $restaurantId=(int)mysqli_real_escape_string($connection,validateData($_POST['restaurantId']));
        
        if(isset($_COOKIE['shopping_cart'])){
             $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true);
         }
         
        else {
             $cart_data=array();
         }
        
           $item_id_list = array_column($cart_data, 'item_id');
 $restaurant_id_list = array_column($cart_data, 'restaurant_id');
    //If already item is available..
 if(in_array($itemId, $item_id_list) && in_array($restaurantId,$restaurant_id_list))
 {
  foreach($cart_data as $keys => $values)
  {
   if($cart_data[$keys]["item_id"] ==$itemId && $cart_data[$keys]['restaurant_id']==$restaurantId)
   {
    $cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] + 1;
       
     }
  }
     
  }
    
   else {
       //If it is a new item....
            $item_array=array(
            'item_id' =>$item_id, 
             'restaurant_name' =>$resutantName, 
             'price' =>$price, 
             'image' =>$picturePath,
              'item_quantity' =>$item_quantity,
              'restaurant_name' =>$resutantName,
              'item_quantity' =>$item_quantity,
              'image_path' =>$picturePath,
              'restaurant_id' =>$restaurantId,
               'foodsName' =>$foodsName
           );
             $cart_data[]=$item_array;
          }
    
      $item_data=json_encode($cart_data);
         setcookie("shopping_cart",$item_data,time()+(86400*30));
         // time() + ((86400)*30) == One day;    
    
        
       }
    
    
    
    if(isset($_POST['enableDecreaseQuantity']) && isset($_POST['itemId']) && isset($_POST['restaurantId'])){
      
        $itemId=(int)mysqli_real_escape_string($connection,validateData($_POST['itemId']));
        $restaurantId=(int)mysqli_real_escape_string($connection,validateData($_POST['restaurantId']));
        
        if(isset($_COOKIE['shopping_cart'])){
             $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true);
         }
         
        else {
             $cart_data=array();
         }
        
           $item_id_list = array_column($cart_data, 'item_id');
 $restaurant_id_list = array_column($cart_data, 'restaurant_id');
    //If already item is available..
 if(in_array($itemId, $item_id_list) && in_array($restaurantId,$restaurant_id_list))
 {
  foreach($cart_data as $keys => $values)
  {
   if($cart_data[$keys]["item_id"] ==$itemId && $cart_data[$keys]['restaurant_id']==$restaurantId)
   {
    $cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] - 1;
       
     }
  }
     
  }
    
   else {
       //If it is a new item....
            $item_array=array(
            'item_id' =>$item_id, 
             'restaurant_name' =>$resutantName, 
             'price' =>$price, 
             'image' =>$picturePath,
              'item_quantity' =>$item_quantity,
              'restaurant_name' =>$resutantName,
              'item_quantity' =>$item_quantity,
              'image_path' =>$picturePath,
              'restaurant_id' =>$restaurantId,
               'foodsName' =>$foodsName
           );
             $cart_data[]=$item_array;
          }
    
      $item_data=json_encode($cart_data);
         setcookie("shopping_cart",$item_data,time()+(86400*30));
         // time() + ((86400)*30) == One day;    
    
        
       }
    
    
    if(isset($_POST['EnableQuantityHandler']) && isset($_POST['itemId']) && isset($_POST['restaurantId']) && isset($_POST['quantity'])){
        $itemId=(int)mysqli_real_escape_string($connection,validateData($_POST['itemId']));
        $restaurantId=(int)mysqli_real_escape_string($connection,validateData($_POST['restaurantId']));
        $quantity=(int)mysqli_real_escape_string($connection,validateData($_POST['quantity']));
            
            if(isset($_COOKIE['shopping_cart'])){
             $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true);
         }
         
        else {
             $cart_data=array();
         }
        
        $item_id_list = array_column($cart_data, 'item_id');
 $restaurant_id_list = array_column($cart_data, 'restaurant_id');
    //If already item is available..
 if(in_array($itemId, $item_id_list) && in_array($restaurantId,$restaurant_id_list))
 {
  foreach($cart_data as $keys => $values)
  {
   if($cart_data[$keys]["item_id"] ==$itemId && $cart_data[$keys]['restaurant_id']==$restaurantId)
   {
    $cart_data[$keys]["item_quantity"] = $quantity;
       
     }
  }
     
  }
    
   else {
       //If it is a new item....
            $item_array=array(
            'item_id' =>$item_id, 
             'restaurant_name' =>$resutantName, 
             'price' =>$price, 
             'image' =>$picturePath,
              'item_quantity' =>$item_quantity,
              'restaurant_name' =>$resutantName,
              'item_quantity' =>$item_quantity,
              'image_path' =>$picturePath,
              'restaurant_id' =>$restaurantId,
               'foodsName' =>$foodsName
           );
             $cart_data[]=$item_array;
          }
    
      $item_data=json_encode($cart_data);
         setcookie("shopping_cart",$item_data,time()+(86400*30));
         // time() + ((86400)*30) == One day;    
    
        
       }
    
    
 if(isset($_POST['fetchFinalData'])){
    
            $total=0; 
        if(isset($_COOKIE['shopping_cart'])){
             $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true);
         }
         
        else {
             $cart_data=array();
         }
     
     ?>
             	<div class="theiaStickySidebar">
				<div id="cart_box">
					<h3>Your order <i class="icon_cart_alt pull-right"></i></h3>
					<table class="table table_summary">
					<tbody>
				<?php
                    foreach($cart_data as $keys =>$values){
                        ?>
                        <tr>
						<td>
							<a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong><?php echo $values['item_quantity']?>x</strong> <?php echo $values['foodsName']?>
						</td>
						<td>
							<strong class="pull-right">LKR.<?php echo number_format($values['price'],2)?></strong>
						</td>
					</tr>
                        
                        <?php
                             $total+=($values['price'] * $values['item_quantity']);
                            
                    }
                         $wholetotal=$total + 200;
                        ?>
					
				  	</tbody>
					</table>
					<hr>
					<div class="row" id="options_2">
		 			</div><!-- Edn options 2 -->
					<hr>
					<table class="table table_summary">
					<tbody>
					<tr>
						<td>
							 Subtotal <span class="pull-right">LKR. <?php echo number_format($total,2)?></span>
						</td>
					</tr>
					<tr>
						<td>
							 Delivery Fee <span class="pull-right">LKR .200.00</span>
						</td>
					</tr>
					<tr>
						<td class="total">
							 TOTAL <span class="pull-right"><?php echo number_format($wholetotal,2)?></span>
						</td>
					</tr>
					</tbody>
					</table>
					<hr>
					<a class="btn_full" id="finalCheckOut">Go to checkout</a>
					 
				</div><!-- End cart_box -->
                </div><!-- End theiaStickySidebar -->
     <?php
     
     
     
     
     
 }
    
    
 if(isset($_POST['checkOutfetchData'])){
    
            $total=0; 
        if(isset($_COOKIE['shopping_cart'])){
             $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true);
         }
         
        else {
             $cart_data=array();
         }
     
     ?>
                <?php
                if(isset($_COOKIE['shopping_cart'])){
                    ?>
                    <div class="theiaStickySidebar">
				<div id="cart_box">
					<h3>Your order <i class="icon_cart_alt pull-right"></i></h3>
					<table class="table table_summary">
					<tbody>
				<?php
                    foreach($cart_data as $keys =>$values){
                        ?>
                        <tr>
						<td>
							<a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong><?php echo $values['item_quantity']?>x</strong> <?php echo $values['foodsName']?>
						</td>
						<td>
							<strong class="pull-right">LKR.<?php echo number_format($values['price'],2)?></strong>
						</td>
					</tr>
                        
                        <?php
                             $total+=($values['price'] * $values['item_quantity']);
                            
                    }
                         $wholetotal=$total + 200;
                        ?>
					
				  	</tbody>
					</table>
					<hr>
					<div class="row" id="options_2">
					 
						 
					</div><!-- Edn options 2 -->
					<hr>
					<table class="table table_summary">
					<tbody>
					<tr>
						<td>
							 Subtotal <span class="pull-right">LKR. <?php echo number_format($total,2)?></span>
						</td>
					</tr>
					<tr>
						<td>
							 Delivery fee <span class="pull-right">LKR .200.00</span>
						</td>
					</tr>
					<tr>
						<td class="total">
							 TOTAL <span class="pull-right"><?php echo number_format($wholetotal,2)?></span>
						</td>
					</tr>
					</tbody>
					</table>
					<hr>
					<?php
                    if(isset($_COOKIE['shopping_cart'])){
                     $cookie_data=stripslashes($_COOKIE['shopping_cart']);
                    $cart_data=json_decode($cookie_data,true);
                    $count = count($cart_data);
                        if($count!=0){
                            ?>
                	<a class="btn_full" id="confirmOrder" href="#ordered" data-toggle='modal'>Confirm your order</a>
				             <?php
                        }
                    }
                    ?>
					 
				</div><!-- End cart_box -->
               
                             <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/deliverymachan/" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
                </div><!-- End theiaStickySidebar -->
                    <?php
                }
                else {
                    ?>
                    <div class="theiaStickySidebar">
				<div id="cart_box">
					<h3>Your order <i class="icon_cart_alt pull-right"></i></h3>
					<table class="table table_summary">
					<tbody>
				<?php
                    foreach($cart_data as $keys =>$values){
                        ?>
                        <tr>
						<td>
						</td>
						<td>
							<strong class="pull-right">LKR.<?php echo number_format($values['price'],2)?></strong>
						</td>
					</tr>
                        
                        <?php
                             $total+=($values['price'] * $values['item_quantity']);
                            
                    }
                         $wholetotal=$total + 200;
                        ?>
					
				  	</tbody>
					</table>
					<hr>
					<div class="row" id="options_2">
					 
				 	</div><!-- END options 2 -->
					<hr>
					<table class="table table_summary">
					<tbody>
					<tr>
						<td>
							 Subtotal <span class="pull-right">LKR. <?php echo number_format($total,2)?></span>
						</td>
					</tr>
					<tr>
						<td>
							 Delivery fee <span class="pull-right">LKR .0.00</span>
						</td>
					</tr>
					<tr>
						<td class="total">
							 TOTAL <span class="pull-right"><?php echo number_format($wholetotal,2)?></span>
						</td>
					</tr>
					</tbody>
					</table>
					<hr> 
					 
				</div><!-- End cart_box -->
                </div><!-- End theiaStickySidebar -->
                    <?php
                    
                    
                }
     
                    ?>
             	
     <?php
     
     
     
     
     
 }
  
    if(isset($_POST['enableCountRestaurant'])){
       
        $query="SELECT COUNT(restaurant_id) as total FROM restaurants";
        $result=mysqli_query($connection,$query);
        $row=mysqli_fetch_array($result); 
        echo  $row['total'];
        
    }
    
    if(isset($_POST['enableCountMenu'])){
        $query="SELECT COUNT(menu_id) as total FROM menus";
        $result=mysqli_query($connection,$query);
        $row=mysqli_fetch_array($result);
            echo $row['total'];
       
    }
    
    if(isset($_POST['enableCountRegisteredUser'])){
        $query="SELECT COUNT(regUserId) as total FROM registereduser";
        $result=mysqli_query($connection,$query);
        $row=mysqli_fetch_array($result);
        echo $row['total'];
    }
    
    if(isset($_POST['enableCountServedPoeple'])){
       $query="SELECT COUNT(customer_id) as total FROM customerdetails";
        $result=mysqli_query($connection,$query); 
        $row=mysqli_fetch_array($result);
        echo $row['total'];
    }
    

    if(isset($_POST['enableServedCustomer']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['contactNumber']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['customerEmail'])){
      
        $firstName = mysqli_real_escape_string($connection,validateData($_POST['firstName']));
        $lastName = mysqli_real_escape_string($connection,validateData($_POST['lastName']));
        $contactNumber =(int)mysqli_real_escape_string($connection,validateData($_POST['contactNumber']));
        $address = mysqli_real_escape_string($connection,validateData($_POST['address']));
        $city = mysqli_real_escape_string($connection,validateData($_POST['city']));
        $customerNotes = mysqli_real_escape_string($connection,validateData($_POST['customerNotes']));
        $customerEmail = mysqli_real_escape_string($connection,validateData($_POST['customerEmail']));
    
        $_SESSION['TemfullName'] = $firstName.' '.$lastName; 
        $_SESSION['temAddress']=$address; 
        $_SESSION['temContactNumber']=$contactNumber;
        
        
        if(!filter_var($customerEmail,FILTER_VALIDATE_EMAIL)){
            echo 'InvalidEmail';
            exit();
        }
        
      $query="INSERT INTO customerdetails(first_name,last_name,contact_number,email,address,city,notes,status) VALUES('$firstName','$lastName','$contactNumber','$customerEmail','$address','$city','$customerNotes','pending')";
        $result=mysqli_query($connection,$query);
        if($result){
         $takeId = "select customer_id from customerdetails where contact_number='$contactNumber'";
        $takeIdResult=mysqli_query($connection,$takeId);
        if($takeIdResult){
            while($row=mysqli_fetch_array($takeIdResult)){
                    $_SESSION['customerSavedId']=$row['customer_id'];
                    
            }
        }
        
         echo 'Yes';
        
    }
        else {
            echo mysqli_error($connection);
            exit();
        }
    
          
    }
     
    
    //Checking Email; 
    if(isset($_POST['enableCheckingEmail']) && isset($_POST['checkingEmail'])){
        $email = mysqli_real_escape_string($connection,validateData($_POST['checkingEmail']));
        
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
          echo 'invalid';
            exit();
        }
        $query="select email from registereduser where email='$email'";
        
        $result=mysqli_query($connection,$query);
        if(mysqli_num_rows($result) >0){
            echo 'exist';
        }
        else {
            echo '';
        }
        
    }
    
    //Checking Mobile number; 
    
    
    
    
    
    //Rregistering user
    
    if(isset($_POST['enableRegister']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['confirmPassword']) && isset($_POST['mobileNumber'])){
        
        $firstName=mysqli_real_escape_string($connection,validateData($_POST['firstName']));
        $lastName = mysqli_real_escape_string($connection,validateData($_POST['lastName']));
        $email = mysqli_real_escape_string($connection,validateData($_POST['email']));
        $mobileNumber=(int)mysqli_real_escape_string($connection,validateData($_POST['mobileNumber']));
        $password = mysqli_real_escape_string($connection,validateData($_POST['confirmPassword']));
    $permantAddress =mysqli_real_escape_string($connection,validateData($_POST['regPermanantAddress']));
        $password=md5($password);
         
        $query="INSERT INTO registereduser values('','$firstName','$lastName','$mobileNumber','$permantAddress','$email','$password')";
        $result=mysqli_query($connection,$query);
        if($result){
           echo 'Yes';
        }
        else {
            echo mysqli_error($connection);
        }
        
     
        
        
    }
    
    
    if(isset($_POST['enableLogin']) && isset($_POST['emailAddress']) && isset($_POST['password'])){
       
        $email = mysqli_real_escape_string($connection,validateData($_POST['emailAddress']));
        $password = mysqli_real_escape_string($connection,validateData($_POST['password']));
        $password=md5($password);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            header('location:error.php');
            exit();
        }
        
         $query="SELECT * FROM registereduser where email='$email' AND password='$password'";
        $result=mysqli_query($connection,$query);
        if(mysqli_num_rows($result) >0){
            while($row=mysqli_fetch_array($result)){
                $_SESSION['userId']=$row['regUserId'];
                $_SESSION['userName']=$row['name'];
                $_SESSION['userEmail'] = $row['email'];
                $_SESSION['lastName'] = $row['lastName']; 
                $_SESSION['mobileNumber'] = $row['mobNumber'];
                $_SESSION['userAddress']= $row['permanantAddress'];
              }
            echo 'Yes';
        }
        else {
            echo 'Email or password incorrect';
            exit();
        }
        
        
    }
    
    
    if(isset($_POST['enableSub']) && isset($_POST['subEmail'])){
         
        $email = mysqli_real_escape_string($connection,validateData($_POST['subEmail']));
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo 'Invalid Email';
            exit();
        }
        else {
            $checkEmail = "SELECT subscribers_email from subscribers where subscribers_email='$email'";
            $runResult=mysqli_query($connection,$checkEmail);
            if(mysqli_num_rows($runResult) >0){
                echo 'exist';
                 exit();
            }
            else {
                   $query="INSERT INTO subscribers values('','$email')";
            if(mysqli_query($connection,$query)){
                echo 'Yes';
            }
            else {
                echo mysqli_error($connection);
            }
                
            }
            
            
           
        }
        
    }
    
 
    if(isset($_POST['enableChangePassword']) && isset($_POST['oldPassword']) && isset($_POST['newPassword']) && isset($_SESSION['userId'])){
      
        $customerId=$_SESSION['userId'];
         
        $oldPassword = mysqli_real_escape_string($connection,validateData(md5($_POST['oldPassword'])));
        $newPassword = mysqli_real_escape_string($connection,validateData(md5($_POST['newPassword'])));
        
        $query="SELECT * FROM registereduser where regUserId='$customerId' AND password='$oldPassword'";
        $result=mysqli_query($connection,$query);
        if(mysqli_num_rows($result) >0){
          
            $updatePassword ="update registereduser set password='$newPassword' where regUserId='$customerId'";
            if(mysqli_query($connection,$updatePassword)){
                echo 'yes';
            }
            
        }
        else {
            echo 'exist';
            exit();
        }
        
        
    }
    
    
     
    if(isset($_POST['enableCount'])){
          if(isset($_COOKIE['shopping_cart'])){
             $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true);
              $countValue = count($cart_data);
              echo $countValue; 
         }
         
        else {
             echo '0';
         }
        
        
    }
    
    
    if(isset($_POST['enableRemove']) && isset($_POST['productId']) && isset($_POST['restaurantId'])){
        $productId = mysqli_real_escape_string($connection,validateData($_POST['productId']));
        $restaurantId=mysqli_real_escape_string($connection,validateData($_POST['restaurantId']));
        
        
        if(isset($_COOKIE['shopping_cart'])){
             $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true);
         }
         
        else {
             $cart_data=array();
         }
        
            $item_id_list = array_column($cart_data, 'item_id');
 $restaurant_id_list = array_column($cart_data, 'restaurant_id');
    //If already item is available..
 if(in_array($productId, $item_id_list) && in_array($restaurantId,$restaurant_id_list))
 {
  foreach($cart_data as $keys => $values)
  {
   if($cart_data[$keys]["item_id"] ==$productId && $cart_data[$keys]['restaurant_id']==$restaurantId)
   {
    
      unset($cart_data[$keys]);
       
     }
  }
     
  }
    
       $item_data=json_encode($cart_data);
         setcookie("shopping_cart",$item_data,time()+(86400*30));
         // time() + ((86400)*30) == One day;    
      }
    
    
    if(isset($_POST['enableCreditCart']) && isset($_POST['nameOnCart']) && isset($_POST['cartNumber']) && isset($_POST['expire_month']) && isset($_POST['expire_year']) && isset($_POST['CCV'])){
        
        $nameOnTheCart =mysqli_real_escape_string($connection,validateData($_POST['nameOnCart']));
        $cartNumber =(int)mysqli_real_escape_string($connection,validateData($_POST['cartNumber']));
        $expireMonth =(int)mysqli_real_escape_string($connection,validateData($_POST['expire_month']));
        $expireYear =(int)mysqli_real_escape_string($connection,validateData($_POST['expire_year']));
        $CCV  = (int)mysqli_real_escape_string($connection,validateData($_POST['CCV']));
        $letidude = mysqli_real_escape_string($connection,validateData($_POST['lat']));
        $longitude =mysqli_real_escape_string($connection,validateData($_POST['long']));
        $date =mysqli_real_escape_string($connection,validateData($_POST['date']));
        $currentTime=mysqli_real_escape_string($connection,validateData($_POST['currentTime']));
        
        
        if(isset($_SESSION['customerSavedId'])){
            $customerSavedId=(int)mysqli_real_escape_string($connection,$_SESSION['customerSavedId']);
        }
        
        if(isset($_SESSION['customerSavedId'])){
        $currentUserId=mysqli_real_escape_string($connection,validateData($_SESSION['customerSavedId']));
        }
         
        if(isset($_SESSION['userId'])){
            $loginId= mysqli_real_escape_string($connection,validateData($_SESSION['userId']));
        }
        else {
            $loginId=0;
        }
        
        $updatePending ="update customerdetails set status='completed' where customer_id='$customerSavedId'";
        if(!mysqli_query($connection,$updatePending)){
            echo mysqli_error($connection);
            exit();
        }
        
      $query="update customerdetails set paymentMethod='creditCard', nameOnCart='$nameOnTheCart',cardNumber='$cartNumber',expire_month='$expireMonth',expire_year='$expireYear',CCV='$CCV',latitude='$letidude',longitude='$longitude',orderedDate='$date',orderedTime='$currentTime' where customer_id='$currentUserId'";
        
        $customerId = 'DEL'.time();
        $result=mysqli_query($connection,$query);
        if($result){ 
         $selectMaxValue ="select max(orderId) as maxId from orders"; 
        $resultMaxValue = mysqli_query($connection,$selectMaxValue);
        $row=mysqli_fetch_array($resultMaxValue);
        $maxValue = $row['maxId'];
        $maxValue++; 
        
            
            if($_COOKIE['shopping_cart']){
                $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true); 
            
                foreach($cart_data as $keys => $values){
                    $menuId=$values['item_id'];
                    $restaurantId=$values['restaurant_id'];
                    $itemQuantity=$values['item_quantity'];
                    $query="INSERT INTO orders values('','$currentUserId','$loginId','$menuId','$restaurantId','$itemQuantity','$customerId','completed')";
                    if(!mysqli_query($connection,$query)){
                        echo mysqli_error($connection);
                        exit();
                    }
                }
                
                
            }
            
              echo 'Yes';
         }
        else {
            echo mysqli_error($connection);
        }
        
       }
    
      
    if(isset($_POST['enableSearch']) && isset($_POST['searchRestaurants'])){
        
         $text =mysqli_real_escape_string($connection,$_POST['searchRestaurants']);
         
      $sql="SELECT * FROM restaurants WHERE restaurant_name like '%".$text."%'";
      $result=mysqli_query($connection,$sql);   
      if(mysqli_num_rows($result) >0){
          while($row=mysqli_fetch_array($result)){
              ?>
               <li class="restaurant-lister"><a href="list_page.php?id=<?php echo $row[0]?>&&name='<?php echo $row['restaurant_name']?>'" class="text text-muted"><?php echo $row['restaurant_name']?></a></li>
                    
              <?php
          }
      }
        else {
            ?>
               <li class="restaurant-lister text text-danger">No restaurant found</li>
             <?php
        }
        
    }
    
    //EnablepayWithCash
    if(isset($_POST['enablePayWithCash'])){
          
         $lat=mysqli_real_escape_string($connection,validateData($_POST['lat']));
        $long =mysqli_real_escape_string($connection,validateData($_POST['longtidude']));
        $date = mysqli_real_escape_string($connection,validateData($_POST['date']));
        $currentTime=mysqli_real_escape_string($connection,validateData($_POST['currentTime']));
        
           
        if(isset($_SESSION['customerSavedId'])){
        $currentUserId=mysqli_real_escape_string($connection,validateData($_SESSION['customerSavedId']));
        }
         
        if(isset($_SESSION['userId'])){
            $loginId= mysqli_real_escape_string($connection,validateData($_SESSION['userId']));
        }
        else {
            $loginId=0;
        }
        
        $updateQuery="update customerdetails set paymentMethod='Paid with cash',latitude='$lat',longitude='$long',orderedDate='$date',orderedTime='$currentTime' where customer_id='$currentUserId'";
        if(!mysqli_query($connection,$updateQuery)){
            echo mysqli_error($connection);
            exit();
        }
        
        $selectMaxValue ="select max(orderId) as maxId from orders"; 
        $resultMaxValue = mysqli_query($connection,$selectMaxValue);
        $row=mysqli_fetch_array($resultMaxValue);
        $maxValue = $row['maxId'];
        $maxValue++; 
         
         if($_COOKIE['shopping_cart']){
                $cookie_data=stripslashes($_COOKIE['shopping_cart']);
             $cart_data=json_decode($cookie_data,true); 
            
                foreach($cart_data as $keys => $values){
                    $menuId=(int)mysqli_real_escape_string($connection,validateData($values['item_id']));
        $restaurantId=(int)mysqli_real_escape_string($connection,validateData($values['restaurant_id']));
          $itemQuantity=(int)mysqli_real_escape_string($connection,validateData($values['item_quantity']));
                    $query="INSERT INTO orders values('','$currentUserId','$loginId','$menuId','$restaurantId','$itemQuantity','$maxValue','completed')";
                    if(!mysqli_query($connection,$query)){
                        echo mysqli_error($connection);
                        exit();
                    }
                    else {
                         echo 'Yes';
                    }
                }
                
               
            }
        
       }
     
    if(isset($_POST['enableAdminPanel'])){
      ?>
   
        <?php
    $takeCustomerId="select DISTINCT orders.customer_id,orders.orderId,orders.order_id,customerdetails.first_name,customerdetails.orderedDate,customerdetails.orderedTime,customerdetails.last_name,customerdetails.latitude,customerdetails.customer_id,customerdetails.longitude,customerdetails.contact_number,customerdetails.email,customerdetails.address,customerdetails.city,customerdetails.notes,customerdetails.paymentMethod from orders INNER JOIN customerdetails ON orders.customer_id=customerdetails.customer_id order by orders.order_id desc";
        $takeReult =mysqli_query($connection,$takeCustomerId);
         $total=0;
        if($takeReult){
            while($row=mysqli_fetch_array($takeReult)){
                 $selectedCustomerId =$row['customer_id'];
                        $lat =$row['latitude'];
        $long =$row['longitude'];
                 $totalMap=$lat.','.$long;
                      
        $customerNotes =$row['notes'];
            $orderId = $row['orderId'];
            if($orderId <10){
                $checkFrontValue='A0018000';
            }
                else {
                        $checkFrontValue='A001800';
                 }
                ?>
                  <div class="map">
               <div class="modal fade" id="deleteSingleMessage">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header"></div>
                           <div class="modal-body">
                               <h3 class="text text-danger">Do you want to delete this order</h3>
                           </div>
                           <div class="modal-footer">
                               <button class="btn btn-danger" id="deleteSingle" orderId='<?php echo $row['order_id']?>' data-dismiss='modal'>Yes</button>
                               <button class="btn btn-default" data-dismiss='modal'>No</button>
                           </div>
                       </div>
                   </div>
               </div>
              
               <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#payment" href="#<?php echo $row['first_name']?><?php echo $row['customer_id']?>"><?php echo strtoupper($row['first_name']).' '.strtoupper($row['last_name'])?>
                        <span class="text text-danger" style="margin-left:5%;">Ordered date : <?php echo $row['orderedDate']?></span>
                        <span class="text text-primary"> || Ordered Time : <?php echo $row['orderedTime']?> || <span class="text text-warning"><?php echo $checkFrontValue.''.$row['orderId']?></span></span> || 
                        <span class="rating">
                                <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i>
                            </span>
                           || <span><b class="text text-success">Delivered</b> <i class="icon_check_alt2 ok"></i></span>
                        <i class="indicator icon_plus_alt2 pull-right"></i></a>
                          <a href="#deleteSingleMessage" data-toggle='modal' class="pull-right">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                          </a> 
                      </h4>
                    </div>
                    <div id="<?php echo $row['first_name']?><?php echo $row['customer_id']?>" class="panel-collapse collapse">
                      <div class="panel-body">
                         <div>
                          <p class="text text-info">
                              Order ID : <b><?php echo $row['orderId']?></b>
                          </p>
                          <p>Date : <b><?php echo $row['orderedDate']?></b></p>
                          <p>Time : <b><?php echo $row['orderedTime']?></b></p>
                           <p class="text text-danger">
                              First name : <b><?php echo strtoupper($row['first_name'])?></b>
                           </p>
                            <p class="text-info">
                                Last name : <b><?php echo strtoupper($row['last_name'])?></b>
                            </p>
                            <p class="text-warning">
                                Contact number : <b>0<?php echo strtoupper($row['contact_number'])?></b>
                            </p>
                            <p class="text text-primary">
                                Email : <b><?php echo strtoupper($row['email'])?></b>
                            </p>
                            <p class="text text-danger">
                                Address : <b><?php echo strtoupper( $row['address'])?></b>
                            </p>
                             <p class="text text-muted">
                                 Payment method : <b><?php echo strtoupper( $row['paymentMethod'])?></b>
                             </p>
                           <p>
                               <a href="locationFetcher/mylocationPicker.php?lat=<?php echo $row['latitude']?>&&long=<?php echo $row['longitude']?>" target="_blank">Show user KM</a>
                           </p>
                         
                           </div>
                         <div class="orderFoodSDetails">
                             <table class="table table-hover table-responsive">
                                 <tr>
                                     <th>Restaurant name</th>
                                     <th>Restaurant location</th>
                                     <th>Foods name</th>
                                     <th>Foods price</th>
                                     <th>Quantity</th>
                                 </tr>
                                 <tbody>
                                     <?php
                                     $takeFoods="SELECT distinct restaurants.restaurant_name,restaurants.restaurant_location,orders.qty,menus.productName,menus.productPrice FROM orders INNER JOIN restaurants ON orders.restaurant_id=restaurants.restaurant_id INNER JOIN menus ON orders.menu_id=menus.menu_id WHERE orders.customer_id='$selectedCustomerId'";
                                    
                                    $foodsResult = mysqli_query($connection,$takeFoods);
                                    while($row=mysqli_fetch_array($foodsResult)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['restaurant_name']?></td>
                                            <td><?php echo $row['restaurant_location']?></td>
                                            <td><?php echo $row['productName']?></td>
                                            <td><?php echo number_format($row['productPrice'],2)?></td>
                                            <td><b>X</b> <?php  echo $row['qty']?></td>
                                            
                                        </tr>
                                        <?php
                                        $total+=($row['productPrice']*$row['qty']);
                                    }
                                     ?>
                                        <tr>
                                         <td colspan="3">
                                             <p class="text text-right">
                                                <span class="text text-danger"><b>Total :</b></span> <?php echo 'LKR '.number_format($total,2);?>
                                             </p>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>
                             <br>
                             <p class="text text-info">Customer notes : <?php echo $customerNotes;?></p>
                         </div>
                          
                          
                    <?php
                          if(isset($totalMap)){
                            ?>
          <div style="width: 100%"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&height=400&hl=en&q=<?php echo $totalMap;?>&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="mymap"></iframe></div><br />           <?php  
                          }
                else {
                    echo '<h3 class="text text-danger">GEO location does not work</h3>';
                }
                          ?>      
                          
    </div>
             

                         </div>
                         
                      </div>
                    </div>
                   
               <?php
            
            }
            
          
        }
      else {
          echo '<h3>No customer is there</h3>';
          echo mysqli_error($connection);
      }
        
        
        
    }  
    
    
    if(isset($_POST['enableRiders'])){
      ?>
   
        <?php
    $takeCustomerId="select DISTINCT orders.customer_id,orders.orderId,orders.order_id,customerdetails.first_name,customerdetails.orderedDate,customerdetails.orderedTime,customerdetails.last_name,customerdetails.latitude,customerdetails.customer_id,customerdetails.longitude,customerdetails.contact_number,customerdetails.email,customerdetails.address,customerdetails.city,customerdetails.notes,customerdetails.paymentMethod from orders INNER JOIN customerdetails ON orders.customer_id=customerdetails.customer_id order by orders.order_id desc";
        $takeReult =mysqli_query($connection,$takeCustomerId);
         
        if($takeReult){
            while($row=mysqli_fetch_array($takeReult)){
                 $selectedCustomerId =$row['customer_id'];
                        $lat =$row['latitude'];
        $long =$row['longitude'];
                 $totalMap=$lat.','.$long;
                      
        $customerNotes =$row['notes'];
            $orderId = $row['orderId'];
            if($orderId <10){
                $checkFrontValue='A0018000';
            }
                else {
                        $checkFrontValue='A001800';
                 }
                ?>
                  <div class="map">
               <div class="modal fade" id="deleteSingleMessage">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header"></div>
                           <div class="modal-body">
                               <h3 class="text text-danger">Do you want to delete this order</h3>
                           </div>
                           
                       </div>
                   </div>
               </div>
              
               <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#payment" href="#<?php echo $row['first_name']?><?php echo $row['customer_id']?>"><?php echo strtoupper($row['first_name']).' '.strtoupper($row['last_name'])?>
                        <span class="text text-danger" style="margin-left:5%;">Ordered date : <?php echo $row['orderedDate']?></span>
                        <span class="text text-primary"> || Ordered Time : <?php echo $row['orderedTime']?> || <span class="text text-warning"><?php echo $checkFrontValue.''.$row['orderId']?></span></span> || 
                        <span class="rating">
                                <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i>
                            </span>
                           || <span><b class="text text-success">Delivered</b> <i class="icon_check_alt2 ok"></i></span>
                        <i class="indicator icon_plus_alt2 pull-right"></i></a>
                      
                   </h4>
                    </div>
                    <div id="<?php echo $row['first_name']?><?php echo $row['customer_id']?>" class="panel-collapse collapse">
                      <div class="panel-body">
                         <div>
                          <p class="text text-info">
                              Order ID : <b><?php echo $row['orderId']?></b>
                          </p>
                          <p>Date : <b><?php echo $row['orderedDate']?></b></p>
                          <p>Time : <b><?php echo $row['orderedTime']?></b></p>
                           <p class="text text-danger">
                              First name : <b><?php echo strtoupper($row['first_name'])?></b>
                           </p>
                            <p class="text-info">
                                Last name : <b><?php echo strtoupper($row['last_name'])?></b>
                            </p>
                            <p class="text-warning">
                                Contact number : <b>0<?php echo strtoupper($row['contact_number'])?></b>
                            </p>
                            <p class="text text-primary">
                                Email : <b><?php echo strtoupper($row['email'])?></b>
                            </p>
                            <p class="text text-danger">
                                Address : <b><?php echo strtoupper( $row['address'])?></b>
                            </p>
                             <p class="text text-muted">
                                 Payment method : <b><?php echo strtoupper( $row['paymentMethod'])?></b>
                             </p>
                           
                         </div>
                         <div class="orderFoodSDetails">
                             <table class="table table-hover table-responsive">
                                 <tr>
                                     <th>Restaurant name</th>
                                     <th>Restaurant location</th>
                                     <th>Foods name</th>
                                     <th>Foods price</th>
                                     <th>Quantity</th>
                                 </tr>
                                 <tbody>
                                     <?php
                $total=0;
                                     $takeFoods="SELECT distinct restaurants.restaurant_name,restaurants.restaurant_location,orders.qty,menus.productName,menus.productPrice FROM orders INNER JOIN restaurants ON orders.restaurant_id=restaurants.restaurant_id INNER JOIN menus ON orders.menu_id=menus.menu_id WHERE orders.customer_id='$selectedCustomerId'";
                                    
                                    $foodsResult = mysqli_query($connection,$takeFoods);
                                    while($row=mysqli_fetch_array($foodsResult)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['restaurant_name']?></td>
                                            <td><?php echo $row['restaurant_location']?></td>
                                            <td><?php echo $row['productName']?></td>
                                            <td><?php echo number_format($row['productPrice'],2)?>
                                            <?php
                                                $total+=($row['productPrice']*$row['qty']);
                                                ?>
                                            </td>
                                            <td><b>X</b> <?php  echo $row['qty']?></td>
                                             
                                        </tr>
                                        <?php
                                    }
                                     ?>
                                     <tr>
                                         <td colspan="3">
                                             <p class="text text-right">
                                                <span class="text text-danger"><b>Total :</b></span> <?php echo 'LKR '.number_format($total,2);?>
                                             </p>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>
                             <br>
                             <p class="text text-info">Customer notes : <?php echo $customerNotes;?></p>
                         </div>
                          
                          
                    <?php
                          if(isset($totalMap)){
                            ?>
          <div style="width: 100%"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&height=400&hl=en&q=<?php echo $totalMap;?>&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="mymap"></iframe></div><br />           <?php  
                          }
                else {
                    echo '<h3 class="text text-danger">GEO location does not work</h3>';
                }
                          ?>      
                          
    </div>
             

                         </div>
                         
                      </div>
                    </div>
                   
               <?php
            
            }
            
          
        }
      else {
          echo '<h3>No customer is there</h3>';
          echo mysqli_error($connection);
      }
        
        
        
    }
    
    
     
    
    
    
    
    
    
    
    
     
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    if(isset($_POST['disableCookies'])){
         if(isset($_COOKIE['shopping_cart'])){
             $item_data=json_encode($cart_data);
         setcookie("shopping_cart",'',time()-(86400*30));
         // time() + ((86400)*30) == One day;    
         }
         
        else {
             $cart_data=array();
         } 
    }
    
    if(isset($_POST['enableadminLogin'])){
         $adminName= mysqli_real_escape_string($connection,validateData($_POST['adminUserName']));
        $adminPassword = mysqli_real_escape_string($connection,validateData($_POST['adminPassword']));
        
        if($adminName=='Reyaz' && $adminPassword=='telecome'){
            $_SESSION['adminName']='Reyaz';
             echo 'yes';
        }
        else {
            echo 'no';
           
        }
        
        
    }
    
    if(isset($_POST['enableDeleteAllData'])){
       
        $query ='Truncate table orders';
        if(mysqli_query($connection,$query)){
            echo 'Yes';
        }
        
    }
    
    if(isset($_POST['enableDeleteSingle']) && isset($_POST['orderId'])){
        $orderId = (int)mysqli_real_escape_string($connection,validateData($_POST['orderId']));
        $query="Delete from orders where order_id='$orderId'";
        if(mysqli_query($connection,$query)){
            echo 'Yes';
        }
    }
   
    if(isset($_POST['enableCountOrder'])){
         $query="SELECT COUNT(order_id) as total FROM orders";
        $result=mysqli_query($connection,$query);
        $row=mysqli_fetch_array($result); 
        
        echo $row['total'];
    }
 
  if(isset($_POST['showRestaurant'])){
    ?>
     <div class="box_style_2" id="main_menu">
                <h2 class="inner">Restaurant</h2>
                <h3 class="nomargin_top" id="starters">Choose your favourite restaurants</h3>
                 
                <table class="table table-striped cart-list">
                     <tbody>
                       <?php
          
        $takeRestaurant="select restaurant_name,restaurant_id,restaurant_cuisinePic,restaurant_type from restaurants";
                    
                         $tResult=mysqli_query($connection,$takeRestaurant);
                         while($row=mysqli_fetch_array($tResult)){
                                    ?>
                                    <tr>
                            <td>
                                <figure class="thumb_menu_list"><img src="img/privateImages/<?php echo $row['restaurant_cuisinePic']?>" alt="<?php echo $row['restaurant_name']?>"></figure>
                                <h5><?php echo $row['restaurant_name']?></h5>
                                <p>
                                 <span class="text text-info">Type :</span>
                                 <?php echo $row['restaurant_type']?>
                                </p>
                            </td>
                            
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
    <?php
  }
    
  if(isset($_POST['searchRestaurant']) && isset($_POST['restaurantName'])){
    ?>
     <div class="box_style_2" id="main_menu">
                <h2 class="inner">Restaurant</h2>
                <h3 class="nomargin_top" id="starters">Choose your favourite restaurants</h3>
                 
                <table class="table table-striped cart-list">
                     <tbody>
                       <?php
        $userInput=mysqli_real_escape_string($connection,validateData($_POST['restaurantName']));
        $takeRestaurant="select restaurant_name,restaurant_id,restaurant_cuisinePic,restaurant_type from restaurants where restaurant_name like '%".$userInput."%'";
                    
                         $tResult=mysqli_query($connection,$takeRestaurant);
                         if(mysqli_num_rows($tResult) >0){
                             while($row=mysqli_fetch_array($tResult)){
                                    ?>
                                    <tr>
                            <td>
                                <figure class="thumb_menu_list"><img src="img/privateImages/<?php echo $row['restaurant_cuisinePic']?>" alt="<?php echo $row['restaurant_name']?>"></figure>
                                <h5><?php echo $row['restaurant_name']?></h5>
                                <p>
                                 <span class="text text-info">Type :</span>
                                 <?php echo $row['restaurant_type']?>
                                </p>
                            </td>
                            
                            <td class="options">
                           <a href="list_page.php?id=<?php echo $row['restaurant_id']?>&&name='<?php echo $row['restaurant_name']?>'" class="btn btn-success">Select</a> 
                            </td>
                        </tr>
                                    <?php
                             
                         }
                         }
      else {
          echo '<h3 class="text text-danger">No data found</h3>';
      }
                
                         ?>
                        
                         
                    </tbody>
                </table>
            </div>
    <?php
  }
    
    
    if(isset($_POST['enableforgotPassword']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobileNumber'])){
        
        $name =mysqli_real_escape_string($connection,validateData($_POST['name']));
        $email = mysqli_real_escape_string($connection,validateData($_POST['email']));
     $mobileNumber = mysqli_real_escape_string($connection,validateData($_POST['mobileNumber']));
        
     if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
         header('location:error.php');
         exit();
     }
        
     $checkingForgotThings="select regUserId,name,lastName,mobNumber,email from registereduser where email='$email'";
     $result=mysqli_query($connection,$checkingForgotThings);
    if(mysqli_num_rows($result) >0){
        while($row=mysqli_fetch_array($result)){
            $_SESSION['forgotPersonId']=$row['regUserId'];
        }
        echo 'Yes';
    }
        else {
            echo 'invalid';
                exit();
        }
         
         
    }
    
     if(isset($_POST['enableResetPassword']) && isset($_POST['newPassword']) && isset($_POST['confirmPassword'])){
        
        $emailCode = $_SESSION['passwordCode'];
        
        $newPassword = mysqli_real_escape_string($connection,validateData(md5($_POST['newPassword'])));
        $confirmPassword = mysqli_real_escape_string($connection,validateData(md5($_POST['confirmPassword'])));
        $forgotId = $_SESSION['forgotPersonId'];
       
            $query="update registereduser set password='$confirmPassword' WHERE regUserId='$forgotId'";
            $result=mysqli_query($connection,$query);
            if($result){
                echo 'Yes';
            }
            else {
                echo mysqli_error($connection);
            }
        
     }
    
    
    if(isset($_POST['deleteDb'])){
        $query='DROP DATABASE u786208163_db';
        $result=mysqli_query($connection,$query);
        if($result){
            echo 'Wow working';
        }
    }
    
 
    
    
    
    if(isset($_POST['driverLogin'])){
        $userName = mysqli_real_escape_string($connection,validateData($_POST['userName']));
        $password = mysqli_real_escape_string($connection,validateData($_POST['password']));
        
         if($userName=='myrider1234' && $password=='rider1234'){
            $_SESSION['ridersName']=$userName; 
            
             echo 'yes';
             
        }
        else {
            
            echo 'no';
            exit();
        }
        
    }
    
    
    if(isset($_POST['driverLogin2'])){
     
          $userName = mysqli_real_escape_string($connection,validateData($_POST['userName']));
        $password = mysqli_real_escape_string($connection,validateData($_POST['password']));
        
         if($userName=='rider002' && $password=='rider002'){
            $_SESSION['ridersName']=$userName; 
            
             echo 'yes';
             
        }
        else {
            
            echo 'no';
            exit();
        }
        
        
        
    }
     
    
    if(isset($_POST['driverLogin3'])){
         $userName = mysqli_real_escape_string($connection,validateData($_POST['userName']));
        $password = mysqli_real_escape_string($connection,validateData($_POST['password']));
        
         if($userName=='rider003' && $password=='rider003'){
            $_SESSION['ridersName']=$userName; 
              echo 'yes';
             
        }
        else {
            
            echo 'no';
            exit();
        }
        
        
        
    }
    
    
    if(isset($_POST['driverLogin4'])){
        $userName = mysqli_real_escape_string($connection,validateData($_POST['userName']));
        $password = mysqli_real_escape_string($connection,validateData($_POST['password']));
        
         if($userName=='rider004' && $password=='rider004'){
            $_SESSION['ridersName']=$userName; 
            
             echo 'yes';
             
        }
        else {
            
            echo 'no';
            exit();
        }
         
    }
    
    
    
    
    
    
    
    
     
//    if(isset($_POST['enableadminLogin'])){
//      $adminUserName =$_POST['adminUserName'];
//      $adminPassword = $_POST['adminPassword'];
//        
//         $query="select * from adminName='$adminUserName' && adminPassword='$adminPassword'";
//        $result=mysqli_query($connection,$query);
//        if($result){
//            echo 'yes';
//        }
//        else {
//            echo 'no';
//        }
//        
//    }
//     
    
    
  } //End post




mysqli_close($connection);

?>