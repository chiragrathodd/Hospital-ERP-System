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
        <a class="nav-link"  data-bs-toggle="" href="Madicine" role="tab" aria-selected="true" style=" font-size:14px;">Treatment List</a>
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
              <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#dept" data-bs-whatever="@getbootstrap"  style="background-color:#e600ac; height: 34px; color:white; float: right; ">Add Treatment</button>
              <div class="modal fade" id="dept" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="dept">Add Treatment</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body form-group">
                      <form method="POST">
                        <div class="row">
                          <div class="col-md-6">
                           <div class="form-group">
                            <label>Treatment Name</label>
                            <input type="text" class="form-control" name="t_name">
                          </div>
                          <div class="form-group">
                            <label>Qnt</label>
                            <input type="text" class="form-control" name="t_qnt">
                          </div>
                          <div class="form-group">
                            <label>Rout</label>
                            <input type="text" class="form-control" name="t_rout">
                          </div>        
                          <div class="form-group">
                            <label>Advice</label>
                            <input type="text" class="form-control" name="t_advice">
                          </div>

                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Dose</label>
                            <input type="text" class="form-control" name="t_dose">
                          </div>
                          <div class="form-group">
                            <label>Frequency</label>
                            <input type="text" class="form-control" name="t_frequency">
                          </div>                          
                          <div class="form-group">
                            <label>Duration</label>
                            <input type="text" class="form-control" name="t_duration">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <input type="reset" class="btn btn-secondary" value="Close"data-bs-dismiss="modal">
                      <input type="submit" class="btn btn-primary" name="Add_Treatment" value="Add Madicine">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

    <table id="example" class="display table dataTables" style="width:100%;">
     <thead style=" background-color:#e600ac; color:white;">
      <tr>

       <th style="text-align:left; font-size:12px;">#</th>
       <th style="text-align:left; font-size:12px;">Treatment Name</th>
       <th style="text-align:left; font-size:12px;">Dose</th>
       <th style="text-align:left; font-size:12px;">Qnt</th>
       <th style="text-align:left; font-size:12px;">Frequency</th>
       <th style="text-align:left; font-size:12px;">Rout</th>
       <th style="text-align:left; font-size:12px;">Duration</th>
       <th style="text-align:left; font-size:12px;">Advice</th>
       <th style="text-align:left; font-size:12px;">Action</th>
     </tr> 
   </thead>
   <tbody >
    <?php 
    include("../databases/config.php");
    $sql = mysqli_query($q,"select * from Add_Treatment");
    
    while ($dd = mysqli_fetch_array($sql))
    {
      echo "<tr style='text-align:left; font-size:12px;'>";
      echo "<td>$dd[0]</td>";
      echo "<td>$dd[1]</td>";
      echo "<td>$dd[2]</td>";
      echo "<td>$dd[3]</td>";
      echo "<td>$dd[4]</td>";
      echo "<td>$dd[5]</td>";
      echo "<td>$dd[6]</td>";
      echo "<td>$dd[7]</td>";
      ?>
      <td>  
       <button class='btn btn-primary editbtn' type='button' data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" 
       style='height: 32px; background-color: white; color:#8600b3;'><i class="mdi mdi-pencil"></i></button>

       <a class="btn btn-primary" href="delete.php?id=<?php echo $dd[0]?>&page=Treatmentlist" style="height: 32px; color:white;"><i class="mdi mdi-delete"></i></a>
     </td>
     <?php
     echo "</tr>";
   }
   ?>
 </tbody>
</table>
<!--===========================Edit Model Start====================================-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Symptoms</h5>
      </div>
      <div class="modal-body">
        <form method="POST">
          
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Treatment Name</label>
                <input type="text" class="form-control" id="txt_id" name="txt_id" style="display:none;">
                <input type="text" class="form-control" id="txt_name" name="txt_name">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Qnt</label>
                <input type="text" class="form-control" id="txt_qnt" name="txt_qnt">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Rout</label>
                <input type="text" class="form-control" id="txt_rout" name="txt_rout">
              </div>    <div class="form-group">
                <label for="message-text" class="col-form-label">Advice</label>
                <input type="text" class="form-control" id="txt_advice" name="txt_advice">
              </div>
            </div>
            <div class="col-md-6">
             <div class="form-group">
              <label for="message-text" class="col-form-label">Dose</label>
              <input type="text" class="form-control" id="txt_dose" name="txt_dose">
            </div>   <div class="form-group">
              <label for="message-text" class="col-form-label">Frequency</label>
              <input type="text" class="form-control" id="txt_fraquency" name="txt_fraquency">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Duration</label>
              <input type="text" class="form-control" id="txt_duration" name="txt_duration">
            </div>
          </div>
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
<?php
if(isset($_POST["Add_Treatment"]))
{
  $t_name = $_POST["t_name"];
  $t_qnt = $_POST["t_qnt"];
  $t_rout = $_POST["t_rout"];
  $t_advice = $_POST["t_advice"];
  $t_dose = $_POST["t_dose"];
  $t_frequency = $_POST["t_frequency"];
  $t_duration = $_POST["t_duration"];
  include("../databases/config.php");
  $t_qry = "insert into Add_Treatment values('..','".$t_name."','".$t_dose."','".$t_qnt."','".$t_frequency."','".$t_rout."','".$t_duration."','".$t_advice."')";
  $t_q = mysqli_query($q,$t_qry);
  if($t_q)
  {
    echo "<script>alert('Treatment Add Successfully!')</script>";
    echo "<script>window.location='Treatment';</script>";
  }
  else
  {
   echo "<script>alert('Treatment Add Fail')</script>";
 }

}
?>
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
      $('#txt_dose').val(data[2]);
      $('#txt_qnt').val(data[3]);
      $('#txt_fraquency').val(data[4]);
      $('#txt_rout').val(data[5]);
      $('#txt_duration').val(data[6]);
      $('#txt_advice').val(data[7]);
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
  $txt_id = $_POST['txt_id'];
  $txt_name = $_POST['txt_name'];
  $txt_qnt = $_POST['txt_qnt'];
  $txt_rout = $_POST['txt_rout'];
  $txt_advice = $_POST['txt_advice'];
  $txt_dose = $_POST['txt_dose'];
  $txt_fraquency = $_POST['txt_fraquency'];
  $txt_duration = $_POST['txt_duration'];
  $query = "UPDATE Add_Treatment SET Name='$txt_name', Dose='$txt_dose', Qnt='$txt_qnt', Frequency='$txt_fraquency', Rout='$txt_rout', Duration='$txt_duration', Advice='$txt_advice' WHERE id='$txt_id '";
  $result = mysqli_query($q,$query);
  if($result)
  {
   echo "<script>window.location='Treatment.php';</script>";
 }
 else
 {
  echo "<script>alert('not ok')</script>";
}
}
?>