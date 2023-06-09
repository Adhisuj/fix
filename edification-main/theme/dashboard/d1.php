<!DOCTYPE html>
<html lang="en">
<head>

  <title> </title>

  <link rel="canonical" href="https://blog.appseed.us/bootstrap-for-beginners-with-examples/" />

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap CSS End -->
    <!-- Main CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Main CSS End -->
    <!-- Bootstrap Icons Start -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Bootstrap Icons End -->
    <link rel="stylesheet" href="darkmode.css">
    <script src="script.js">

    </script>

    <script src="darkmode.js">
    
    </script>
    <script src="min.js">

    </script>

</head>
<body>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <!-- Sidebar Trigger Start -->
    <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas"><span class="navbar-toggler-icon"></span></button>
    <!-- Sidebar Trigger End -->
    <a class="navbar-brand fw-bold me-auto" href="#">DASHBOARD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex ms-auto">
          <div class="input-group my-3 my-lg-0">
              <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
            </div>
      </form>
      <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-square"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#"> profile</a></li>
              <li><a class="dropdown-item" href="#">Admin sujan</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"> logout</a></li>
            </ul>
          </li>
        </ul>
    </div>
  </div>
</nav>             
<!-- Navbar End -->

<!-- Sidebar Start -->
<div class="offcanvas offcanvas-start bg-dark text-white side-bar" data-bs-scroll="true" tabindex="-1" id="offcanvas" aria-labelledby="offcanvas">
  <div class="offcanvas-body p-0">
    <nav class="navbar-dark">
      <ul class="navbar-nav">
        <li>
          <div class="text-muted small fw-bold text-uppercase px-3">Admin sujan adhikari</div>
        </li>
        <li>
          <a href="#" class="nav-link px-3 active">
            <span class="me-2">
              <i class="bi bi-wrench-adjustable-circle"></i>
            </span>
            <span class="fw-bold">Dashboard</span>
          </a>
        </li>
        <li class="my-4">
          <hr class="dropdown-divider">
        </li>
        <li>
          <div class="text-muted small fw-bold text-uppercase px-3">home</div>
        </li>
        <li>
          <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <span class="me-2"><i class="bi bi-layout-text-window-reverse"></i></span>
            <span class="fw-bold">Layouts</span>
            <span class="right-icon ms-auto">
              <i class="bi bi-chevron-down"></i>
            </span>
          </a>
          <div class="collapse" id="collapseExample">
            <div>
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="#" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-layout-text-window-reverse"></i></span>
            <span class="fw-bold">Nested Link</span>
                  </a>                  
                </li>
              </ul>
            </div>
          </div>
          
          <li>
          <a href="#" class="nav-link px-3">
            <span class="me-2">
              <i class="bi bi-archive"></i>
            </span>
            <span class="fw-bold">Archive</span>
          </a>
        </li>
        <li class="my-4">
          <hr class="dropdown-divider">
        </li>
        <li>
          <div class="text-muted small fw-bold text-uppercase px-3">Addons</div>
        </li>
        <li>
          <a href="#" class="nav-link px-3">
            <span class="me-2">
              <i class="bi bi-activity"></i>
            </span>
            <span class="fw-bold">Activity</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link px-3">
            <span class="me-2">
              <i class="bi bi-clipboard2-data"></i>
            </span>
            <span class="fw-bold">Data</span>
          </a>
        </li>
        <li class="my-4">
          <hr class="dropdown-divider">
        </li>
        <div class="custom-control custom-switch px-3">
          <label class="custom-control-label" for="darkSwitch">
          <span class="fw-bold">
            <i class="bi bi-moon me-2"></i>
            Dark Mode</span>
          </label>
          <input type="checkbox" class="custom-control-input checkbox ms-auto" id="darkSwitch">
        </div>
        <li class="my-4">
          <hr class="dropdown-divider">
        </li>
        <li>
          <a href="#" class="nav-link px-3">
            <span class="me-2">
              <i class="bi bi-info-circle"></i>
            </span>
            developed by
            <span class="fw-bold">adhikarikashayap</span>
          </a>
        </li>
      </li>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- Sidebar End -->

