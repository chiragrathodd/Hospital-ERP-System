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

              <button type="button" class="btn btn-primary me-2" id="downloadBtn"   data-bs-whatever="@getbootstrap"  style="background-color:#e600ac; height: 34px; color:white; float: right; ">Excel</button>


            </div>
          </div>
        </div>



      </form>
      <script type="text/javascript" src="table2excel.js"></script>
      <table class="table" id="myTable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Date & Time</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Sex</th>
            <th scope="col">Address</th>
            <th scope="col">OPD-NO / IPD-NO</th>
            <th scope="col">Reffer From</th>
            <th scope="col">Reffer Doctor Name</th>
            <th scope="col">Receving Doctor Name</th>
            <th scope="col">Diagnosis</th>
            <th scope="col">Sing</th>
            <th scope="col">Remark</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          include("../databases/config.php");
          $w = "SELECT * FROM `ipd` WHERE refer_name != '' ";
          $vv = mysqli_query($q,$w);
          $i = 1;
          while($row = mysqli_fetch_assoc($vv))
          {
            echo " <tr>";
            echo "<th scope='row'>$i</th>";
            echo "<td>{$row['date']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['age']}</td>";
            echo "<td>{$row['sex']}</td>";
            echo "<td>{$row['address']}</td>";
            echo "<td>baaki==></td>";
            echo "<td>{$row['subvillage']}</td>";
            echo "<td>{$row['refer_name']}</td>";
            echo "<td>baaki==></td>";
            echo "<td>baaki==></td>";
            echo "<td>baaki==></td>";
            echo "<td>{$row['remarks']}</td>";
            echo "</tr>";
            $i++;
          }
          ?>
        </tbody>
      </table>
    </div>
    <script>
      document.getElementById('downloadBtn').addEventListener('click', function () {
        var customFilename = 'IPD Refer IN Procedure';
        var table = document.querySelector("#myTable");
        var blob = new Blob([table.outerHTML], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet;charset=utf-8' });
        var link = document.createElement('a');
        link.download = customFilename + '.xls';
        link.href = window.URL.createObjectURL(blob);
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
      });
    </script>
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