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

    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
     <ul class="nav nav-tabs" role="tablist">
                  <!-- <li class="nav-item">
                    <a class="nav-link active ps-0" id="cust_tab" data-bs-toggle="tab" href="#aa" role="tab" aria-controls="overview" aria-selected="true">Customer Details</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link"  data-bs-toggle="" href="addregistration" role="tab" aria-selected="false">Add  Pateint Data </a>
                  </li>
                </ul>
              </div><br>
              

              <div class="tab-content tab-content-basic">



                <div class="tab-pane fade show active"  id="bb" role="tabpanel" aria-labelledby="item"> 
                  <div class="row">

                    <div class="col-sm-12">
                      <div class="statistics-details d-flex align-items-center justify-content-between">
                        <div class="col-sm-12 table-responsive justify-content-center">   
                          <div class="card">
                            <div class="card-body">
                              <div class="card-body">
                                <form role="form text-left" method="POST">


                                  <h6 class="border-bottom mb-3" style="color: #e600ac;">Patient Details</h6>
                                  <div class="row mb-3">
                                    <div class="col-md-4 form-group">
                                      <label>Full Name</label>
                                      <input class="form-control form-control-sm" name="name" type="text"  >
                                    </div>
                                    <div class="col-md-4 form-group">
                                      <label>Height</label>
                                      <input class="form-control form-control-sm" type="text"  name="height">
                                    </div>
                                    <div class="col-md-4 form-group">
                                      <label >Address</label>
                                      <textarea class="form-control"  name="address" ></textarea>
                                    </div>

                                  </div>
                                  <div class="row mb-3">
                                    <div class="col-md-4 form-group">
                                      <label>Age</label>
                                      <input class="form-control form-control-sm" type="text"  name="age">
                                    </div>
                                    <div class="col-md-4 form-group">
                                      <label>Width</label>
                                      <input class="form-control form-control-sm" type="number"  name="state">
                                    </div>
                                    <div class="col-md-4 form-group">
                                      <label >Permanent Address</label>
                                      <textarea class="form-control"  name="p_address" ></textarea>
                                    </div>

                                  </div>
                                  <div class="row mb-3">
                                    <div class="col-md-4 form-group ">
                                      <label>Sex</label>
                                      <input class="form-control form-control-sm" type="text"  name="sex">
                                    </div>
                                    <div class="col-md-4 form-group">
                                      <label>Village</label>
                                      <select class="form-select form-select-sm"  name="village" id="country">
                                        <option selected>Open this select menu</option>
                                      </select>
                                    </div>
                                    <div class="col-md-4 form-group">
                                      <label>Ayushman Card</label>
                                      <input type="radio" name="ayu" id="otherlan" onclick="EnableDisableTB()">Yes
                                      <input type="radio" name="ayu" checked onclick="EnableDisableTB()">No
                                      <input type="text" class="form-control form-control-sm" name ="ayushman" id="Ather" disabled >
                                    </div>

                                  </div>
                                  <div class="row mb-3">
                                    <div class="col-md-4 form-group">
                                      <label>Mobile</label>
                                      <input class="form-control form-control-sm" type="number"  name="mobile">
                                    </div>
                                    <div class="col-md-4 form-group">
                                      <label>Sub Center</label>
                                      <select class="form-select form-select-sm" name="subvillage" id="state">
                                        <option selected>Open this select menu</option>
                                      </select>
                                    </div>
                                    <div class="col-md-4 form-group ">
                                      <label>Adha Card</label>
                                      <input type="radio" name="abhacard" id="opyes" onclick="Abha()">Yes
                                      <input type="radio" name="abhacard" checked onclick="Abha()">No
                                      <input type="text" class="form-control form-control-sm" name ="abha" id="textabha" disabled  >
                                    </div>
                                  </div>



                                  <div class="row">
                                    <div class="col-md-12 form-group" >

                                      <input type="submit" class="btn btn-light" name="Patient_add" value="Add Patient"style="background-color: #e600ac;  color:white;">
                                      <input type="submit" class="btn btn-light" name="" value="Cancle"style="background-color:white ;  color:#e600ac;">

                                    </div>

                                  </div>
                                </div>
                              </div><br>                          
                            </form>

                            <?php
                            if(isset($_POST['Patient_add']))
                            {
                              //session_start();
                              include("../databases/config.php");
                              $name = $_POST['name'];
                              $age = $_POST['age'];
                              $sex = $_POST['sex'];
                              $mobile = $_POST['mobile'];
                              $height = $_POST['height'];
                              $width = $_POST['width'];
                              $village = $_POST['village'];
                              $sel = mysqli_query($q,"select * from country_tb where cid='".$village."' ");
                              {
                                while($vi = mysqli_fetch_array($sel))
                                {
                                  $village = $vi[1];
                                }
                              }
                              $subvillage = $_POST['subvillage'];
                              $sel = mysqli_query($q,"select * from state_tb where sid='".$subvillage."' ");
                              {
                                while($vi = mysqli_fetch_array($sel))
                                {
                                  $subvillage = $vi[1];
                                }
                              }
                              $address = $_POST['address'];
                              $p_address = $_POST['p_address'];
                              $ayushman = $_POST['ayushman'];
                              $abha = $_POST['abha'];
                              include('../databases/config.php');
                              $name = $_SESSION['username'];
                              $entribyname ="";
                              $abc = "select * from user where mobile_number='".$name."' ";
                              $qqq = mysqli_query($q,$abc);
                              while($roww = mysqli_fetch_array($qqq))
                              {
                                $entribyname = $roww[1];
                              }
                             // session_start();
                              $sql = "insert into patient values('..','".$name."','".$age."','".$sex."','".$mobile."','".$height."','".$width."','".$village."','".$p_address."','".$subvillage."','".$address."','".$ayushman."','".$abha."','".$entribyname."')";
                              $qry = mysqli_query($q,$sql);
                              if($qry)
                              {
                                echo "<script>alert('Patient Add Successfully ')</script>";
                                header("Location:Registration.php");
                              }
                              else
                              {
                                echo "<script>alert('Patient Add Fail')</script>";
                              }
                            }

                            ?>

                          </div>
                        </div>
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



        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
          function EnableDisableTB() {
            var others = document.getElementById("otherlan");
            var otherlan = document.getElementById("Ather");
            otherlan.disabled = others.checked? false:true;
            otherlan.value="";
            if(!otherlan.disabled)
            {
              otherlan.focus();
            }
          }
          function Abha() {
            var others = document.getElementById("opyes");
            var opyes = document.getElementById("textabha");
            opyes.disabled = others.checked? false:true;
            opyes.value="";
            if(!opyes.disabled)
            {
              opyes.focus();
            }
          }
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