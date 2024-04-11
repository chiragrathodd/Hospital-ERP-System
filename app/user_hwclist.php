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
        <a class="nav-link"  data-bs-toggle="" href="user" role="tab" aria-selected="true" style=" font-size:14px;">User List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  data-bs-toggle="" href="user_hwclist" role="tab" aria-selected="true" style=" font-size:14px;">HWC list</a>
      </li>     
      <li class="nav-item">
        <a class="nav-link"  data-bs-toggle="" href="user_villagelist" role="tab" aria-selected="true" style=" font-size:14px;">Village List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  data-bs-toggle="" href="user_departmentlist" role="tab" aria-selected="true" style=" font-size:14px;">Department List</a>
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



           <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#village" data-bs-whatever="@getbootstrap"  style="background-color:#e600ac; height: 34px; color:white; float: right; ">Add HWC</button>
           <div class="modal fade" id="village" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="village">Add Village</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST">
                    <div class="mb-3">
                      <label for="Village-name" class="col-form-label">Village </label>
                      <input type="text" class="form-control" name="vlg" id="Village-name">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input type="reset" class="btn btn-secondary" value="Close"data-bs-dismiss="modal">
                    <input type="submit" class="btn btn-primary" name="add_village" value="Add village">
                  </div>
                </form>
                <?php
                if(isset($_POST['add_village']))
                {
                  include('../databases/config.php');
                  $name=$_POST['vlg'];
                  $qry="INSERT INTO `country_tb`VALUES ('','$name')";
                  $res=mysqli_query($q,$qry);
                  if($res)
                  {
                   echo '<script>alert("village add successfully");window.location="user";</script>';
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
   <th style="text-align:left; font-size:12px;">Name</th>
   <th style="text-align:left; font-size:12px;">Action</th>
 </tr> 
</thead>
<tbody >
 <?php 
 include('../databases/config.php');
 $qry = mysqli_query($q,"select * from country_tb");
 while($row = mysqli_fetch_array($qry))
 {
     echo "<tr style='text-align:left; font-size:12px;'>";
     echo "<td>$row[0]</td>";
     echo "<td>$row[1]</td>";
     ?>
     
    <td>  
        <button class='btn btn-primary editbtn' type='button' data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" 
            style='height: 32px; background-color: white; color:#8600b3;'><i class="mdi mdi-pencil"></i></button>

      <a class="btn btn-primary" href="delete?id=<?php echo $row[0]; ?>&page=user_hwclist" style="height: 32px; color:white;"><i class="mdi mdi-delete"></i></a>
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
            <h5 class="modal-title" id="exampleModalLabel">Update HWC LIST</h5>
          </div>
          <div class="modal-body">
            <form method="POST">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" id="txt_id" name="txt_id" style="display:none">
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
    <?php
    if(isset($_POST["btn_update"]))
    {
        $u_id = $_POST['txt_id'];
        $u_name = $_POST['txt_name'];
        include('../databases/config.php');
        $u_qry = mysqli_query($q,"update country_tb set cname='$u_name' where cid='$u_id' ");
        if($u_qry)
        {
            echo "<script>window.location='user_hwclist';</script>";
        }
    }
    ?>
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

<script type="text/javascript">
  $(document).ready(function(){
    function loadData(type, category_id){
      $.ajax({
        url : "load-village.php",
        type : "POST",
        data: {type : type, id : category_id},
        success : function(data){
          if(type == "stateData"){
            $("#state").html(data);
          }else{
            $("#country").append(data);
          }

        }
      });
    }
    loadData();
    $("#country").on("change",function(){
      var country = $("#country").val();

      if(country != ""){
        loadData("stateData", country);
      }else{
        $("#state").html("");
      }
    })
  });
</script>

<?php 


if(isset($_POST["btn_update"]))
{
  include("../databases/config.php");

$id = $_POST['txt_id'];
$name  = $_POST['txt_name'];
$mobile = $_POST['txt_mobile'];
$dept = $_POST['txt_dept'];
$village = $_POST['txt_village'];
$subcenter = $_POST['txt_subcenter'];

$qur = "UPDATE user SET name='$name', mobile_number='$mobile', department='$dept', village='$village', sub_village='$subcenter' WHERE id='$id'";
$c = mysqli_query($q, $qur); // Assuming $con is your database connection variable

if ($c) {
    echo "<script>window.location='user.php';</script>";
} else {
    echo "<script>alert('Data Not Updated');</script>";
}

}

?>