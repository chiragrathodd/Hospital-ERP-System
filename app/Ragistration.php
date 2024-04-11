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
        <a class="nav-link"  data-bs-toggle="" href="Ragistration" role="tab" aria-selected="true" style=" font-size:14px;">Ragistration List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  " data-bs-toggle="" href="Patient" role="tab"  aria-selected="true"style=" font-size:14px;" >Patient List</a>
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
            <a href="addregistration" class="btn btn-primary btn-sm text-white me-0" style=" background-color:#e600ac; height: 30px; color:white; float: right;" ><i class="mdi mdi-plus" ></i> Add Registration</a>

          </div>
        </div>

      </div>
      <?php
      if(isset($_POST['add_bname']))
      {
        include('../databases/config.php');
        $name=$_POST['bname'];
        $qry="INSERT INTO `users`(`id`, `name`) VALUES ('','$name')";
        $res=mysqli_query($q,$qry);
        if($res)
        {
         echo '<script>window.location="activemanager.php";</script>';
       }
     }
     ?>
   </form>

   <table id="example" class="display table">
     <thead style=" background-color:#e600ac; color:white;">
      <tr>
       <th style="text-align:left; font-size:12px;">#</th>
       <th style="text-align:left; font-size:12px;">Action</th>
       <th style="text-align:left; font-size:12px;">Date</th>
       <th style="text-align:left; font-size:12px;">Name</th>
       <th style="text-align:left; font-size:12px;">Entri By Name</th>
       <th style="text-align:left; font-size:12px;">Mobile</th>
       <th style="text-align:left; font-size:12px;">Age</th>
       <th style="text-align:left; font-size:12px;">Sex</th>
       <th style="text-align:left; font-size:12px;">Village</th>
     </tr>
   </thead>
   <tbody >
    <?php 
    include("../databases/config.php");
    $sql = mysqli_query($q,"select * from registration");
    while ($dd = mysqli_fetch_assoc($sql))
    {
      echo "<tr style='text-align:left; font-size:12px;'>";
      echo "<td>" . $dd['id']."</td>";
      ?>
      <td>  
        <button class='btn btn-primary editbtn' type='button' data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" 
        style='height: 32px; background-color: white; color:#8600b3;'><i class="mdi mdi-pencil"></i></button>

        <a class="btn btn-primary" href="delete.php?id=<?php echo $dd['id']; ?>&page=registration_page" style="height: 32px; color:white;"><i class="mdi mdi-delete"></i></a>
      </td>
      <?php
      echo "<td>" . $dd['date'] . "</td>";
      echo "<td>" . $dd['name'] . "</td>";
      echo "<td>" . $dd['entriby'] . "</td>";
      echo "<td>" . $dd['mobile'] . "</td>";
      echo "<td>" . $dd['age'] . "</td>";
      echo "<td>" . $dd['sex'] . "</td>";
      echo "<td>" . $dd['village'] . "</td>";;
      ?>
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
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="txt_id" name="txt_id" style="display:none;">
            <input type="text" class="form-control" id="txt_name" name="txt_name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Age</label>
            <input type="text" class="form-control" id="txt_age" name="txt_age">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Sex</label>
            <input type="text" class="form-control" id="txt_sex" name="txt_sex">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mobile</label>
            <input type="text" class="form-control" id="txt_mobile" name="txt_mobile">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Village</label>
            <input type="text" class="form-control" id="txt_village" name="txt_village">
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
      $('#txt_name').val(data[4]);
      $('#txt_age').val(data[6]);
      $('#txt_sex').val(data[7]);
      $('#txt_mobile').val(data[5]);
      $('#txt_village').val(data[8]);
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


<?php

if(isset($_POST['btn_update']))
{
  include("../databases/config.php");
  $txt_id = $_POST['txt_id'];
  $txt_refername = $_POST['txt_refername'];
  $txt_othername = $_POST['txt_othername'];
  $txt_date = $_POST['txt_date'];
  $txt_name = $_POST['txt_name'];
  $txt_mobile = $_POST['txt_mobile'];
  $txt_age = $_POST['txt_age'];
  $txt_sex = $_POST['txt_sex'];
  $txt_height = $_POST['txt_height'];
  $txt_weight = $_POST['txt_weight'];
  $txt_muac = $_POST['txt_muac'];
  $txt_village = $_POST['txt_village'];
  $txt_subcenter = $_POST['txt_subcenter'];
  $txt_address = $_POST['txt_address'];
  $txt_ayucard = $_POST['txt_ayucard'];
  $txt_abhacard = $_POST['txt_abhacard'];
  $txt_complain = $_POST['txt_complain'];
  $txt_remark = $_POST['txt_remark'];
  $oo = "update registration set refer_name='$txt_refername', other_name='$txt_othername',  date='$txt_date',  name='$txt_name',mobile='$txt_mobile',age='$txt_age', sex='$txt_sex',height='$txt_height',witdh='$txt_weight',muac='$txt_muac',village='$txt_village',subvillage='$txt_subcenter',address='$txt_address',ayushmancard  ='$txt_ayucard',abhacard='$txt_abhacard',complain='$txt_complain',  remarks='$txt_remark' where id='$txt_id' ";
  $s = mysqli_query($q,$oo);
  if($s)
  {
    echo "<script>window.location='Ragistration'</script>";
  }

}

?>