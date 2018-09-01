<?php require_once('includes/header.php')?>
<div class="container" style="margin-top:30px;">
    <div class="row">
        <div class="col-md-12">
            <div class="center">
                <form method="POST" id="adminLogin">
                 <div class="form-group">
                     <label for="userName">User name :</label>
                     <input type="text" class="form-control" placeholder="Put your user name" id="adminUserName" required>
                     
                 </div>
                 <div class="form-group">
                    <label for="Password">Password :</label>
                    <input type="password" class="form-control" placeholder="Put your password here" id="adminPassword" required> 
                 </div>
                 <div class="form-group">
                    <input type="submit" class="form-control btn btn-success" value="Login into admin">
                 </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php require_once('includes/footer.php')?>