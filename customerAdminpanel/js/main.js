$(document).ready(function () {
 
    $('#login').submit(function(event){
        event.preventDefault();
        let userName = $('#userName').val();
        let userpassword = $('#userpassword').val();
        let userKey = $('#userKey').val();
        
         $.ajax({
            url:'adminaction.php',
            method:'POST',
            data:{enableLogin:1,userName:userName,userpassword:userpassword,userKey:userKey},
            success:function(data){
                window.location.href='customeradminpanel.php';
            },
            error:function(err){
                console.log(err);
            }
        });
        
        
    });
    
});