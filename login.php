

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <script src="https://code.jquery.com/jquery-1.11.1.min.js" integrity="sha256-VAvG3sHdS5LqTT+5A/aeq/bZGa/Uj04xKxY8KM/w9EE=" crossorigin="anonymous"></script>
 <!-- <script src="https://kit.fontawesome.com/3563e19d25.js" crossorigin="anonymous"></script> -->

    <title>Audit and Consultancy Form</title>
    <script type="text/javascript">
        $(document).ready(function () {
         $('#login').click(function (){
            
            email=$("#email").val();
            password=$("#password").val();

        

             $.ajax({
        type:"POST",
        url:"lcheck.php",
        data: "&email=" + email + "&password=" + password,
        success: function (html) {
            if (html=='true'){
                $("#add_err2").html('<div class="alert alert-success">\
                    <strong>Authenticated</strong> \ </div>');
                window.location.href ="home.php";
            }else if (html== 'false') {
                $("#add_err2").html('<div class="alert alert-danger">\
                    <strong>Authentication</strong> failure. \\ </div>');
            }else  {
                $("#add_err2").html('<div class="alert alert-danger">\
                    <strong>Error </strong> Processing request. Please try again \\ </div>');
            }



            },
            beforeSend: function () {
                $("#add_err2").html("loading...");
            }
        
     });
             return false;
     });
     });
     </script>
   

    </head>
  <body style="background-image: url(https://accountabilityfirm.com/images/depositphotos-9808899.jpg);">
   
<div class="jumbotron w-75  align-middle shadow-lg  mb-5 bg-black rounded mt-5 " style="margin-left: 12%; margin-right: 5%; height: 450px ;padding: 0px; ">
  
  <div class="row my-0, mx-0 ,py-0, px-0" style="height: 450px; ">
    <div class="col-lg-6 my-0, mx-0 ,py-0, px-0" style="background: rgb(213,210,169);
background: linear-gradient(90deg, rgba(213,210,169,1) 0%, rgba(127,116,76,1) 91%);

">
<img src="egv.png" class="mt-3 ml-3">
<div style="margin-top: 100px">
<h5 class="text-white text-left mx-5" >Get Exclusive Access to</h5>
<h5 class="text-white text-left mx-5" > Audit Tool</h5>
   <p class="text-white text-left mx-5" style="font-size:11px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
   proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
</div>
    </div>
 
  <form class="col-lg-6 bg-white" >
     <button type="button" class="btn mt-3" style="color:#70602e; font-size: 11px; margin-left:55%">Not A Memeber Sign up using SSO</button>
    <h2 class=" text-center" style="color:#614a04;"><strong>Login Form</strong></h1>
    <p style="color:#614a04" class="text-center">Login to go to home page</p>
     <div id="add_err2"></div>
  <div class="form-group " style="margin-top: 5%; color:#614a04 ;font-weight: bold;">
    <!-- <label for="exampleFormControlInput1">EMAIL</label> -->
    <input type="email" class="form-control mt-2 w-75 ml-5" id="email" name="email" placeholder="Enter your email" maxlength="25">
</div>
    <div class="form-group mt-4" style="color:#614a04 ;font-weight: bold;">
     <!--  <label for="inputPassword4">PASSWORD</label> -->
      <input type="password" class="form-control w-75 ml-5" id="password" name="password" maxlength="250" placeholder="Enter password">
    </div>
  <div class="mt-5 " style="margin-left:10%;">
  <button type="submit" class="btn text-white btn px-4 rounded-0" id="login" style="background-color:#70602e; width: 85%; box-shadow: 4px 4px 3px #c7c7c7;" >LOGIN</button>

  <div>
  <a href="#" style=" font-size:11px; margin-left:33%" class="text-dark ">forgot password?</a></div></div>
     <div class="mt-4 text-center" style=" font-size: 25px;">
                <a href="#!" class="text-dark font-weight-bold " ><i class="fab fa-facebook-f "></i></a>
                <a href="#!" class="text-dark font-weight-bold"><i class="fab fa-twitter  mx-4 px-2"></i></a>
                <a href="#!" class="text-dark font-weight-bold"><i class="fab fa-google-plus-g"></i></a>
              </div>
 
</div>
<?php
    if(isset($_GET['logout'])) {
        if ($_GET["logout"] == "true") { ?>
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>You have been logged out of the system</strong>
            </div>
            <?php
        }
    }
    ?>
</form>

</div>

  </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
    
  </body>
</html>



