<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-left: 200px;">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto text-dark" style="margin-left: 0%">
      <li class="nav-item ">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="newaudit.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          New Audit
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="preanalysis.php">Pre Analysis</a>
          <a class="dropdown-item" href="#">Field Work</a>
          <a class="dropdown-item" href="#">Reporting</a>
        </div>
      </li>
       <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Implement
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Scope</a>
          <a class="dropdown-item" href="#">Gap Analysis</a>
          <a class="dropdown-item" href="#">Gap Implementation</a>
          <a class="dropdown-item" href="#">Internal Audit</a>
          <a class="dropdown-item" href="#">Risk</a>
          <a class="dropdown-item" href="#">Rsik Management</a>


        </div>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Report
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Report Review</a>
          <a class="dropdown-item" href="#">Report Sign</a>
          <a class="dropdown-item" href="#">Report Publish</a>
          <a class="dropdown-item" href="#">Export Option</a>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">Client<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">IT Admin <span class="sr-only">(current)</span></a>
      </li>
     
    </ul>

    <ul class="nav navbar-nav navbar-toggler-right">
        
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="fa fa-user" aria-hidden="true"></i>
            Logout
          </a>
        </li>
      </ul>
   
  </div>
</nav>




















<div class="sidenav pt-0 bg-dark" >
  <div class="container" style="height: 14%; background-color: #1f2021;">
  <img src="egv.png" style="padding-left: 15%; width: 75%; height: 90%" class="pb-4 mt-3 ml-0 mb-3">
</div>
<hr style="color:white; font-weight: bold;" class="bg-light mt-0">
<div class="row">
  <h5 class="text-light pb-3 mt-2 ml-4" style="font-size:18px;">AUDIT LIBRARY</h5>

<button type="button" class="btn mt-2 btn-sm bg-light h-25 ml-4 open-button" onclick=" openForm()" id="show"><i class="fa fa-plus text-dark" aria-hidden="true"></i></button>
    </div>

   <div class="loginPopup ">
<div class="center hideform1 bg-light formPopup1  ml-2  mb-2" style="display:none; width: 85%;"  id="popupForm">
   
    <form action="/home.php" class="formContainer1  mr-0" >
      <div class="bg-info">
        <p style="font-size: 14px;" class="text-center font-weight-bolder text-white mb-2 py-1">ADD REPORT</p></div>
         
          <input type="text" id="email" placeholder="Report Name" name="rn" required class=" form-control border-top-0 border-left-0 border-right-0 bg-light small ml-2 mb-1" aria-describedby="report" style="width:80%; font-size:12px">
         
        <!--   <input type="date" class="form-control border-top-0 border-left-0 border-right-0 bg-light small ml-2"  aria-describedby="start_date" name="date" id="myDate1" placeholder="date" value="date" required style="width:80%; font-size:12px;"> -->
        <div class="row ml-2  ">
          <select class="form-control form-control-sm col-4 border-top-0 border-left-0 border-right-0 bg-light mr-2" style="font-size:12px, .form-control">
  <option muted>Month</option>
    <option >January</option>
    <option >February</option>
    <option >March</option>
    <option >April</option>
    <option >May</option>
    <option >June</option>
    <option >July</option>
    <option >August</option>
    <option >Semptember</option>
    <option >October</option>
    <option >November</option>
    <option >December</option>


</select>
<select class="form-control form-control-sm col-4 border-top-0 border-left-0 border-right-0 bg-light " style="font-size:12px">
  <option muted>Year</option>
  <option>2014</option>
  <option>2015</option>
  <option>2016</option>
  <option>2017</option>
  <option>2018</option>
  <option>2019</option>
  <option>2020</option>
  <option>2021</option>
  <option>2022</option>
  <option>2023</option>
  <option>2024</option>
  <option>2025</option>

  
</select>
        </div>
          <div class="row">
          <button type="submit" class="btn btn-outline-info  py-1 px-2 ml-5  my-2" style="font-size:12px; margin-left: 35%;">Add</button>
          <button id="close" class="btn btn-outline-danger  py-1 px-2 ml-2  my-2" style="font-size:12px; margin-left: 20%;">Exit</button></div>
    </form>
</div>
</div>









  <button class="dropdown-btn" style="font-size: 14px;">2020 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container" style="font-size: 14px;">
      <button class="dropdown-btn" style="font-size: 14px;">January 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container" style="font-size: 14px;">
        <a href="#" style="font-size: 14px;">Report ID 1</a>
        <a href="#" style="font-size: 14px;">Report ID 2</a>
      </div>

      <button class="dropdown-btn" style="font-size: 14px;">February 
          <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container" style="font-size: 14px;">
        <a href="#" style="font-size: 14px;">Report ID 1</a>
        <a href="#" style="font-size: 14px;">Report ID 2</a>
      </div>
   

  </div>
  <button class="dropdown-btn" style="font-size: 14px;">2021 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container" style="font-size: 14px;">
      <button class="dropdown-btn" style="font-size: 14px;">January 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container" style="font-size: 14px;">
        <a href="#" style="font-size: 14px;">Report ID 1</a>
        <a href="#" style="font-size: 14px;">Report ID 2</a>
      </div>

      <button class="dropdown-btn" style="font-size: 14px;">February 
          <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container" style="font-size: 14px;">
        <a href="#" style="font-size: 14px;">Report ID 1</a>
        <a href="#" style="font-size: 14px;">Report ID 2</a>
      </div>
  </div>
</div>
<script>
// function openForm() {
//   document.getElementById("myForm").style.display = "block";
// }

// function closeForm() {
//   document.getElementById("myForm").style.display = "none";
// }

$('#show').on('click', function () {
    $('.center').show();
    $(this).hide();
})

$('#close').on('click', function () {
    $('.center').hide();
    $('#show').show();
})
</script>
 
 <script>

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
<script>
function myFunction() {
  var x = document.getElementById("myDate1").value;
  
}
</script>