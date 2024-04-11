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
  <link rel="stylesheet" type="text/css" href="datatable.css">
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
        <a class="nav-link"  data-bs-toggle="" href="Diagnosis" role="tab" style=" font-size:14px;" aria-selected="true">Idsp List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  " data-bs-toggle="" href="other_list" style=" font-size:14px;" role="tab"  aria-selected="true" >Other List</a>
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

        while ($dd = mysqli_fetch_array($sql))
        {
          echo "<tr style='text-align:left; font-size:12px;'>";
          echo "<td>$dd[0]</td>";
          echo "<td>$dd[1]</td>";
          ?>

          <td>  
           <button class='btn btn-primary editbtn' type='button' data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" 
           style='height: 32px; background-color: white; color:#8600b3;'><i class="mdi mdi-pencil"></i></button>

           <a class="btn btn-primary" href="delete.php?id=<?php echo $dd[0]?>&page=idsp" style="height: 32px; color:white;"><i class="mdi mdi-delete"></i></a>
         </td>
         <?php
         echo "</tr>";

       }
       ?>
     </tbody>
   </table>


   <!--===========================Edit Model Start====================================-->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Symptoms</h5>
        </div>
        <div class="modal-body">
          <form method="POST">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">IDSP Name</label>
              <input type="text" class="form-control" id="txt_id" name="txt_id" style="display:none;">
              <input type="text" class="form-control" id="txt_name" name="txt_name">
            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="btn_update">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Edit Modal End -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.editbtn').on('click', function(){
        var $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function(){
          return $(this).text();
        }).get();
        console.log(data);
        $('#txt_id').val(data[0]);
        $('#txt_name').val(data[1]);

        $('#exampleModal').modal('show');
        $('#exampleModal .btn-secondary').on('click', function(){
          $('#exampleModal').modal('hide');
        });
      });
    });
  </script>

  <!--===========================Edit Model End====================================-->
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('#example').DataTable({
      "order": [[0, 'desc']],
    });
  });
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

<?php 
if(isset($_POST["btn_update"]))
{
   include("../databases/config.php");
   $id = $_POST['txt_id'];
   $name = $_POST['txt_name'];

   $b = "UPDATE idsp_list SET   idsp_name='$name' WHERE id='$id' ";
   $n = mysqli_query($q,$b);
   if($n)
   {
   echo "<script>window.location='Diagnosis.php';</script>";
   }
}

?>
