<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $username = $_SESSION['username'];
    

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="sso_style.css">
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

    <title>Home</title>
    

  </head>
  <body style="background-color:#e8eded">
    
   <!-- Navigation -->
    <?php require_once 'navigation.php' ?>
  
    <nav aria-label="breadcrumb" style="margin-left: 200px; " >
  <ol class="breadcrumb bg-light mt-1" >
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    
  </ol>
</nav>

<div class="ml-5">

<h2 class="text-center ml-2 my-3" style="text-transform: uppercase; font-size:
24px">Welcome <?php echo $username; ?></h2>
<div class="container pl-0" style="margin-left:16%">
<div class="row row-cols-1 row-cols-md-3">
 
  <!-- <div class="card mb-3 mr-3 bg-info" style="max-width:20rem; "> -->
    <div class="card mb-3 mr-3 bg-info border-0" style="max-width:20rem; box-shadow: 5px 5px 3px grey;">
      <div class="card-header text-light " style="font-weight: 700; background-color: #123b5e; ">AUDIT STATUS</div>
  <div class="card-body bg-light" >

<div class="btn-group-vertical text-dark" style="width:97%">
  <button type="button" class="btn btn-outline-dark b ">Planned</button>
  <button type="button" class="btn btn-outline-dark b">Completed</button>
  <button type="button" class="btn btn-outline-dark b">In Progress</button>
  <button type="button" class="btn btn-outline-dark b">Hold</button>
</div>
  </div>
</div>
<!--    <div class="card bg-light mb-3 mr-2" style="max-width: 22rem;">
  <div class="card-header" style="font-weight: 700;">RISK MATRIX</div>
  <div class="card-body p-0 m-2">
  <div id="myPlot" style=" font-size: 12px;" ></div>
  </div>
</div>
 -->  <!--  <div class="card mb-3 mr-3" style="max-width: 20rem; background-color: #e6cc09;"> -->
   <div class="card mb-3 mr-3" style="max-width: 20rem;  box-shadow: 5px 5px 3px grey;">
  <div class="card-header text-white" style="font-weight: 700; background-color: #123b5e;">AUDITOR'S ENGAGE</div>
  <div class="card-body pt-0 bg-light">
    <div class="row mb-3">
    <h5 class="card-title text-center pt-2 ml-3 text-dark font-weight-bolder mt-2" style="font-size: 14px; text-transform:uppercase;"><?php echo $username; ?></h5>
    <button type="button" class="btn mt-2 btn-sm py-1" style="margin-left:60%; background-color: #123b5e;" id="Button1"><i class="fa fa-plus text-white" aria-hidden="true"></i></button>
    </div>
    <div id="inner">
    <div class="row" id="add">

    <div class=" mb-3 p-0 pr-0 mr-0 col-lg-8">
      
      <input type="text" class="form-control w-75" id="validationDefault05" placeholder="Project assigned">
    </div>
    <div class=" mb-3   col-lg-4 ml-0 px-0">
      
      <select class="custom-select" id="validationDefault04 " style="width: 100%">
        <option selected disabled value="">Status</option>
        <option>Planned</option>
        <option>Completed</option>
        <option>In Progress</option>
        <option>On Hold</option>
      </select>
    </div>
</div>
  </div>
</div>
</div>
  <!--  <div class="card mb-3 mr-2" style="max-width: 20rem; background-color:#d65a45"> -->
    <div class="card mb-3 mr-2" style="max-width: 20rem; box-shadow: 5px 5px 3px grey;">
  <div class="card-header text-white" style="font-weight: 700; background-color: #123b5e;">TAT</div>
  <div class="card-body text-dark bg-light">
    <h5 class="card-title">Light card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="card bg-light mb-3 mr-2 ml-0 pl-0" style="max-width: 47rem; box-shadow: 5px 5px 3px grey;">
  <div class="card-header text-white" style="font-weight: 700; background-color:#123b5e;">RISK MATRIX</div>
  <div class="card-body bg-light p-0 m-2">
  <div id="myPlot" style=" font-size: 12px;" ></div>
  </div>
</div>
</div>
</div>
<script>
var xArray = [50,60,70,80,90,100,110,120,130,140,150];
var yArray = [7,8,8,9,9,9,10,11,14,14,15];

// Define Data
var data = [{
  x: xArray,
  y: yArray,
  mode:"lines"
}];

// Define Layout
var layout = {
    width:730,
    height:300,
    padding:0,
  xaxis: {range: [40, 160], title: "Risk" ,titlefont: { size:12 },},
  yaxis: {range: [5, 16], title: "Probablity" ,titlefont: { size:12 },},  
  title: "Risk vs. Probablity", titlefont: { size:14 }
};

// Display using Plotly
Plotly.newPlot("myPlot", data, layout);
</script>
<script>
    $(document).ready(function () {
        $('#Button1').on('click', function () {
            $('#add')
                .clone()
                
                .appendTo("#inner");
        });
    });
</script>

    
    

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>
<?php

} else {
    header("location:login.php ");
}
?>