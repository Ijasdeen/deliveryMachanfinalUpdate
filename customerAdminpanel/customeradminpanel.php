 <?php
session_start();

if(!isset($_SESSION['customerId'])){
    header('location:customerLogin.php');
    exit();
}

?> 

   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
            <meta name="google-site-verification" content="6e4I4nIgeAN76V4hiTr42COfV1fB9rBmQKrsugCIG2w" />
          <title>Delivery Machan || Food Delivery in Kandy || Peradeniya || Katugastota || Madawala ||Menikhinna || Akurana || Digana || Deliverymachan</title>
     <meta charset="utf-8">
  
     <!-- Favicons-->
    <link rel="shortcut icon" href="img/privateImages/finalSmallLogo.png" type="image/x-icon">
       <!-- GOOGLE WEB FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
     <!-- Radio and check inputs -->
    <link href="css/skins/square/grey.css" rel="stylesheet">
     <!-- BASE CSS -->
    <link href="css/base.css" rel="stylesheet">
    
        <link rel="shortcut icon" href="img/privateImages/finalSmallLogo.png" type="image/x-icon">
    <!-- GOOGLE WEB FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Radio and check inputs -->
    <link href="css/skins/square/grey.css" rel="stylesheet">
    <!-- BASE CSS -->
    <link href="../css/base.css" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">

</head>
<body>
   <header>
       <nav class="navbar" id="navbarArea">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php">Delivery Machan</a>
    </div>
     
  </div>
</nav>
   </header>
    <div class="container" style="margin-top:30px;">
        <div class="row">
            <div>
             <div id="customerAdminInner"></div>
            </div>
        </div>
    </div>
    
</body>
</html>