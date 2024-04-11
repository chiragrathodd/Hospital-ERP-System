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
  <link rel="icon" type="image/png" href="../media/logo.png">  <title>
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
  <link rel="stylesheet" type="text/css" href="datatable.css">
</head>
</head>

<body class="g-sidenav-show  bg-gray-100">
 <script>
  function checkdelete()
  {
    return confirm('Are You Sure Delete This Record! ?');
  }
</script>
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
  <div class="main-panel">
   <div class="content-wrapper">
    <!--============ Body Start =====================-->
    <div class="row">
     <div class="col-sm-12">
      <div class="home-tab">
       <div class="card">
        <div class="card-body">

         <div class="table-responsive">

           <table id="example" class="display table" style="width:100%;">
             <thead style=" background-color:#e600ac; color:white;">
              <tr>

               <th style="text-align:left; font-size:12px;">#</th>
               <th style="text-align:left; font-size:12px;">Action</th>
               <th style="text-align:left; font-size:12px;">Status</th>
               <th style="text-align:left; font-size:12px;">Date</th>
               <th style="text-align:left; font-size:12px;">Name</th>
               <th style="text-align:left; font-size:12px;">Entry By</th>
               <th style="text-align:left; font-size:12px;">Mobile</th>
               <th style="text-align:left; font-size:12px;">Age</th>
               <th style="text-align:left; font-size:12px;">Sex</th>
               <th style="text-align:left; font-size:12px;">MUAC</th>
               <th style="text-align:left; font-size:12px;">Sub Village</th>
               <th style="text-align:left; font-size:12px;">Complain</th>
               <th style="text-align:left; font-size:12px;">remark</th>
               
             </tr> 
           </thead>
           <tbody>
            <?php 
            include("../databases/config.php");
            $sql = mysqli_query($q,"select * from nursing_station");
            $i = 1;
            while ($dd = mysqli_fetch_assoc($sql))
            {
              echo "<tr style='text-align:left; font-size:12px;'>";
              echo "<td>{$i}</td>";
              
                            ?>

              <td>  
                <a class='btn btn-primary' href="nursing_update_view.php?id=<?php echo $dd['nursing_id']; ?>&name=<?php echo $dd['name']; ?>&mobile=<?php echo $dd['mobile']; ?>&village=<?php echo $dd['village']; ?>&sex=<?php echo $dd['sex']; ?>&subvillage=<?php echo $dd['subvillage']; ?>" role='button' style='height: 32px; background-color: white; color:#8600b3;' aria-expanded='false'><i class="mdi mdi-pencil"></i></a>

                <a class="btn btn-primary" href="nursing_delete_view?id=<?php echo $dd['id']; ?>" onclick="return checkdelete()" style="height: 32px; color:white;"><i class="mdi mdi-delete"></i></a>
              </td>
              <?php
              if($dd['status']=="Pending")
              {
                echo "<td><a href='nursing_pending.php?id={$dd['id']}&name={$dd['name']}&mobile={$dd['mobile']}&village={$dd['village']}&sex={$dd['sex']}&subvillage={$dd['subvillage']}' class='btn btn-warning' style='height: 32px; background-color: white; color:#e600ac;'>Pending</a></td>";
              }
              else
              {  
                echo "<td><a href='nursing_complate_view.php?id={$dd['nursing_id']}&name={$dd['name']}&mobile={$dd['mobile']}&village={$dd['village']}&sex={$dd['sex']}&subvillage={$dd['subvillage']}' class='btn btn-success'  style='height: 32px;  background-color: #e600ac; color:white;'>Complete</a></td>";

              }
              echo "<td>{$dd['date']}</td>";
              echo "<td>{$dd['name']}</td>";
              echo "<td>{$dd['entriby']}</td>";
              echo "<td>{$dd['mobile']}</td>";
              echo "<td>{$dd['age']}</td>";
              echo "<td>{$dd['sex']}</td>";
              echo "<td>{$dd['muac']}</td>";
              echo "<td>{$dd['subvillage']}</td>";
              echo "<td>{$dd['complain']}</td>";
              echo "<td>{$dd['remarks']}</td>";
              

              echo "</tr>";
              $i++;
            }

            ?>
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