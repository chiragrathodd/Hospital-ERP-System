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
     <script type="text/javascript" src="jquery.js"></script>
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

                <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#dept" data-bs-whatever="@getbootstrap"  style="background-color:#e600ac; height: 34px; color:white; float: right; ">Add Idsp</button>
                <div class="modal fade" id="dept" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="dept">Add Idsp</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body form-group">
                        <form>
                          <div class="mb-3">
                            <label for="Symtoms-name" class="col-form-label">Idsp List</label>
                            <input type="text" class="form-control" name="idsp" id="Symtoms-name">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <input type="reset" class="btn btn-secondary" value="Close"data-bs-dismiss="modal">
                          <input type="submit" class="btn btn-primary" name="add_idsp" value="Add Idsp">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <!----=========================Edit Model Start ================================= ================================= -->
                <div class="modal fade" id="editmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="dept">Add Idsp</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body form-group">
                        <form>
                          <div class="mb-3">
                            <label for="Symtoms-name" class="col-form-label">Idsp List</label>
                            <input type="text" class="form-control" name="idsp_id" id="idsp_id">
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="Symtoms-name" class="col-form-label">Idsp List</label>
                          <input type="text" class="form-control" name="idsp_name" id="idsp_name">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <input type="reset" class="btn btn-secondary" value="Close"data-bs-dismiss="modal">
                        <input type="submit" class="btn btn-primary" name="add_idsp" value="Add Idsp">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <script type="text/javascript">
                $(document).ready(function(){
                  $('.editbtn').on('click',function(){
                    $('#editmodel').modal('show');
                    $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function(){
                      return $(this).text();
                    }).get();
                    console.log(data);
                    $('#idsp_id').val(data[0]);
                    $('#idsp_name').val(data[1]);
                  });
                });
              </script>
              <!----=========================Edit Model End ================================= ================================= -->
              <?php
              if(isset($_POST['add_idsp']))
              {
                include('../databases/config.php');
                $name=$_POST['idsp'];
                $qry="INSERT INTO `idsp_list`VALUES ('','$name')";
                $res=mysqli_query($q,$qry);
                if($res)
                {
                 echo '<script>alert("Idsp add successfully");window.location="Diagnosis";</script>';
               }
             }
             ?>

           </div>
         </div>
       </div>
     </form>

     <table id="example" class="display table" style="width:100%;">
       <thead style=" background-color:#e600ac; color:white;">
        <tr>

          <th style="text-align:left; font-size:12px;">#</th>
          <th style="text-align:left; font-size:12px;">IDSP List</th>
          <th style="text-align:left; font-size:12px;">Action</th>
        </tr> 
      </thead>
      <tbody>
        <?php 
        include("../databases/config.php");
        $sql = mysqli_query($q,"select * from idsp_list");
        $i =1;
        while ($dd = mysqli_fetch_array($sql))
        {
          echo "<tr style='text-align:left; font-size:12px;'>";
          echo "<td>$i</td>";
          echo "<td>$dd[1]</td>";
          ?>
          <td>  
           <button class="editbtn" data-bs-target="#editmodel" data-bs-toggle="modal"> <i class="mdi mdi-pencil"></i></button>
           <button> <i class="mdi mdi-delete"></i></button>
         </td>
         <?php
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