<?php
  session_start();
if(!isset($_SESSION['adminName'])){
     header('location:adminLogin.php');
  
 }
else {
    session_destroy();
}

?>
    <?php require_once('includes/header.php')?>

    <?php
if(isset($_POST['logout'])){
    session_start();
    session_destroy();
    echo '<script>window.location.href="adminLogin.php"</script>';
}

?>
        <?php
$_SESSION['adminName']='Riyaz';
?>
<!--       Modal trigger -->
<!--
       <div class="modal fade" id="changePassword">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">Change password</div>
                    <div class="modal-body">
                        <form method="POST" id="adminChangePassword">
                            <div class="form-group">
                                <input type="text" class="form-control" id="userAdminName">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="userAdminPassword">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-info btn-sm">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                     <span class="text text-danger">Location changer</span>
                    </div>
                </div>
            </div>
       </div>
-->
       
<!--       Modal trigger-->
        <div class="container" id="indexLocation">
            <div class="row">
                <h3 class="text text-danger">You are logged in as
                    <?php if(isset($_SESSION['adminName'])) echo $_SESSION['adminName'];?>
                </h3>
                <div class="col-md-12">
                    <div class="pull-right">
                        <button class="btn btn-danger" data-toggle='modal' data-target="#allDeleteMessage">Delete All data <i class="fa fa-trash" aria-hidden="true"></i></button>
                    </div>
                    <div class="text text-center">
                        <h3><i class="fa fa-bell" aria-hidden="true"></i><span class="badge badge-danger" id="totalOrderCount">0</span></h3>
                    </div>
                    <br><br>
                    <button class="btn btn-info btn-sm" id="adminPanelRefresh">Refresh</button>
                    <br><br>
                    <button class="btn btn-onfo" id="#changePassword" data-toggle='modal'>Change password</button>
                    <br/><br/>
                    <form action="adminpanel.php" method="POST">
                        <input type="submit" name="logout" value="LOGOUT" class="btn btn-danger">
                    </form>
                    <div id="adminPanelInner">
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