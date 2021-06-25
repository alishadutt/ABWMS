<?php
 include 'functions.php';
 include 'login.php';




?>


<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ABWMS</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="assets/styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="assets/styles/extras.1.1.0.min.css">
    <link rel="stylesheet" type="text/css" href="assets/styles/login.css">
  </head>
  <body class="h-100">
  
   
      <div class="container h-100">
    <div class="d-flex justify-content-center h-100">
      <div class="user_card">
        <div class="d-flex justify-content-center">
          <div class="brand_logo_container">
            <img src="assets/images/logo.jpg" class="brand_logo" alt="Logo">
          </div>
        </div>
        <div class="d-block justify-content-center form_container p-4">
        <span id="error" class="text-white bg-danger"></span>
          <form method="post" id="loginform" name="loginform">
            <div class="input-group mb-3">
              <div class="input-group-append">
              </div>
              <input type="text" name="username" id="username" autocomplete="off" class="form-control input_user" value="" placeholder="Username">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-append">
              </div>
              <input type="password" name="pswrd" id="pswrd"  autocomplete="off"class="form-control input_pass" value="" placeholder="Password">
            </div>
            
              <div class="d-flex justify-content-center mt-4 pl-5 pr-5 login_container">
          <button type="submit" name="login" class="btn login_btn">Login</button>
           </div>
          </form>

           <div class="clearfix">
          <div class="float-right pt-2 pb-2">
            <a href="#" class="forgot_link">Forgot password?</a>
          </div>
        </div>
    
       
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
// var a="enabled";
// console.log(a);

// function validate() {
//                     console.log("coming here for login");
//                     var a = document.forms["loginform"]["username"].value;
//                     var b = document.forms["loginform"]["pswrd"].value;
//                     if ((a == null || a == "") && (b == null || b == "")) {
//                         console.log("All Field must be filled out");
//                         return false;
//                     }
//                     if (a == null || a == "") {
//                         console.log("Username must be filled out");
//                         document.getElementById('username').focus();
//                         return false;
//                     }

//           var form=$('#loginform');
//           $url='login.php';
          

//           $.ajax({
//             type:"POST",
//             url: $url,
//             data: form.serialize(),
//             success:function(data){
//               console.log(data);
//             }

//           });

                
// }                   

</script>
</body>
</html>
            
