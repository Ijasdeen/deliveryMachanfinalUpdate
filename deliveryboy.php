    <?php
  session_start();
  
if(!isset( $_SESSION['ridersName'])){
        header('location:deliverboyLogin.php');
  }

session_destroy();
?>
     
       <?php require_once('includes/header.php')?>
   
        
         <div class="container" id="indexLocation">
            <div class="row">
                <h3 class="text text-danger">You are logged in as
                    <?php if(isset($_SESSION['adminName'])) echo $_SESSION['adminName'];?>
                </h3>
                <div class="col-md-12">
                   
                    <div class="text text-center">
                        <h3><i class="fa fa-bell" aria-hidden="true"></i><span class="badge badge-danger" id="totalOrderCount">0</span></h3>
                    </div>
                    <button class="btn btn-info" id="adminPanelRefresh">Refresh</button>
                    <br><br>
                    <form action="adminpanel.php" method="POST">
                        <input type="submit" name="logout" value="LOGOUT" class="btn btn-danger">
                    </form>
                    <div id="bikerInner">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="showMap">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>The person current location</h3>
                    </div>
                    <div class="modal-body">
                        <div class="area"></div>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="allDeleteMessage">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"></div>
                    <div class="modal-body">
                        Are you sure to delete All data?
                        <br>
                        <p class="text text-danger"><b>Note : If you delete all once, you will never be able to get the data back</b></p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" id="deleteAdminAllData" data-dismiss='modal'>Delete</button>
                        <button class="btn btn-default" data-dismiss='modal'>Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <audio id="BellAudio">
     <source src="bellsound/Elevator-door-sound/doorsound.mp3" type="audio/mpeg">
 </audio>
        <script src="js/geolocation.js"></script>

        <?php require_once('includes/footer.php')?>
        <script>
            $(document).ready(function() {
                soundArea();
                $('#testingButton').click(function() {
                    soundArea();
                })

                function soundArea() {
                    $.ajax({
                        url: 'action.php',
                        method: 'POST',
                        data: {
                            enableCountOrder: 1
                        },
                        cache: false,
                        success: function(data) {
                            $('#totalOrderCount').html(data);

                            if (data == 'available') {
                                $("#BellAudio")[0].play();

                            } else {
                                console.log(data);
                            }

                        },
                        error: function(err) {
                            console.log(err);
                        }
                    });
                }

            })
        </script>