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

      <?php
      include("../databases/config.php");
      $id = $_GET['id'];
      $temp ="";
      $bp = "";
      $pulse="";
      $spo2="";
      $past="";
      $personal ="";
      $Family = "";
      $General = "";
      $Ayurvedic = "";
      $Homeopathic = "";
      $ANC ="";
      $PNC ="";
      $Camp ="";
      $Relative="";
      $Certificate ="";
      $Emergency ="";
      $Immunization ="";
      $consultation ="";
      $Hypertension ="";
      $Daibetis ="";
      $qq = "select * from nursing_station_pending where id='$id' ";
      $qry = mysqli_query($q,$qq);
      while($data = mysqli_fetch_assoc($qry)) 
      {
       $temp =  $data["temp"];
       $bp = $data["bp"]; 
       $pulse = $data["pulse"];
       $spo2 = $data["spO2"];
       $past = $data["past"];
       $personal = $data["Personal"];
       $Family =$data["Family"];
       $General = $data["General"];
       $Ayurvedic = $data["Ayurvedic"];
       $Homeopathic = $data["Homeopathic"];
       $ANC = $data["ANC"];
       $PNC = $data["PNC"];
       $Camp = $data["Camp"];
       $Relative = $data["Relative"];
       $Certificate = $data["Certificate"];
       $Emergency = $data["Emergency"];
       $Immunization = $data["Immunization"];
       $consultation = $data["consultation"];
       $Hypertension = $data["Hypertension"];
       $Daibetis = $data["Daibetis"];
     }
     ?>

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

                                  <?php 
                                  if($consultation=="Yes")
                                  {
                                    ?> 
                                    <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input"  name ="pre" value="Yes" checked ><c style="font-weight: bold; font-size: 16px;">Yes</c>&nbsp;&nbsp;&nbsp;
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input type="radio"  class="form-check-input" name ="pre" value="No" ><c style="font-weight: bold; font-size: 16px;">No</c>
                                  </div>
                                  
                                  <?php }  else {?>
                                    <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input"  name ="pre" value="Yes" ><c style="font-weight: bold; font-size: 16px;">Yes</c>&nbsp;&nbsp;&nbsp;
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input type="radio"  class="form-check-input" name ="pre" value="No" checked ><c style="font-weight: bold; font-size: 16px;">No</c>
                                  </div>
                                  <?php }?>
                                </div>
                                <div class="col-md-4 form-group">

                                  <label>Screen Of Hypertension : </label><br>

                                  <?php 
                                  if($Hypertension=="Yes")
                                  {
                                    ?>
                                      <div class="form-check form-check-inline">               
                                    <input type="radio"  name ="Hypertension" class="form-check-input"  value="Yes" checked ><c style="font-weight: bold; font-size: 16px;">Yes</c>&nbsp;&nbsp;&nbsp;
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input type="radio"  name ="Hypertension" class="form-check-input" value="No"><c style="font-weight: bold; font-size: 16px;">No</c>
                                  </div>
                                  <?php }  else {?>
                                    <div class="form-check form-check-inline">
                                    <input type="radio"  name ="Hypertension" class="form-check-input" value="Yes" ><c style="font-weight: bold; font-size: 16px;">Yes</c>&nbsp;&nbsp;&nbsp;
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input type="radio"  name ="Hypertension" class="form-check-input" value="No" checked><c style="font-weight: bold; font-size: 16px;">No</c>
                                  </div>
                                  <?php }?>

                                </div>
                                <div class="col-md-4 form-group">

                                  <label> Screen for Daibetis : </label><br>

                                  <?php 
                                  if($Daibetis=="Yes")
                                  {
                                    ?>   
                                    <div class="form-check form-check-inline">              
                                    <input type="radio"  name ="Daibetis"  class="form-check-input"value="Yes" checked ><c style="font-weight: bold; font-size: 16px;">Yes</c>&nbsp;&nbsp;&nbsp;
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input type="radio"  name ="Daibetis" class="form-check-input" value="No" ><c style="font-weight: bold; font-size: 16px;">No</c>
                                  </div>
                                  <?php }  else {?>
                                    <div class="form-check form-check-inline">
                                    <input type="radio"  name ="Daibetis" class="form-check-input" value="Yes"  ><c style="font-weight: bold; font-size: 16px;">Yes</c>&nbsp;&nbsp;&nbsp;
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input type="radio"  name ="Daibetis" class="form-check-input" value="No" checked ><c style="font-weight: bold; font-size: 16px;">No</c>
                                  </div>
                                  <?php }?>

                                </div>
                                <div class="col-md-4 form-group">
                                  <label>Temp</label>
                                  <input class="form-control form-control-sm" name="temp" type="text"  value="<?php echo $temp ?>" >
                                </div>
                                <div class="col-md-4 form-group">
                                  <label>BP</label>
                                  <input class="form-control form-control-sm" type="text"  value="<?php echo $bp ?>" name="bp">
                                </div>
                                <div class="col-md-4 form-group">
                                  <label>Pulse</label>
                                  <input class="form-control form-control-sm" type="text"  value="<?php echo $pulse ?>" name="Pulse">
                                </div>
                                <div class="col-md-4 form-group">
                                  <label>SPO2</label>
                                  <input class="form-control form-control-sm" type="text"  value="<?php echo $spo2 ?>" name="spo2">
                                </div>
                              </div>
                              <h6 class="border-bottom mb-3" style="color: #e600ac;">History</h6>
                              <div class="row mb-3">
                                <div class="col-md-4 form-group">
                                  <label>Past History</label>
                                  <input class="form-control form-control-sm" name="past" type="text"  value="<?php echo $past ?>" >
                                </div>
                                <div class="col-md-4 form-group">
                                  <label>Personal History</label>
                                  <input class="form-control form-control-sm" type="text"  value="<?php echo $personal ?>" name="personal">
                                </div>
                                <div class="col-md-4 form-group">
                                  <label>Family History</label>
                                  <input class="form-control form-control-sm" type="text"  value="<?php echo $Family ?>" name="family">
                                </div>
                              </div>
                              <h6 class="border-bottom mb-3" style="color: #e600ac;">PT Category (Multiple Choise)</h6>
                              <div class="row mb-3">
                                <div class="col-md-3 form-group">
                                  <div class="form-check">



                                    <?php
                                    if($General=="General")
                                    {
                                      ?>
                                      <input class="form-check-input" type="checkbox" name="General"  value="General" checked >
                                      <?php
                                    }
                                    else
                                    {
                                      ?>
                                      <input class="form-check-input" type="checkbox" name="General"  value="General" >
                                      <?php
                                    }
                                    ?>
                                    <label class="form-check-label" for="flexCheckDefault">
                                      General
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <?php
                                    if($Ayurvedic=="Ayurvedic")
                                    {
                                      ?>
                                      <input class="form-check-input" type="checkbox" name="Ayurvedic"  value="Ayurvedic" checked >
                                      <?php
                                    }
                                    else
                                    {
                                      ?>
                                      <input class="form-check-input" type="checkbox" name="Ayurvedic"  value="Ayurvedic" >
                                      <?php
                                    }
                                    ?>
                                    <label class="form-check-label" for="flexCheckDefault">
                                      Ayurvedic
                                    </label>

                                  </div>
                                  <div class="form-check">
                                    <?php
                                    if($Homeopathic=="Homeopathic")
                                    {
                                      ?>
                                      <input class="form-check-input" type="checkbox" name="Homeopathic"  value="Homeopathic" checked >
                                      <?php
                                    }
                                    else
                                    {
                                      ?>
                                      <input class="form-check-input" type="checkbox" name="Homeopathic"  value="Homeopathic" >
                                      <?php
                                    }
                                    ?>                             
                                    <label class="form-check-label" for="flexCheckDefault">
                                      Homeopathic
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-3 form-group">
                                  <div class="form-check">
                                    <?php
                                    if($ANC=="ANC")
                                    {
                                      ?>
                                      <input class="form-check-input" type="checkbox" name="ANC"  value="ANC" checked >
                                      <?php
                                    }
                                    else
                                    {
                                      ?>
                                      <input class="form-check-input" type="checkbox" name="ANC"  value="ANC" >
                                      <?php
                                    }
                                    ?>
                                    <label class="form-check-label" for="flexCheckDefault">
                                      ANC
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <?php
                                    if($PNC=="PNC")
                                    {
                                      ?>
                                      <input class="form-check-input" type="checkbox" name="PNC"  value="PNC" checked >
                                      <?php
                                    }
                                    else
                                    {
                                      ?>
                                      <input class="form-check-input" type="checkbox" name="PNC"  value="PNC" >
                                      <?php
                                    }
                                  ?>                              <label class="form-check-label" for="flexCheckDefault">
                                    PNC
                                  </label>
                                </div>
                                <div class="form-check">
                                 <?php
                                 if($Camp=="Camp")
                                 {
                                  ?>
                                  <input class="form-check-input" type="checkbox" name="Camp"  value="Camp" checked >
                                  <?php
                                }
                                else
                                {
                                  ?>
                                  <input class="form-check-input" type="checkbox" name="Camp"  value="Camp" >
                                  <?php
                                }
                                ?>
                                <label class="form-check-label" for="flexCheckDefault">
                                  Camp 
                                </label>
                              </div>
                            </div>
                            <div class="col-md-3 form-group">
                              <div class="form-check">
                                <?php
                                if($Relative=="Relative")
                                {
                                  ?>
                                  <input class="form-check-input" type="checkbox" name="Relative"  value="Relative" checked >
                                  <?php
                                }
                                else
                                {
                                  ?>
                                  <input class="form-check-input" type="checkbox" name="Relative"  value="Relative" >
                                  <?php
                                }
                                ?>                          
                                <label class="form-check-label" for="flexCheckDefault">
                                  Pt Relative
                                </label>
                              </div>
                              <div class="form-check">
                               <?php
                               if($Certificate=="Certificate")
                               {
                                ?>
                                <input class="form-check-input" type="checkbox" name="Certificate"  value="Certificate" checked >
                                <?php
                              }
                              else
                              {
                                ?>
                                <input class="form-check-input" type="checkbox" name="Certificate"  value="Certificate" >
                                <?php
                              }
                              ?>
                              <label class="form-check-label" for="flexCheckDefault">
                                Certificate
                              </label>
                            </div>
                          </div>
                          <div class="col-md-3 form-group">
                            <div class="form-check">
                              <?php
                              if($Emergency=="Emergency")
                              {
                                ?>
                                <input class="form-check-input" type="checkbox" name="Emergency"  value="Emergency" checked >
                                <?php
                              }
                              else
                              {
                                ?>
                                <input class="form-check-input" type="checkbox" name="Emergency"  value="Emergency" >
                                <?php
                              }
                              ?>
                              <label class="form-check-label" for="flexCheckDefault">
                                Emergency

                              </label>
                            </div>
                            <div class="form-check">
                              <?php
                              if($Immunization=="Immunization")
                              {
                                ?>
                                <input class="form-check-input" type="checkbox" name="Immunization"  value="Immunization" checked >
                                <?php
                              }
                              else
                              {
                                ?>
                                <input class="form-check-input" type="checkbox" name="Immunization"  value="Immunization" >
                                <?php
                              }
                            ?>                        <label class="form-check-label" for="flexCheckDefault">
                              Immunization
                            </label>
                          </div>

                        </div>


                      </div>

                    </div>




                    <div class="row">
                      <div class="col-md-12 form-group" >

                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color: #e600ac;  color:white;">Update</button>

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
        <input type="submit" class="btn btn-primary" name="btn_update_data" value="Update">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
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

