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
</head>

<body class="g-sidenav-show  bg-gray-100">
  <form method="POST">


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
                    <a class="nav-link"  data-bs-toggle="" href="addregistration" role="tab" aria-selected="false">Pending Nurshing Status </a>
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
                                  <div class="row mb-4">
                                    <h6 class="border-bottom mb-3" style="color: #e600ac;">Patient Details</h6>
                                    <div class="col-md-6">
                                     <div class="row form-group">
                                      <div class="info">
                                        <label for="name">Name:</label>
                                        <span id="name" style="font-size: 13px;"><?php echo $_GET['name']; ?></span>
                                      </div>
                                      <div class="info">
                                        <label for="number">Number:</label>
                                        <span id="number"style="font-size: 13px;"><?php echo $_GET['mobile']; ?></span>
                                      </div>
                                      <div class="info">
                                        <label for="number">Sex:</label>
                                        <span id="number"style="font-size: 13px;"><?php echo $_GET['sex'];?></span>
                                      </div>
                                      <div class="info">
                                        <label for="number">Village:</label>
                                        <span id="number"style="font-size: 13px;"><?php echo $_GET['village']; ?></span>
                                      </div>
                                      <div class="info">
                                        <label for="number">Sub Center:</label>
                                        <span id="number"style="font-size: 13px;"><?php echo $_GET['subvillage']; ?></span>
                                      </div>
                                    </div>
                                    
                                  </div>
                                </div>

                                <h6 class="border-bottom mb-3" style="color: #e600ac;">Personal Details</h6>
                                <div class="row mb-3">                              
                                 <div class="col-md-4 form-group">

                                  <label>Pre Consultation : </label><br>

                                  <div class="form-check form-check-inline">
                                   <input class="form-check-input" type="radio" name="pre" id="exampleRadios1" value="Yes" checked>
                                   <label class="form-check-label" for="exampleRadios1">
                                    yes
                                  </label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="pre" id="inlineRadio2" value="No">
                                  <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>

                              </div>
                              <div class="col-md-4 form-group">

                                <label>Screen Of Hypertension : </label><br>

                                <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="Hypertension" id="exampleRadios1" value="Yes" checked>
                                 <label class="form-check-label" for="exampleRadios1">
                                  yes
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Hypertension" id="inlineRadio2" value="No">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                              </div>

                            </div>
                            <div class="col-md-4 form-group">

                              <label> Screen for Daibetis : </label><br>

                              <div class="form-check form-check-inline">
                               <input class="form-check-input" type="radio" name="Daibetis" id="exampleRadios1" value="Yes" checked>
                               <label class="form-check-label" for="exampleRadios1">
                                yes
                              </label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="Daibetis" id="inlineRadio2" value="No">
                              <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>

                          </div>
                          <div class="col-md-4 form-group">
                            <label>Temp</label>
                            <input class="form-control form-control-sm" name="temp" type="text" placeholder="Enter Your name" >
                          </div>
                          <div class="col-md-4 form-group">
                            <label>BP</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="bp">
                          </div>
                          <div class="col-md-4 form-group">
                            <label>Pulse</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Enter your Mobile" name="Pulse">
                          </div>
                          <div class="col-md-4 form-group">
                            <label>SPO2</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Enter your Mobile" name="spo2">
                          </div>
                        </div>
                        <h6 class="border-bottom mb-3" style="color: #e600ac;">History</h6>
                        <div class="row mb-3">
                          <div class="col-md-4 form-group">
                            <label>Past History</label>
                            <input class="form-control form-control-sm" name="past" type="text" placeholder="Enter Your name" >
                          </div>
                          <div class="col-md-4 form-group">
                            <label>Personal History</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="personal">
                          </div>
                          <div class="col-md-4 form-group">
                            <label>Family History</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Enter your Mobile" name="family">
                          </div>
                        </div>
                        <h6 class="border-bottom mb-3" style="color: #e600ac;">PT Category (Multiple Choise)</h6>
                        <div class="row mb-3">
                          <div class="col-md-3 form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="General" id="flexCheckDefault" name="General">
                              <label class="form-check-label" for="flexCheckDefault">
                                General
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="Ayurvedic" id="flexCheckDefault" name="Ayurvedic">
                              <label class="form-check-label" for="flexCheckDefault">
                                Ayurvedic
                              </label>

                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="Homeopathic" id="flexCheckDefault" name="Homeopathic">
                              <label class="form-check-label" for="flexCheckDefault">
                                Homeopathic
                              </label>
                            </div>
                          </div>
                          <div class="col-md-3 form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="ANC" id="flexCheckDefault" name="ANC">
                              <label class="form-check-label" for="flexCheckDefault">
                                ANC
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="PNC" id="flexCheckDefault" name="PNC">
                              <label class="form-check-label" for="flexCheckDefault">
                                PNC
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="Camp" id="flexCheckDefault" name="Camp">
                              <label class="form-check-label" for="flexCheckDefault">
                                Camp 
                              </label>
                            </div>
                          </div>
                          <div class="col-md-3 form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="Relative" id="flexCheckDefault" name="Relative">
                              <label class="form-check-label" for="flexCheckDefault">
                                Pt Relative
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="Certificate" id="flexCheckDefault" name="Certificate">
                              <label class="form-check-label" for="flexCheckDefault">
                                Certificate
                              </label>
                            </div>
                          </div>
                          <div class="col-md-3 form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="Emergency" id="flexCheckDefault" name="Emergency">
                              <label class="form-check-label" for="flexCheckDefault">
                                Emergency

                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="Immunization" id="flexCheckDefault" name="Immunization">
                              <label class="form-check-label" for="flexCheckDefault">
                                Immunization
                              </label>
                            </div>

                          </div>


                        </div>

                      </div>


                      

                      <div class="row">
                        <div class="col-md-12 form-group" >

                          <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color: #e600ac;  color:white;">Submit</button>

