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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
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
        <h2 class="btn btn-outline" style="color:#e600ac; font-size:15px;">
      ANC Register
    </h2>
    <div class="d-sm-flex align-items-center   justify-content-between border-bottom">
     <ul class="nav nav-tabs" role="tablist">

      <li class="nav-item">
        <a class="nav-link"  data-bs-toggle="" href="user" role="tab" aria-selected="true" style=" font-size:14px;">User List</a>
      </li>
    </ul>
  </div><br>
  <div class="row">
   <div class="col-sm-12">
    <div class="home-tab">
     <div class="card">
      <div class="card-body">

       <div class="table-responsive">
        <form method="POST">
         <div class="form-check">
          <div class="row">


            <div class="col-md-12">

              <button type="button" class="btn btn-primary me-2"   data-bs-whatever="@getbootstrap"  style="background-color:#e600ac; height: 34px; color:white; float: right; ">PDF</button>

              <button type="button" class="btn btn-primary me-2"   data-bs-whatever="@getbootstrap"  style="background-color:#e600ac; height: 34px; color:white; float: right; ">Excel</button>


            </div>
          </div>
        </div>



      </form>

      <table id="example" class="display table" style="width:100%;">
       <thead style=" background-color:#e600ac; color:white;">
        <tr>
         <th style="text-align:center; font-size:12px;">#</th>
         <th style="text-align:center; font-size:12px;">Date</th>
         <th style="text-align:center; font-size:12px;">Techo id</th>
         <th style="text-align:center; font-size:12px;">Name</th>
         <th style="text-align:center; font-size:12px;">Address</th>
         <th style="text-align:center; font-size:12px;">PHC/SUB CENTER</th>
         <th style="text-align:center; font-size:12px;">Mobile No.</th>
         <th style="text-align:center; font-size:12px;">LMP</th>
         <th style="text-align:center; font-size:12px;">EDD</th>
         <th style="text-align:center; font-size:12px;">GTPLAD</th>
         <th style="text-align:center; font-size:12px;">JSY/KPSY/IAY</th>
         <th style="text-align:center; font-size:12px;">Blood Group</th>
         <th style="text-align:center; font-size:12px;">BPL/APL</th>
         <th style="text-align:center; font-size:12px;">G/OBC/SC/ST</th>
         <th style="text-align:center; font-size:12px;">HBSAG</th>
         <th style="text-align:center; font-size:12px;">HIV</th>
         <th style="text-align:center; font-size:12px;">VDRL</th>
         <th style="text-align:center; font-size:12px;">No. of CAL/IFA</th>
         <th style="text-align:center; font-size:12px;">Albendazole Y/N</th>
         <th style="text-align:center; font-size:12px;">TT-1/TT-2 DATE</th>
         <th style="text-align:center; font-size:12px;">REFFERAL Y/N PLACE</th>
         <th style="text-align:center; font-size:12px;">Expected Delivery place</th>
         <th style="text-align:center; font-size:12px;">Height</th>
         <th style="text-align:center; font-size:12px;">Weight</th>
         <th style="text-align:center; font-size:12px;">H.B.</th>
         <th style="text-align:center; font-size:12px;">B.P.</th>
         <th style="text-align:center; font-size:12px;">FOETAL MOVEMENT (Y/N)</th>
         <th style="text-align:center; font-size:12px;">FOETAL HEIGHT</th>
         <th style="text-align:center; font-size:12px;">FOETAL HEART SOUND</th>
         <th style="text-align:center; font-size:12px;">FOETAL POSITION</th>
         <th style="text-align:center; font-size:12px;">BLOOD SUGAR</th>
         <th style="text-align:center; font-size:12px;">URINE S/A</th>
         <th style="text-align:center; font-size:12px;">LAST OUTCOME</th>
         <th style="text-align:center; font-size:12px;">COPLICATION</th>
         <th style="text-align:center; font-size:12px;">DANGEROUS SIGN</th>
       </tr> 
     </thead>
     <tbody >
    </tbody>
  </table>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  new DataTable('#example');
  $('#example').append('<tfoot><tr><td colspan="' + columnCount + '">Data not found</td></tr></tfoot>');

</script>



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