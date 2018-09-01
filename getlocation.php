<?php
 
?>
<div class="container">
<button onclick="getLocation()">Get my location</button>
<br><br><br><br>
    <div class="Element">
    <div id="map">
         <?php
        $lat = echo $row['latitude'];
        $long = echo $row['longtidude'];
        echo $lat; 
        echo $long;
        $totalMap = $lat.','.$long;
        ?>
        
         <div style="width: 100%"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&height=400&hl=en&q='<?php echo $totalMap?>'&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="mymap"></iframe></div><br />
    </div>

   <p id="demo"></p>
   <div class="modal fade" id="locationModal">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <div class="close" data-toggle='modal'>&times;</div>
               </div>
               <div class="modal-body"></div>
               <div class="modal-footer"></div>
           </div>
       </div>
   </div>
   
   
  <script src="js/geolocation.js"></script>

<?php require_once('connection/connesction.php')?>