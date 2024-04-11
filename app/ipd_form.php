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
                    <a class="nav-link"  data-bs-toggle="" href="addregistration" role="tab" aria-selected="false">Pending IPD Status </a>
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
                                        <span id="number"style="font-size: 13px;"><?php echo $_GET['sex']; ?></span>
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

                                <h6 class="border-bottom mb-3" style="color: #e600ac;">IPD</h6>
                                <div class="row mb-3">                      
                                 <div class="col-md-4 form-group">
                                  <label>RS</label>
                                  <input class="form-control form-control-sm" name="name" type="date" placeholder="Enter Your name" >
                                </div>
                                <div class="col-md-4 form-group">
                                  <label>CSV</label>
                                  <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                                </div>
                                <div class="col-md-4 form-group">
                                  <label>PA</label>
                                  <input class="form-control form-control-sm" type="number" placeholder="Enter your Mobile" name="mobile">
                                </div>

                              </div>


                              <h6 class="border-bottom mb-3" style="color: #e600ac;">Admission</h6>
                              <div class="row mb-3">
                                <div class="col-md-4 form-group">
                                  <label>RS</label>
                                  <input class="form-control form-control-sm" name="name" type="date" placeholder="Enter Your name" >
                                </div>
                                <div class="col-md-4 form-group">
                                  <label>CSV</label>
                                  <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                                </div>
                                <div class="col-md-4 form-group">
                                  <label>PA</label>
                                  <input class="form-control form-control-sm" type="number" placeholder="Enter your Mobile" name="mobile">
                                </div>
                              </div>

                              <h6 class="border-bottom mb-3" style="color: #e600ac;">Vitals Treatement</h6>
                              <div class="row mb-3 ">
                                <div class="col-md-3 form-group">
                                  <label>Date & Time</label>
                                  <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="vitals_date" value="<?php date_default_timezone_set('Asia/Kolkata'); echo date('d-m-Y h:i:s A');?>">
                                </div>
                                <div class="col-md-3 form-group">
                                  <label>Vitals</label>
                                  <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="vitals_vitals">
                                </div>
                                <div class="col-md-3 form-group">
                                  <label>BP</label>
                                  <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="vitals_bp">
                                </div>
                                <div class="col-md-3 form-group">
                                  <label>Pulse</label>
                                  <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="vitals_pulse">
                                </div>
                                <div class="col-md-3 form-group">
                                  <label>Temp</label>
                                  <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="vitals_temp">
                                </div>
                                <div class="col-md-3 form-group">
                                  <label>SPO2</label>
                                  <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="vitals_spo2">
                                </div>
                                <div class="col-md-3 form-group">
                                  <label>FHS</label>
                                  <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="vitals_fhs">
                                </div>
                                <div class="col-md-3 form-group">
                                  <label>Urin</label>
                                  <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="vitals_urin">
                                </div>
                                <div class="col-md-3 form-group">
                                  <label>Output</label>
                                  <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="vitals_output">
                                </div>
                                <div class="col-md-3 form-group">
                                  <label>Other</label>
                                  <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="vitals_other">
                                </div>
                                <div class="col-md-3 form-group"><br>
                                  <button type="submit" class="btn btn-light" name="vitals_btn" value="Submit"style="background-color:white ;  color:#e600ac;">Add</button>
                                </div>
                              </div>



                              <?php
                              if(isset($_POST["vitals_btn"]))
                              {
                                $vitals_date = $_POST['vitals_date'];
                                $vitals_vitals = $_POST['vitals_vitals'];
                                $vitals_bp = $_POST['vitals_bp'];
                                $vitals_pulse = $_POST['vitals_pulse'];
                                $vitals_temp = $_POST['vitals_temp'];
                                $vitals_spo2 = $_POST['vitals_spo2'];
                                $vitals_fhs = $_POST['vitals_fhs'];
                                $vitals_urin = $_POST['vitals_urin'];
                                $vitals_output = $_POST['vitals_output'];
                                $vitals_other = $_POST['vitals_other'];
                                $patient_id = $_GET['id'];
                                include("../databases/config.php");
                                $qry = "insert into vitals_treatment values('..','".$vitals_date."','".$vitals_vitals."','".$vitals_bp."','".$vitals_pulse."','".$vitals_temp."','".$vitals_spo2."','".$vitals_fhs."','".$vitals_urin."','".$vitals_output."','".$vitals_other."','".$patient_id."')";
                                $vital = mysqli_query($q,$qry);
                                if($vital)
                                {
                                  echo "<script>alert('Vitals Treatment Add Successfully')</script>";
                                }
                              }
                              $patient_id = $_GET['id'];
                              include("../databases/config.php");
                              $s = mysqli_query($q,"select * from vitals_treatment where patient_id='$patient_id' ");
                              ?>
                              <div class="table-responsive">
                                <?php
                                $patient_id = $_GET['id'];
                                include("../databases/config.php");
                                $s = mysqli_query($q,"select * from vitals_treatment where patient_id='$patient_id' ");
                                $i =1;
                                ?>
                                <table id="example" class="display table" style="width:100%;">
                                 <thead style=" background-color:#FDC7FF; color:#e600ac;">
                                  <tr>
                                   <th style="text-align:center; font-size:12px;">#</th>
                                   <th style="text-align:center; font-size:12px;">Date</th>
                                   <th style="text-align:center; font-size:12px;">Vitals</th>
                                   <th style="text-align:center; font-size:12px;">BP</th>
                                   <th style="text-align:center; font-size:12px;">Pulse</th>
                                   <th style="text-align:center; font-size:12px;">Temp</th>
                                   <th style="text-align:center; font-size:12px;">SpO2</th>
                                   <th style="text-align:center; font-size:12px;">FHS</th>
                                   <th style="text-align:center; font-size:12px;">Urin</th>
                                   <th style="text-align:center; font-size:12px;">Output</th>
                                   <th style="text-align:center; font-size:12px;">Other</th>
                                 </tr> 
                               </thead>
                               <?php while($v = mysqli_fetch_array($s)){?>
                                 <tbody>
                                  <tr>
                                    <th style="text-align:center; font-size:12px;"><?php echo $i?></th>
                                    <td style="text-align:center; font-size:12px;"><?php echo $v[1]?></td>
                                    <td style="text-align:center; font-size:12px;"><?php echo $v[2]?></td>
                                    <td style="text-align:center; font-size:12px;"><?php echo $v[3]?></td>
                                    <td style="text-align:center; font-size:12px;"><?php echo $v[4]?></td>
                                    <td style="text-align:center; font-size:12px;"><?php echo $v[5]?></td>
                                    <td style="text-align:center; font-size:12px;"><?php echo $v[6]?></td>
                                    <td style="text-align:center; font-size:12px;"><?php echo $v[7]?></td>
                                    <td style="text-align:center; font-size:12px;"><?php echo $v[8]?></td>
                                    <td style="text-align:center; font-size:12px;"><?php echo $v[9]?></td>
                                    <td style="text-align:center; font-size:12px;"><?php echo $v[10]?></td>
                                   <?php $i++; ?>
                                  </tr>
                                </tbody>
                              <?php } ?>
                            </table>
                          </div>



















                          <h6 class="border-bottom mb-3" style="color: #e600ac;">Examination Treatement</h6>
                          <div class="row mb-3">
                            <div class="col-md-3 form-group">
                              <label>Urin</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                            </div>
                            <div class="col-md-3 form-group">
                              <label>Output</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                            </div>
                            <div class="col-md-3 form-group">
                              <label>Other</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                            </div>
                            <div class="col-md-3 form-group">
                              <label>Urin</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                            </div>
                            <div class="col-md-3 form-group">
                              <label>Output</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                            </div>
                            <div class="col-md-3 form-group">
                              <label>Other</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                            </div>
                            <div class="col-md-3 form-group">
                              <label>Urin</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                            </div>
                            <div class="col-md-3 form-group"><br>
                              <button type="button" class="btn btn-light" name="" value="Submit"style="background-color:white ;  color:#e600ac;">Add</button>
                            </div>

                          </div>

                          <h6 class="border-bottom mb-3" style="color: #e600ac;">Medicine Treatment</h6>
                          <div class="row mb-3">
                            <div class="col-md-3 form-group">
                              <label>Urin</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                            </div>
                            <div class="col-md-3 form-group">
                              <label>Output</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                            </div>
                            <div class="col-md-3 form-group">
                              <label>Other</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                            </div>
                            <div class="col-md-3 form-group">
                              <label>Urin</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                            </div>
                            <div class="col-md-3 form-group">
                              <label>Output</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                            </div>
                            <div class="col-md-3 form-group">
                              <label>Other</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                            </div>
                            <div class="col-md-3 form-group">
                              <label>Urin</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                            </div>
                            <div class="col-md-3 form-group">
                              <label>Output</label>
                              <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                            </div>
                            <div class="col-md-3 form-group"><br>
                              <button type="button" class="btn btn-light" name="" value="Submit"style="background-color:white ;  color:#e600ac;">Add</button>
                            </div>                          
                          </div>
                          <h6 class="border-bottom mb-3" style="color: #e600ac;">Refer</h6>
                          <div class="row mb-3">
                           <div class="col-md-3 form-group">
                            <label>Advice</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                          </div>
                          <div class="col-md-3 form-group">
                            <label>Advice</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                          </div>
                          <div class="col-md-3 form-group">
                            <label>Advice</label>
                            <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                          </div>
                          <div class="col-md-3 form-group"><br>
                            <button type="button" class="btn btn-light" name="" value="Submit"style="background-color:white ;  color:#e600ac;">Add</button>
                          </div>

                        </div>
                        <h6 class="border-bottom mb-3" style="color: #e600ac;">Staff Name</h6>
                        <div class="row mb-3">
                         <div class="col-md-3 form-group">
                          <label>Advice</label>
                          <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                        </div>
                        <div class="col-md-3 form-group">
                          <label>Advice</label>
                          <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                        </div>
                        <div class="col-md-3 form-group">
                          <label>Advice</label>
                          <input class="form-control form-control-sm" type="text" placeholder="Enter your Email" name="email">
                        </div>
                        <div class="col-md-3 form-group"><br>
                          <button type="button" class="btn btn-light" name="" value="Submit"style="background-color:white ;  color:#e600ac;">Add</button>
                        </div>

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 form-group" >
                       <input type="submit" class="btn btn-light" name="" value="Discharge"style="background-color: #e600ac;  color:white;">
                       <input type="submit" class="btn btn-light" name="" value="Print Consent"style="background-color: #e600ac;  color:white;">

                       <input type="submit" class="btn btn-light" name="" value="Indoor Case Sheet"style="background-color: #e600ac;  color:white;">
                       <input type="submit" class="btn btn-light" name="" value="Nursing Notes"style="background-color: #e600ac;  color:white;">
                       <input type="submit" class="btn btn-light" name="" value="Discharge Card"style="background-color: #e600ac;  color:white;">
                       <input type="submit" class="btn btn-light" name="" value="Cancle"style="background-color:white ;  color:#e600ac;">

                     </div>

                   </div>
                 </div>
               </div><br>                          
             </form>



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