<?php include 'connection/dbconn.php';  
      include 'access.php'; pageLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umutang</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
    <div class="login ">
       <div class="row">
            <div class="login-cover">
                <img class="login-img" id="login-img"  src="assets/3.jpg">
            </div>
            <div class="login-div animate__animated animate__fadeIn">
                <form id="loginForm" method="post" enctype="multipart/form-data">
                    <center>
                        <img class="logo-img"  height="100vh" src="assets/logo.PNG">
                    </center>
                    <p class="login-semi-title">Welcome back Ma’am/Sir</p>
                    <p class="login-title">Login to your account</p>
                    <div class="error" id="error">
                        <p>Wrong username or password</p>
                    </div>
                        <input class="login-input" onclick="hideError()" maxlength="20" type="text"  name="username" placeholder="Username"  required><br>
                    <div>
                        <input id="password" class="login-input" onclick="hideError()" maxlength="20" type="Password" name="password" placeholder="Password" required>
                        <img id="hide-unhide" class="hide-unhide" onclick="unhide()" src="assets/show.png">
                    </div>
                    
                    <p class="forgot">Forgot password?</p>
                    <button class="login-btn" type="submit">Login now</button>
                <form>
            </div>
       </div>
    </div> 
</body>
</html>
<script>
    $('#loginForm').submit(function(e){
        e.preventDefault();
        var fdi = new FormData(this);
        $.ajax({
            url:'login/login.php',
            method:'post',
            data:fdi,
            cache:false,
            contentType:false,
            processData:false,
            success:function(data){
               if(data == 'success') window.location="http://localhost/UMUTANG/dashboard.php";
               else {$('#loginForm').trigger("reset");
                     $('#error').css('display','block');};
            }
        });
    })
    function hideError(){
        $('#error').css('display','none');
    }

    let switchStatus = false;
    function unhide() {
        
         if(switchStatus == false){
            $("#hide-unhide").attr("src","assets/hide.png");
            $('#password').attr('type','text');
             switchStatus = true;
         }
        else if(switchStatus === true){
            $("#hide-unhide").attr("src","assets/show.png");
            switchStatus = false;
            $('#password').attr('type','password');
        }
    }
</script>

<style>
    body{
    height: 100%;
    overflow-y:hidden; 
    }
      
</style>