<!-- Main Content Start -->
<main class="mt-5 pt-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 fw-bold fs-3">Dashboard</div>
    </div>
    <div class="row mt-2">
      <div class="col-md-3 mb-3">
        <div class="card text-white bg-primary h-100">
          <div class="card-header fw-bold" style="background-color: rgb(0, 0, 0);">learning management system </div>
          <div class="card-body">
            <h5 class="card-title">HTML CSS JAVA SCRIPT AND SQL USING XAMPP SERVER</h5>
            <p class="card-text">created by sujan adhikari from sikkim</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card text-white bg-success h-100">
          <div class="card-header fw-bold" style="background-color: black;">BEST LANGUAGE WEBDEVELIPMENT</div>
          <div class="card-body">
            <h5 class="card-title">HTML CSS JS NODE JS DJANGO</h5>
            <p class="card-text">ADHIKARISUJ1234@GMAIL.COM</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-3">
  
        <div class="card text-white bg-warning h-100">
          <div class="card-header fw-bold" style="background-color: BLACK;">Profile</div>
          <div class="card-body">
            <h5 class="card-title">webdeveloper SUJAN KASHAYAP</h5>
         <p> Admin sujan KASHAYAP</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card text-white bg-danger h-100">
          <div class="card-header fw-bold" style="background-color: black;">Some Project by Sujan KASHAYAP</div>
          <div class="card-body">
            <h5 class="card-title">sql taks </h5>
            <p class="card-text">DJANGO : store data in data base in html table</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-6">
        <div class="card-chart">
          <div class="card-header" style="background-color: aqua;">resourses used</div>
          <div class="card-body">
           <h2>
            HTML CSS JS NODE JS SQL ETC
           </h2><hr>
           <h1 style="color: rgb(23, 216, 65);"> 
            Admin @ </h1>
                  <h2 style="color: red;">sujan</h2>  
                                     <h3 style="color: rgb(10, 6, 1);">KASHAYAP</h3>
           </h1>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card-chart">
          <div class="card-header" style="background-color: aqua;">sample paper updations</div>
          <div class="card-body">
          <div class="container">
      <h1>Upload Your File</h1>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="upload-btn-wrapper">
          <button class="btn">Select a file to upload</button>
          <input type="file" name="image" />
        </div>
        <input type="submit" class="submit-btn" value="Upload">
      </form>
    </div>
          <?php

if(isset($_FILES['image'])){
 /*echo "<pre>";
  print_r($_FILES);
  echo  "</pre >";*/
    
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
$file_tmp = $_FILES['image']['tmp_name'];
$file_type = $_FILES['image']['type'];

if(move_uploaded_file($file_tmp,"upload-images/". $file_name)){
    echo "<script> alert(' File uploaded Successfully');</script>";
}
else{
  echo "<script>alert(' Could not upload the file');.</script>";
}


}
?>
    <div class="row mt-2">
      <div class="col-md-12">
        <div class="card-table">
          <div class="card-header">
            Datatables
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table data-table" style="width:100%">
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>feed back</th>
                    <th></th>
                    </tr>
                    <tr>
                      <td>
                        <td>

                        </td>
                      </td>
                    </tr>
                    </tfoot>
                    </table>
                    <table id="example" class="table data-table" style="width:100%">
                    <tr>
                      <th>
                        first name :
                      </th>
                      <th>
                       last name :
                      </th>
                      <th>
                        Email name :
                      </th>
                      <th>
                        password name :
                    </th>
                    </tr>
                    </table>
                </tfoot>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
  </div>
</main>
<!-- Main Content End -->

<!-- Scripts Start -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
<script src="/js/script.js"></script>
<script src="/js/dark-mode-switch.min.js"></script>
<!-- Scripts End -->

</body>
</html>
<?php

