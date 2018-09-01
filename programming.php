<?php
require_once('connection/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <link href="css/base.css" rel="stylesheet">
     
     <style>
         .area-income{
             margin-top: 30px;
         }
    </style>
</head>
<body>
    <img src="img/privateImages/devon-bakers-deliveymachan.png" alt="">
     <div class="container">
	<div class="row">
		 <form method="POST" id="enterData" action="programmingaction.php" autocomplete="on">
		 	<div class="form-group">
		 		<label>Select Restaurant</label>
		 		<select class="form-control" id="restaurantName" name="restaurantName" required>
		 			<option value="">--Select restaurant</option>
		 			<?php
		 			$query="select * from restaurants";
		 			$result=mysqli_query($connection,$query);
		 			while($row=mysqli_fetch_array($result)){
		 				?>
		 				<option value="<?php echo $row[0]?>"><?php echo $row['restaurant_name']?></option>
		 				<?php

		 			}
		 			?>
		 		</select>
		 	</div>
		 	<div class="form-group">
		 		<label>Product name</label>
		 		<input type="text" class="form-control" name="productName" id="productName" required autocomplete="on">
		 	</div>
		 	<div class="form-group">
		 		<label>Product price</label>
		 		<input type="text" class="form-control" name="productPrice" id="productPrice" required autocomplete="on">
		 	</div>
		 	 
		 	<div class="form-group">
		 		<label>Category</label>
		 		<input type="text" class="form-control" name="category" id="category" required autocomplete="on">
		 	</div>
		 	<div class="form-group">
		 		<label>Product Img</label>
		 		<input type="file"  class="" id="productImg" name="productImg">
		 	</div>
		 	<div class="form-group">
		 		<label>Description</label>
		 		<input type="text" class="form-control" name="description" id="description" required autocomplete="on">
		 	</div>
		 <div class="form-group">
		 	<input type="submit" class="btn btn-primary" id="btn" required>
		 </div>
		 </form>
	</div>
</div>
</body>
</html>