<!--                           <input type="submit" class="btn btn-light" name="" value="" style="background-color: #e600ac;  color:white;">
-->                          <input type="submit" class="btn btn-light" name="" value="Cancle"style="background-color:white ;  color:#e600ac;">

</div>

</div>
</div>
</div><br>                          
</form>

<!-------------------------------------Model Start -------------------------------------------------->
<!-- plugins:js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Doctor</h5>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Doctor :</label>
          <select class="form-select" name="doctorname">
            <option value="hello">Select Doctor</option>
            <?php
            include("../databases/config.php");
            $qr = mysqli_query($q,"select * from user where department='doctor' ");
            while($r = mysqli_fetch_assoc($qr))
            {
              echo "<option value='{$r['name']}'>{$r['name']}</option>";
            }
            ?>
          </select>
        </div>

      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" name="btn_submit_data" value="Submit">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php

if(isset($_POST["btn_submit_data"]))
{
  date_default_timezone_set('Asia/Kolkata'); 
  $date =  date('d-m-Y h:i:s A');
  $pre = $_POST["pre"];
  $temp = $_POST["temp"];
  $Pulse = $_POST["Pulse"];
  $spo2 = $_POST["spo2"];
  $Hypertension = $_POST["Hypertension"];
  $bp = $_POST["bp"];
  $Daibetis = $_POST["Daibetis"];
  $past = $_POST["past"];
  $personal = $_POST["personal"];
  $family = $_POST["family"];
  $General =  $_POST["General"];
  $doctor = $_POST["doctorname"];
  $Ayurvedic = $_POST["Ayurvedic"];
  $Homeopathic = $_POST["Homeopathic"];
  $ANC = $_POST["ANC"];
  $PNC = $_POST["PNC"];
  $Camp = $_POST["Camp"];
  $Relative = $_POST["Relative"];
  $Certificate = $_POST["Certificate"];
  $Emergency = $_POST["Emergency"];
  $Immunization = $_POST["Immunization"];
  $doctor_status = "Pending";
  $namee = $_GET['name'];
  $mobilee = $_GET['mobile'];
  $sex =  $_GET['sex'];
  $village =$_GET['village'];
  $subvillage = $_GET['subvillage'];
include('../databases/config.php');
          $name = $_SESSION['username'];
          $entribyname ="";
          $abc = "select * from user where mobile_number='".$name."' ";
          $qqq = mysqli_query($q,$abc);
          while($roww = mysqli_fetch_array($qqq))
          {
            $entribyname = $roww[1];
          }

  $id =  $_GET['id'];
  include("config.php");
  $qry = "INSERT INTO nursing_station_pending 
  VALUES ('..', '$date','$namee', '$mobilee', '$sex', '$village', '$subvillage', '$pre', '$temp', '$Pulse', '$spo2', '$Hypertension', '$bp', '$Daibetis', '$past', '$personal', '$family', '$General', '$doctor', '$Ayurvedic', '$Homeopathic', '$ANC', '$PNC', '$Camp', '$Relative', '$Certificate', '$Emergency', '$Immunization', '$doctor_status','$entribyname')";

  $query = mysqli_query($q,$qry);
  if($query) 
  {
    echo "<script>alert('Data Insert')</script>";
    $up = "update nursing_station set status='Complate' where id= '$id' ";
    $upd = mysqli_query($q,$up);
    include("config.php");
    $sql = "SELECT id FROM nursing_station_pending ORDER BY id DESC LIMIT 1";
    $result = $q->query($sql);
    if ($result->num_rows > 0) 
    {
      $row = $result->fetch_assoc();    
      $last_id = $row['id'];
      $up = "update nursing_station set nursing_id='$last_id' where id= '$id' ";
      $ex = mysqli_query($q,$up);
      if($ex)
      {
     // echo "<script>alert('last id update')</script>";
      }
      else
      {
        echo "<script>alert('last id record not update')<script>";
      }
    } 
    echo "<script>window.location='Nurshing';</script>";
  }
  else
  {
    echo "<script>alert('Data Not Insert')</script>";
  }
}

?>
<!-------------------------------------Model End -------------------------------------------------->


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
</form>
</body>

</html>