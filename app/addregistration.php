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
  <style>
    .hidden {
      display: none;
    }
  </style>
    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
     <ul class="nav nav-tabs" role="tablist">
                  <!-- <li class="nav-item">
                    <a class="nav-link active ps-0" id="cust_tab" data-bs-toggle="tab" href="#aa" role="tab" aria-controls="overview" aria-selected="true">Customer Details</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link"  data-bs-toggle="" href="addregistration" role="tab" aria-selected="false">Add  Registration Data </a>
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
                                  <h6 class="border-bottom mb-3" style="color: #e600ac;">Refer Details</h6>
                                  <div class="row mb-3">   
                                   <div class="col-md-4 form-group">
                                    <label>SELF : </label>
                                    <div class="form-check form-check-inline">
                                        <button type="button" class="btn btn-info" onclick="toggleself(this)" style="background-color: #FDC7FF; color: #e600ac; height: 30px; width: 80px; display: inline-flex; align-items: center; justify-content: center;">Off</button>
                                   </div>
                                 </div>
                                 <div class="col-md-4 form-group">
                                  <label for="Ather" class="hidden">REFER</label>
                                  <select class="form-control form-control-sm hidden" name="Ather" id="Ather">
                                    <option value="">Please Select Reffer</option>
                                    <?php
                                    include('../databases/config.php');
                                    $sql = mysqli_query($q,"select * from user");
                                    while($r = mysqli_fetch_array($sql))
                                    {
                                      echo "<option value='{$r[1]}' '>$r[1]</option>";
                                    }
                                    ?>
                                  </select>
                                </div>
                                <div class="col-md-4 form-group">
                                  <label for="other_name" class="hidden">OTHER</label>
                                  <input class="form-control form-control-sm hidden" name="other_name" type="text">
                                </div>
                              </div>
                                <script>
                          function toggleself(button) {
                            var referLabel = document.querySelector('[for="Ather"]');
                            var referSelect = document.getElementById('Ather');
                            var otherLabel = document.querySelector('[for="other_name"]');
                            var otherInput = document.querySelector('[name="other_name"]');
                            
                            referLabel.classList.toggle('hidden');
                            referSelect.classList.toggle('hidden');
                            otherLabel.classList.toggle('hidden');
                            otherInput.classList.toggle('hidden');
                            
                            // Update button text based on its current state
                            if (button.textContent.includes('Off')) {
                              button.textContent = 'On';
                            } else {
                              button.textContent = 'Off';
                            }
                          }
                        </script>
                            <h6 class="border-bottom mb-3" style="color: #e600ac;">Patient Details</h6>
                              <div class="row mb-3">
                                <div class="col-md-4 form-group">
                                  <label>Date & Time</label>
                                    <input class="form-control form-control-sm" type="datetime-local" name="date" id="dateInputDate" value="<?php date_default_timezone_set('Asia/Kolkata'); $currentDateTime = date('Y-m-d\TH:i'); echo $currentDateTime; ?>" />
                                </div>
                                <div class="col-md-4 form-group">
                                  <label>Name</label>
                                  <input class="form-control form-control-sm" type="text"  id="name" name="name" autocomplete="off">
                                  <div id="suggestion-box"></div>
                                </div>
                                <div class="col-md-4 form-group">
                                  <label>Age</label>
                                  <button type="button" class="btn btn-info"  onclick="changeInputType()" style="background-color: #FDC7FF; color: #e600ac; height: 30px; width: 80px; display: inline-flex; align-items: center; justify-content: center;">DOB</button>
                                  <input class="form-control form-control-sm" type="text"  name ="age" id="age">
                                </div>
                                <script>
                                  function changeInputType() {
                                    var inputElement = document.getElementById('age');
                                
                                    // Check the current type of the input
                                    if (inputElement.type === 'text') {
                                      // Change to date type
                                      inputElement.type = 'date';
                                    } else {
                                      // Change back to text type
                                      inputElement.type = 'text';
                                    }
                                  }
                                </script>
                              </div>
                              <div class="row mb-3">
                                <div class="col-md-4 form-group">
                                  <label>Sex</label>
                                  <!--<input class="form-control form-control-sm" type="text" placeholder="Enter Your City" name ="sex" id="sex"> -->
                                  <select class="form-control form-control-sm" aria-label="Default select example" name ="sex" id="sex">
                                    <option selected>Select Gander</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="TC">TC</option>
                                  </select>
                                </div>
                                <div class="col-md-4 form-group">
                                  <label>Mobile</label>
                                  <input class="form-control form-control-sm" type="number"  name="mobile" id="mobile">
                                </div>
                                <div class="col-md-4 form-group" >
                                  <label>Height</label>
                                  <input class="form-control form-control-sm" type="text" name ="height" id="height">
                                </div>
                              </div>
                              <div class="row mb-3">
                                <div class="col-md-4 form-group ">
                                  <label>Weight</label>
                                  <input class="form-control form-control-sm" type="text" name ="witdh" id="width">
                                </div>
                                <div class="col-md-4 form-group ">
                                  <label>MUAC</label>
                                  <input class="form-control form-control-sm" type="text"  name ="muac" id="muac">
                                </div>
                                <div class="col-md-4 form-group ">
                                  <label>Village</label>
                                  <!--<input class="form-control form-control-sm" type="text"  name ="village" id="country">-->
                                  <select class="form-control form-control-sm"  name="village" id="country">
                                    <option value="" selected>Select Village</option>
                                  </select>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <div class="col-md-4 form-group">
                                  <label>Sub Center</label>
                                  
                                  <!--<input class="form-control form-control-sm" type="text"  name ="subvillage" id="state">-->
                                  
                                  <select class="form-select form-select-sm" name="subvillage" id="state">
                                    <option selected>Select Sub Village</option>
                                  </select>
                                  
                                </div>
                                <div class="col-md-4 form-group">
                                  <label >Currect Address</label>
                                    <button type="button" id="toggleBtn" class="btn btn-info" style="background-color: #FDC7FF; color: #e600ac; height: 30px; width: 80px; display: inline-flex; align-items: center; justify-content: center;">
                                        Off
                                    </button>
                                  <textarea class="form-control"  name="address"  name ="address" id="address"></textarea>
                                </div>
                                <div class="col-md-4 form-group">
                                  <label >Permanent Address</label>
                                  <textarea class="form-control" id="p_address"   name="p_address"  name ="address" id="address" style="display: none;"></textarea>
                                    <script>
                                        document.getElementById('toggleBtn').addEventListener('click', function() {
                                            var textarea = document.getElementById('p_address');
                                            textarea.style.display = textarea.style.display === 'none' ? 'block' : 'none';
                                    
                                            // Change button name based on the toggle state
                                            var btnText = textarea.style.display === 'none' ? 'Off' : 'On';
                                            document.getElementById('toggleBtn').innerText = btnText;
                                        });
                                    </script>
                                </div>
                                <div class="col-md-4 form-group">
                                  <label>Ayushman Card</label>
                                  <input class="form-control form-control-sm" type="text" name ="ayushmancard" id="ayushmancard">
                                </div>
                                <div class="col-md-4 form-group">
                                  <label>ABha Card</label>
                                  <input class="form-control form-control-sm" type="text"  name="abhacard" id="abhacard">
                                </div>
                                <div class="col-md-4 form-group">
                                  <label>Complaint /Reason for refer</label>
                                  <input class="form-control form-control-sm" type="text" name="complain">
                                </div>
                              </div>
                              <div class="row mb-4">

                                <div class="col-md-4 form-group">
                                  <label>Remark</label>
                                  <input class="form-control form-control-sm" type="text"  name="remarks">
                                </div>
                                
                                <div class="col-md-4 form-group">
                                  <label>Adhar Card</label>
                                  <input class="form-control form-control-sm" type="text"  name="adharcard" id="adharcard">
                                </div>
                                
                              </div>
                              <div class="row">
                                <div class="col-md-12 form-group" >
                                  <input type="submit" class="btn btn-light" name="btn_registration" value="Registration"style="background-color: #e600ac;  color:white;">
                                  <input type="submit" class="btn btn-light" name="btn_nuring" value="Nursing Station"style="background-color: #e600ac;  color:white;">
                                  <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color: #e600ac;  color:white;">Consultation</button>
                                 <!-- <input type="submit" class="btn btn-light" name="btn_Consultation" value="Consultation"style="background-color: #e600ac;  color:white;"> -->
                                  <input type="submit" class="btn btn-light" name="" value="LAB"style="background-color: #e600ac;  color:white;">
                                  <input type="submit" class="btn btn-light" name="btn_ipd" value="IPD"style="background-color: #e600ac;  color:white;">
                                  <input type="submit" class="btn btn-light" name="" value="Cancle"style="background-color:white ;  color:#e600ac;">
                                </div>
                              </div>
                            </div>
                          </div><br>                          
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
        
    <!--========== Conslation Doctor select Model Start ============-->   
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
        <input type="submit" class="btn btn-primary" name="btn_Consultation" value="Submit">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--========== Conslation Doctor select Model Start ============-->   
        <?php
          include("../databases/config.php");
          $name = $_SESSION['username'];
          $entribyname ="";
          $abc = "select * from user where mobile_number='".$name."' ";
          $qqq = mysqli_query($q,$abc);
          while($roww = mysqli_fetch_array($qqq))
          {
            $entribyname = $roww[1];
          }
        error_reporting(0);
        function repearter_detail()
        {
          include('../databases/config.php');
          $refer_name=$_POST['Ather'];
          $other_name=$_POST['other_name'];
          $date = $_POST["date"];
          $name = $_POST["name"];
          $mobile = $_POST["mobile"];
          $age = $_POST["age"];
          $sex = $_POST["sex"];
          $height = $_POST["height"];
          $witdh = $_POST["witdh"];
          $muac = $_POST["muac"];
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
          $address = $_POST["address"];
          $ayushmancard = $_POST["ayushmancard"];
          $abhacard = $_POST["abhacard"];
          $complain = $_POST["complain"];
          $remarks = $_POST["remarks"];
        }
        function patient()
        {
          include('../databases/config.php');

          $refer_name=$_POST['Ather'];
          $other_name=$_POST['other_name'];
          $date = $_POST["date"];
          $namee = $_POST["name"];
          $mobile = $_POST["mobile"];
          $age = $_POST["age"];
          $sex = $_POST["sex"];
          $height = $_POST["height"];
          $witdh = $_POST["witdh"];
          $muac = $_POST["muac"];
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
          $address = $_POST["address"];
          $p_address = $_POST['p_address'];
          $ayushmancard = $_POST["ayushmancard"];
          $abhacard = $_POST["abhacard"];
          $complain = $_POST["complain"];
          $remarks = $_POST["remarks"];
          $adharcard = $_POST['adharcard'];
          
          
          
          $check = "SELECT * FROM patient WHERE name='$namee' AND mobile='$mobile'";
          $g = mysqli_query($q, $check);
          $h = mysqli_num_rows($g);

          if($h)
          {

          }
          else
          {
             include('../databases/config.php');
          $name = $_SESSION['username'];
          $entribyname ="";
          $abc = "select * from user where mobile_number='".$name."' ";
          $qqq = mysqli_query($q,$abc);
          while($roww = mysqli_fetch_array($qqq))
          {
            $entribyname = $roww[1];
          }
            $sql = "insert into patient values('..','".$namee."','".$age."','".$sex."','".$mobile."','".$height."','".$witdh."','".$village."','".$subvillage."','".$address."','".$p_address."','".$ayushmancard."','".$abhacard."','".$entribyname."','".$adharcard."')";
            $qry = mysqli_query($q,$sql);
            if($qry)
            {
              echo "<script>alert('Patient Add Successfully ')</script>";

            }
            else
            {
              echo "<script>alert('Patient Add Fail')</script>";
            }

          }
        }
        function reg()
        {
          patient();
          include('../databases/config.php');
          $refer_name=$_POST['Ather'];
          $other_name=$_POST['other_name'];
          
          
          
          
          $date = $_POST["date"];
        //  $date = date('Y-m-d H:i:s', strtotime($fackdate));
          $namei = $_POST["name"];
          $mobile = $_POST["mobile"];
          $age = $_POST["age"];
          $sex = $_POST["sex"];
          $height = $_POST["height"];
          $witdh = $_POST["witdh"];
          $muac = $_POST["muac"];
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
          $address = $_POST["address"];
          $p_address = $_POST['p_address'];
          $ayushmancard = $_POST["ayushmancard"];
          $abhacard = $_POST["abhacard"];
          $complain = $_POST["complain"];
          $remarks = $_POST["remarks"];
          $adharcard = $_POST['adharcard'];
          include('../databases/config.php');
          $name = $_SESSION['username'];
          $entribyname ="";
          $abc = "select * from user where mobile_number='".$name."' ";
          $qqq = mysqli_query($q,$abc);
          while($roww = mysqli_fetch_array($qqq))
          {
            $entribyname = $roww[1];
          }
          $sql = mysqli_query($q,"insert into registration values('..','".$refer_name."','".$other_name."','".$date."','".$namei."','".$mobile."','".$age."','".$sex."','".$height."','".$witdh."','".$muac."','".$village."','".$subvillage."','".$address."','".$p_address."','".$ayushmancard."','".$abhacard."','".$complain."','".$remarks."','".$entribyname."','".$adharcard."')");
          if($sql)
          {
            echo "<script>alert('Registation Successfully')</script>";
          }
          else
          {
            echo "<script>alert('Registation Fail')</script>";
          }
        }
        if(isset($_POST["btn_registration"]))
        {
          reg();
        }
        if(isset($_POST["btn_nuring"]))
        {
          reg();
          include('../databases/config.php');
          $refer_name=$_POST['Ather'];
          $other_name=$_POST['other_name'];
          $date = $_POST["date"];
          $namee = $_POST["name"];
          $mobile = $_POST["mobile"];
          $age = $_POST["age"];
          $sex = $_POST["sex"];
          $height = $_POST["height"];
          $witdh = $_POST["witdh"];
          $muac = $_POST["muac"];
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
          $address = $_POST["address"];
          $ayushmancard = $_POST["ayushmancard"];
          $abhacard = $_POST["abhacard"];
          $complain = $_POST["complain"];
          $remarks = $_POST["remarks"];
          $adharcard = $_POST['adharcard'];
          $status = "Pending";
          $nurshing_id = 0;
          include('../databases/config.php');
          $name = $_SESSION['username'];
          $entribyname ="";
          $abc = "select * from user where mobile_number='".$name."' ";
          $qqq = mysqli_query($q,$abc);
          while($roww = mysqli_fetch_array($qqq))
          {
            $entribyname = $roww[1];
          }
          $sqll = mysqli_query($q,"insert into nursing_station values('..','".$refer_name."','".$other_name."','".$date."','".$namee."','".$mobile."','".$age."','".$sex."','".$height."','".$witdh."','".$muac."','".$village."','".$subvillage."','".$address."','".$ayushmancard."','".$abhacard."','".$complain."','".$remarks."','".$status."','".$nurshing_id."','".$entribyname."','".$adharcard."')");

          if($sqll)
          {
            echo "<script>alert('Registation nursing_station Successfully')</script>";
          }
          else
          {
            echo "<script>alert('Registation nursing_station Fail')</script>";
          }
        }
        if(isset($_POST["btn_Consultation"]))
        {
          reg();
          include('../databases/config.php');
          $refer_name=$_POST['Ather'];
          $other_name=$_POST['other_name'];
          $date = $_POST["date"];
          $r_name = $_POST["name"];
          $mobile = $_POST["mobile"];
          $age = $_POST["age"];
          $sex = $_POST["sex"];
          $height = $_POST["height"];
          $witdh = $_POST["witdh"];
          $muac = $_POST["muac"];
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
          $address = $_POST["address"];
          $ayushmancard = $_POST["ayushmancard"];
          $abhacard = $_POST["abhacard"];
          $complain = $_POST["complain"];
          $remarks = $_POST["remarks"];
           $adharcard = $_POST['adharcard'];
          $doctorname = $_POST['doctorname'];
          $status ="Pending";
          include('../databases/config.php');
          $name = $_SESSION['username'];
          $entribyname ="";
          $abc = "select * from user where mobile_number='".$name."' ";
          $qqq = mysqli_query($q,$abc);
          while($roww = mysqli_fetch_array($qqq))
          {
            $entribyname = $roww[1];
          }
            $sql = mysqli_query($q, "INSERT INTO consultation VALUES('..','".$refer_name."','".$other_name."','".$date."','".$r_name."','".$mobile."','".$age."','".$sex."','".$height."','".$witdh."','".$muac."','".$village."','".$subvillage."','".$address."','".$ayushmancard."','".$abhacard."','".$complain."','".$remarks."','".$status."','".$entribyname."','".$doctorname."','".$adharcard."')");

          if($sql)
          {
            echo "<script>alert('btn_Consultation Successfully')</script>";
          }
          else
          {
            echo "<script>alert('btn_Consultation Fail')</script>";
          }
        }
        if(isset($_POST["btn_ipd"]))
        {
          reg();
          include('../databases/config.php');
          $refer_name=$_POST['Ather'];
          $other_name=$_POST['other_name'];
          $date = $_POST["date"];
          $name = $_POST["name"];
          $mobile = $_POST["mobile"];
          $age = $_POST["age"];
          $sex = $_POST["sex"];
          $height = $_POST["height"];
          $witdh = $_POST["witdh"];
          $muac = $_POST["muac"];
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
          $address = $_POST["address"];
          $ayushmancard = $_POST["ayushmancard"];
          $abhacard = $_POST["abhacard"];
          $complain = $_POST["complain"];
          $remarks = $_POST["remarks"];
           $adharcard = $_POST['adharcard'];
          $status ="Pending";
          include('../databases/config.php');
          $name = $_SESSION['username'];
          $entribyname ="";
          $abc = "select * from user where mobile_number='".$name."' ";
          $qqq = mysqli_query($q,$abc);
          while($roww = mysqli_fetch_array($qqq))
          {
            $entribyname = $roww[1];
          }
          $sql = mysqli_query($q,"insert into ipd values('..','".$refer_name."','".$other_name."','".$date."','".$name."','".$mobile."','".$age."','".$sex."','".$height."','".$witdh."','".$muac."','".$village."','".$subvillage."','".$address."','".$ayushmancard."','".$abhacard."','".$complain."','".$remarks."','".$status."','".$entribyname."','".$adharcard."')");

          if($sql)
          {
            echo "<script>alert('Registration ipd Successfully')</script>";
          }
          else
          {
            echo "<script>alert('Registration ipd  Fail')</script>";
          }
        }
        ?>
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

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
      $(document).ready(function () {
        var searchInput = $("#name");
        var mobileNumberInput = $("#mobile");
        var inputsex = $("#sex");
        var inputage = $("#age");
        var inputwidth = $("#width");
        var inputheight = $("#height");
        var inputvillage = $("#country");


        var inputsubvillage = $("#state");
        var inputaddress = $("#address");
        var inputayushmancard = $("#ayushmancard");
        var inputabhacard = $("#abhacard");
        var inputadharcard = $("#adharcard");




        var suggestionBox = $("#suggestion-box");

        searchInput.on("input", function () {
          var query = searchInput.val();

          if (query !== "") {
            $.ajax({
              url: "live_search.php",
              method: "POST",
              data: { query: query },
              success: function (data) {
                suggestionBox.html(data);
                suggestionBox.show();
              }
            });
          } else {
            suggestionBox.hide();
          }
        });

        suggestionBox.on("click", ".suggestion-item", function () {
          var selectedValue = $(this);

          var name = selectedValue.attr("data-name");
          var mobile = selectedValue.attr("data-mobile");
          var sex = selectedValue.attr("data-sex");
          var age = selectedValue.attr("data-age");
          var width = selectedValue.attr("data-width");
          var height = selectedValue.attr("data-height");
          var village = selectedValue.attr("data-village");
          var subvillage = selectedValue.attr("data-subvillage");
          var address = selectedValue.attr("data-address");
          var ayushmancard = selectedValue.attr("data-ayushmancard");
          var abhacard = selectedValue.attr("data-abhacard");
          var adharcard = selectedValue.attr("data-adharcard");





          searchInput.val(name);
          mobileNumberInput.val(mobile);
          inputsex.val(sex);
          inputage.val(age);
          inputwidth.val(width);
          inputheight.val(height);
          inputvillage.val(village);
          inputsubvillage.val(subvillage);
          inputaddress.val(address);
          inputayushmancard.val(ayushmancard);
          inputabhacard.val(abhacard);
          inputadharcard.val(adharcard);








          suggestionBox.hide();
        });
      });


    </script>
    <style>


      #suggestion-box {
        position: absolute;
        width: 30%;
        max-height: 150px;
        overflow-y: auto;
        border: 1px solid #ccc;
        border-top: none;
        display: none;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        z-index: 1;
      }

      .suggestion-item {
        padding: 8px;
        cursor: pointer;
        border-bottom: 1px solid #ccc;
      }

      .suggestion-item:last-child {
        border-bottom: none;
      }

      .suggestion-item:hover {
        background-color: #f2f2f2;
      }
    </style>

<script type="text/javascript" src="jquery.js"></script>
<script>
    $(document).ready(function () {
        function loadData(type, category_id) {
            $.ajax({
                url: "load-village.php",
                type: "POST",
                data: { type: type, id: category_id },
                success: function (data) {
                    if (type == "stateData") {
                        $("#state").html(data);
                    } else {
                        $("#country").append(data);
                    }
                }
            });
        }
        loadData();
        $("#country").on("change", function () {
            var country = $("#country").val();

            if (country != "") {
                loadData("stateData", country);
            } else {
                $("#state").html("");
            }
        });

        // Define inputvillage properly and set its value
        var inputvillage = $("#country");
        var village = selectedValue.attr("data-village"); // You need to define selectedValue
        inputvillage.val(village);
    });
</script>