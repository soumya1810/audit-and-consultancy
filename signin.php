

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js" integrity="sha256-VAvG3sHdS5LqTT+5A/aeq/bZGa/Uj04xKxY8KM/w9EE=" crossorigin="anonymous"></script>

    <title>Audit and Consultancy Form</title>
    <script type="text/javascript">
        $(document).ready(function () {
         $('#signin').click(function (){
            username=$("#username").val();
            email=$("#email").val();
            password=$("#password").val();

        

             $.ajax({
        type:"POST",
        url:"adduser.php",
        data: "username=" +username +  "&email=" + email + "&password=" + password,
        success: function (html) {
            if (html=='true'){
                $("#add_err2").html('<div class="alert alert-success">\
                    <strong>Account</strong> processed. \\ </div>');
                window.location.href ="home.php";
                
        

            }else if (html== 'false') {
                $("#add_err2").html('<div class="alert alert-danger">\
                    <strong>Email Address</strong> already in system. \\ </div>');
            }else if (html== 'username') {
                $("#add_err2").html('<div class="alert alert-danger">\
                    <strong>username</strong> is required \\ </div>');
            }else if (html== 'email') {
                $("#add_err2").html('<div class="alert alert-danger">\
                    <strong>email address </strong> is required \\ </div>');
            }else if (html== 'eshort') {
                $("#add_err2").html('<div class="alert alert-danger">\
                    <strong>email address </strong> is required \\ </div>');
            }else if (html== 'eformat') {
                $("#add_err2").html('<div class="alert alert-danger">\
                    <strong>email address </strong> format not valid \\ </div>');
            }else if (html== 'pshort') {
                $("#add_err2").html('<div class="alert alert-danger">\
                    <strong>password </strong> must be atleast 4 characters. \\ </div>');
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
  <body>
    <div class="jumbotron jumbotron-fluid mt-5" style="padding-bottom: 1%; padding-top: 0.5%;">
  <div class="container">
    <h1 class="display-4 text-center">Audit and Consultancy Form</h1>
   
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


<div class="jumbotron w-50 h-50 align-middle shadow-lg p-3 mb-5 bg-black rounded" style="margin-left: 25%;">
  <form>
    <div id="add_err2"></div>
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="enter your username" maxlength="25">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" maxlength="25">
    <div class="form-group col-md-6">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" maxlength="10">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" id="signin">signin</button>
</form>

  </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
    
  </body>
</html>