<?php

if(isset($_POST["btn_update_data"]))
{
  $doctorname = $_POST["doctorname"];
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
  $Ayurvedic = $_POST["Ayurvedic"];
  $Homeopathic = $_POST["Homeopathic"];
  $ANC = $_POST["ANC"];
  $PNC = $_POST["PNC"];
  $Camp = $_POST["Camp"];
  $Relative = $_POST["Relative"];
  $Certificate = $_POST["Certificate"];
  $Emergency = $_POST["Emergency"];
  $Immunization = $_POST["Immunization"];
  $id =  $_GET['id'];
  include("config.php");
  
  $qryy = "update nursing_station_pending set 
  consultation='$pre',
  temp='$temp',
  pulse='$Pulse',
  spO2='$spo2',
  Hypertension='$Hypertension',
  bp='$bp',
  Daibetis='$Daibetis',
  past='$past',
  Personal='$personal',
  Family='$family',
  General='$General',
  doctor ='$doctorname',
  Ayurvedic='$Ayurvedic',
  Homeopathic='$Homeopathic',
  ANC='$ANC',
  PNC='$PNC',
  Camp='$Camp',
  Relative='$Relative',
  Certificate='$Certificate',
  Emergency='$Emergency',
  Immunization='$Immunization'
  where id ='$id' ";
  $queryy = mysqli_query($q,$qryy);
  if($queryy) 
  {
    echo "<script>alert('Data Update')</script>";
    echo "<script>window.location='Nurshing.php';</script>";
  }
  else
  {
    echo "<script>alert('Data Not Update')</script>";
  }
}
?>