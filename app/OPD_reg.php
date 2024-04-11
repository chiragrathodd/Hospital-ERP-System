<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('location:../index');
  return;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../media/logo.png">
  <title>
    Hospital
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />

  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>
</head>

<body class="g-sidenav-show  bg-gray-100">
  <!-- Sidebar -->
  <?php 
  include ('sidebar.php');
  ?>
  <!--sidebar end  -->
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <?php 
    include ('header.php');
    ?>
    <!-- End Navbar -->
    <!-- ====================Body============================= -->
    <div class="row ">
     <div class="col-md-12">
      <div class="home-tab">
       <div class="card">
        <div class="card-body">
          <h5 class="border-bottom"style="color: #e600ac;">OPD Register Reports</h5><br>
          <div class="row">
            <div class="col-md-4 mb-3">
              <i class="mdi mdi-file" style="font-size: 18px; color: ;"><a href="opd_report">OPD Register</a></i>
            </div>
            <div class="col-md-4 mb-3">
              <i class="mdi mdi-file" style="font-size: 18px;"><a href="opd_ayush">Ayush OPD Register</a></i>
            </div>
            <div class="col-md-4 mb-3">
              <i class="mdi mdi-file" style="font-size: 18px;"><a href="opd_referin">Refer in Register</a></i>
            </div>
            <div class="col-md-4 mb-3">
              <i class="mdi mdi-file" style="font-size: 18px;"><a href="opd_referout"> Refer Out Register</a></i>
            </div>
            <div class="col-md-4 mb-3">
              <i class="mdi mdi-file" style="font-size: 18px;"><a href="opd_screening"> Some Screening Register</a></i>
            </div>
            <div class="col-md-4 mb-3">
              <i class="mdi mdi-file" style="font-size: 18px;"><a href="opd_minor">Minor Procedure</a></i>
            </div>
            <div class="col-md-4 mb-3">
              <i class="mdi mdi-file" style="font-size: 18px;  color:green;"><a href="opd_injection">Injection Register</a></i>
            </div>
            <div class="col-md-4 mb-3">
              <i class="mdi mdi-file" style="font-size: 18px;"><a href="opd_stock">Stock Register</a></i>
            </div>            
          </div>


        </div>
      </div>
    </div>
  </div>
  <!-- =====================End Body======================== -->
  <?php 
    // include ('footer.php');
  ?>
</main>
<!--   Core JS Files   -->
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="assets/js/plugins/chartjs.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>