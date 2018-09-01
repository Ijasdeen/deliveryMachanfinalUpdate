<?php
require_once('connection/connection.php');

if(isset($_POST['restaurantName']) && isset($_POST['productName']) && isset($_POST['productPrice']) && isset($_POST['category']) && isset($_POST['productImg']) && isset($_POST['description'])){

	$restaurantName = mysqli_real_escape_string($connection,$_POST['restaurantName']);
	$productname = mysqli_real_escape_string($connection,$_POST['productName']);
	$productPrice= mysqli_real_escape_string($connection,$_POST['productPrice']);
	$category = mysqli_real_escape_string($connection,$_POST['category']);
	$productImg = mysqli_real_escape_string($connection,$_POST['productImg']);
	$description = mysqli_real_escape_string($connection,$_POST['description']);
  

 $query="INSERT INTO menus values('','$restaurantName','$productname','$productPrice','$category','$productImg','$description')";

$result=mysqli_query($connection,$query);     
    
 if($result){
 	echo 'It works';
 	echo "<script>alert('Saved successfully')</script>";
 	echo "<script>window.location.href='programming.php'</script>";
 }
 else {
 	echo mysqli_error($connection);
 }


}
else {
	echo mysqli_error($connection);
}
?>

?>