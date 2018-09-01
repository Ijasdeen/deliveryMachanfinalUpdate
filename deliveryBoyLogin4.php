<?php require_once('includes/header.php')?>
<div class="container" style="margin-top:30px">
    <div class="row">
   <div>
       <form method="POST" id="driverLogin" class="driverLogin">
           <div class="form-group">
               <label for="userName">User name :</label>
               <input type="text" class="form-control" id="userName" required>
           </div>
           <div class="form-group">
               <label for="password">Password :</label>
               <input type="password" class="form-control" id="userPassword" required>
           </div>
           <div class="form-group">
               <input type="submit" class="form-control btn btn-info" value="LOGIN">
           </div>
       </form>
   </div>
        
         </div>
</div>

<?php require_once('includes/footer.php')?>
<script>
$('.driverLogin').submit(function(event){
     event.preventDefault();
    let userName = $('#userName').val();
    let password = $('#userPassword').val();
   
    $.ajax({
        url:'action.php',
        method:'POST',
        data:{driverLogin4:1,userName:userName,password:password},
        success:function(data){
           if(data=='yes'){
               window.location.href='deliveryBoy.php';
           }
            if(data=='no'){
                alert('user name or password incorrect');
            }
            console.log(data);
        },
        error:function(err){
            console.log(err);
        }
    });
    
})
</script>