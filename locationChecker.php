<?php
require_once('includes/header.php');

?>


<div class="container" style="margin-top:30px;">
<button class="btn btn-danger" id="getPositionButton">Get position button</button>
    <button class="btn btn-info" id="watchPositionButton">Watch positon button</button>
    <button class="btn btn-success" id="stopButton">Stop button</button>
</div>

<?php

require_once('includes/footer.php');

?>
<script src="js/jquery.geolocation.js"></script>

 <script>
$(function(){
   function alertMyPosition(position) {
	alert("Your position is " + position.coords.latitude + ", " + position.coords.longitude);
}

function noLocation(error) {
	alert("No location info available. Error code: " + error.code);
}

$('#getPositionButton').on('click', function() {
	$.geolocation.get({win: alertMyPosition, fail: noLocation});
});

$('#watchPositionButton').on('click', function() {
	// alertMyPosition is called each time the user's position changes
	myPosition = $.geolocation.watch({win: alertMyPosition}); 
});

$('#stopButton').on('click', function() {
	$.geolocation.stop(myPosition);
});
    
    
});
</script>
