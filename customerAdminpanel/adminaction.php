<?php
require_once('../connection/connection.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    
require_once('../validateData.php'); 
session_start();
 
   if(isset($_POST['enableLogin']) && isset($_POST['userName']) && isset($_POST['userpassword'])){
       $userName = mysqli_real_escape_string($connection,validateData($_POST['userName']));
       $password = mysqli_real_escape_string($connection,validateData($_POST['userpassword']));
       
       $query="select * from registeredrestaurant where adminName='$userName' AND adminPassword='$password'";
       $result=mysqli_query($connection,$query);
       if($result){
           $_SESSION['customerId']=$userName; 
           echo 'yes';
           
       }
       else {
           echo 'no';
           exit();
       }
   }
    
    
      
    
} //End post 


mysqli_close($connection)

?>