 <?php
 require_once('connection/connection.php');
session_start();
?>
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
            <meta name="google-site-verification" content="6e4I4nIgeAN76V4hiTr42COfV1fB9rBmQKrsugCIG2w" />
          <title>Delivery Machan || Food Delivery in Kandy || Peradeniya || Katugastota || Madawala ||Menikhinna || Akurana || Digana || Deliverymachan</title>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Delivery Machan, delivery,Food,Fried Rice,Food delivery,Food delivery in kandy,Kandy order, Online order,Online food ordering in Srilanka, Delivery in Srilanka, Delivery service, food delivery in Digana, Food delivery in Peradaniya, Food delivery in Akurana, Food delivery in Madawala, Kandy, Digana, Katugasthotta">
<meta name="description" content="Home Delivey with Delivery Machan in Kandy"/>
    <meta name="author" content="Delivery Macchan">
    <meta name="charset" content="ISO-8859-1">
<meta name="description" content="choose your favourite Restaurant and order your food online in Sri Lanka, Kandy and We deliver foods to your doorstep">
<meta name="keywords" content="food,restaurant,Kandy,Sri Lanka,Delivery Food, Order,Online, Online Food Order,">
<meta name="copyright" content="Copyright © 2018 deliverymachan.com ">
<meta name="author" content="MR SAIF">
<meta name="designer" content="B.M IJASDEEN ">
<meta name="email" content="deliverymachan@gmail.com">
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">
<meta http-equiv="Site-Enter" content="blendTrans(Duration=2.0)">
<meta http-equiv="Site-Exit" content="blendTrans(Duration=2.0)">
<meta http-equiv="Page-Enter" content="blendTrans(Duration=2.0)">
<meta http-equiv="Page-Exit" content="blendTrans(Duration=2.0)">
    

      <!-- Favicons-->
    <link rel="shortcut icon" href="img/privateImages/finalSmallLogo.png" type="image/x-icon">
       <!-- GOOGLE WEB FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>

     <!-- Radio and check inputs -->
    <link href="css/skins/square/grey.css" rel="stylesheet">
     <!-- BASE CSS -->
    <link href="css/base.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="90edb8dc-868c-4acd-bed0-bbbae9fd99d4" type="text/javascript" async></script>
<script id="CookieDeclaration" src="https://consent.cookiebot.com/90edb8dc-868c-4acd-bed0-bbbae9fd99d4/cd.js" type="text/javascript" async></script>

</head>

<body>





<!--  Login begins-->
<!--
  <script>
   function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
     if (response.status === 'connected') {
     
      testAPI();
    } else {
       console.log('It is not working');
    }
  }
 function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '2070187643004807',
      cookie     : true,   
                           
      xfbml      : true,   
      version    : 'v3.1' 
    });
 

    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });

  };

   (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
 
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
    alert(response.name);
    });
  }
      
</script>
-->

   
 <!-- Login ends-->
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1&appId=653822504981449&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  

 <!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->
    <input type="hidden" id="checkLoginValue" value="<?php if(isset($_SESSION['userId'])) echo $_SESSION['userId']?>">
 	<div id="preloader">
        <div class="sk-spinner sk-spinner-wave" id="status">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div><!-- End Preload --> 
    <!-- Header ================================================== -->
<!--      Command line-->
    <header id="mainMenu">
    <div class="container">
        <div class="row">
            <div class="col--md-4 col-sm-4 col-xs-4">
                <a href="index.php" id="logo">
                <img src="img/privateImages/newDeliveryMachan3.png" alt="Logo" data-retina="true" class="hidden-xs" id="lglargeImg">
                <img src="img/privateImages/newDeliveryMachan.png" height="30" alt="Logo" data-retina="true" class="hidden-lg hidden-md hidden-sm" id="smallSizeImg">
                </a>    
            </div>  
            <nav class="col--md-8 col-sm-8 col-xs-8">
            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);" id="toggleMenu"><span>Menu mobile</span></a>
            <div class="main-menu">
                   <div id="header_menu">
                    <img src="img/privateImages/newDeliveryMachan.png" height="60" alt="Images" data-retina="true" id="headerImg" class="img-responsive">
                </div>
                <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                 <ul>
                       <li class="submenu">
                    <a href="restaurants.php" class="show-submenu orangeText"><b>Restaurants</b></a>
                 
                     </li>
                     <li class="submenu">
                    <a href="index.php" class="show-submenu orangeText"><b>Home</b></a>
                      </li>
                       <?php
                     if(isset($_SESSION['userName'])){
                         ?>
                         <li class="submenu"><a href="javascript:void();" class="show-submenu orangeText"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Hi, <?php echo $_SESSION['userName'];?> <i class="icon-down-open-mini"></i></a>
                         <ul>
                             <li><a href="logout.php"><i class="fa fa-sign-out orangeText" aria-hidden="true"></i><strong>Sign out</strong></a></li>
                             <li><a href="javascript:void();" data-toggle='modal' data-target="#changePassword" class="orangeText"><i class="fa fa-lock"></i> Change password</a></li>
                         </ul>
                         </li>
                         <?php
                     }
                         else {
                             ?>
                                  <li><a href="javascript:void();" data-toggle="modal" data-target="#login_2" class="orangeText"><i class="fa fa-user" aria-hidden="true"></i> <b>Login</b></a></li>
                     <li><a href="javascript:void();" data-toggle="modal" data-target="#register" class="orangeText"> <i class="fa fa-sign-in" aria-hidden="true"></i>
 <b>Sign up</b></a></li>
                             <?php
                         }
                    
                     ?>
                     <li><a href="javascript:void();" data-toggle='modal' data-target='#showOrder' class="orangeText"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  <span class="badge"><span class="shopping_cartCount"></span></span></a></li>
                 </ul>
            </div><!-- End main-menu -->
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
     </header>
    <!-- End Header =============================================== -->
        <!-- SubHeader =============================================== -->