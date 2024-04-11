<?php
include("../databases/config.php");
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
                    <a class="nav-link"  data-bs-toggle="" href="addregistration" role="tab" aria-selected="false">Pending Doctor Status </a>
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
                                   <h6 class="mb-0" style="color: #e600ac;">Patient Details
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="float: right;">
                                      details
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                      <div class="modal-dialog ">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Patient Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="row">
                                              <div class="col-md-6">
                                               <div class="row form-group">

                                                <?php 

                                                
                                                $modeldata_date = "";
                                                $model_name = "";
                                                $model_mobile = "";
                                                $model_sex = "";
                                                $model_village = "";
                                                $model_subvillage = "";
                                                $model_pre = "";
                                                $model_hypertension = "";
                                                $model_temp = "";
                                                $model_bp = "";
                                                $model_pulse = "";
                                                $model_diabetis = "";
                                                $model_sp02 = "";
                                                $model_past = "";
                                                $model_personal = "";
                                                $model_family = "";
                                                $model_pt = "";
                                                $model_doctore = "";
                                                $id = $_GET['id'];
                                                $query = mysqli_query($q,"select * from nursing_station_pending where id ='$id' ");
                                                while($modeldata = mysqli_fetch_assoc($query))
                                                {
                                                  $modeldata_date = $modeldata['date'];
                                                  $model_name = $modeldata['Name'];
                                                  $model_mobile = $modeldata['Mobile'];
                                                  $model_sex = $modeldata['Sex'];
                                                  $model_village = $modeldata['Village'];
                                                  $model_subvillage = $modeldata['Subcenter'];
                                                  $model_pre = $modeldata['consultation'];
                                                  $model_hypertension = $modeldata['Hypertension'];
                                                  $model_temp = $modeldata['temp'];
                                                  $model_bp = $modeldata['bp'];
                                                  $model_pulse = $modeldata['pulse'];
                                                  $model_diabetis = $modeldata['Daibetis'];
                                                  $model_sp02 = $modeldata['spO2'];
                                                  $model_past = $modeldata['past'];
                                                  $model_personal = $modeldata['Personal'];
                                                  $model_family = $modeldata['Family'];
                                                  $model_pt = $modeldata['General']."<br>".$modeldata['Ayurvedic'].",".$modeldata['Homeopathic'].",".$modeldata['ANC'].",".$modeldata['PNC'].",".$modeldata['Camp'].",".$modeldata['Relative'].",".$modeldata['Certificate'].",".$modeldata['Emergency'].",".$modeldata['Immunization'];           
                                                }

                                                ?>


                                                <div class="info">
                                                  <label for="name" style="font-size: 13px; color: #e600ac;">Name:</label>
                                                  <span id="name" style="font-size: 13px; color: black;"><?php echo $model_name ?></span>
                                                </div>
                                                <div class="info">
                                                  <label for="number"style="font-size: 13px; color: #e600ac;">Mobile:</label>
                                                  <span id="number"style="font-size: 13px;color: black;"><?php echo $model_mobile ?></span>
                                                </div>
                                                <div class="info">
                                                  <label for="number"style="font-size: 13px; color: #e600ac;">sex:</label>
                                                  <span id="number"style="font-size: 13px;color: black;"><?php echo $model_sex ?> </span>
                                                </div>
                                                <div class="info">
                                                  <label for="number"style="font-size: 13px; color: #e600ac;">Village:</label>
                                                  <span id="number"style="font-size: 13px;color: black;"><?php echo $model_village ?></span>
                                                </div>
                                                <div class="info">
                                                  <label for="number"style="font-size: 13px; color: #e600ac;">Sub center:</label>
                                                  <span id="number"style="font-size: 13px;color: black;"><?php echo $model_subvillage ?></span>
                                                </div>
                                                <div class="info">
                                                  <label for="name" style="font-size: 13px; color: #e600ac;">Pre consultation:</label>
                                                  <span id="name" style="font-size: 13px; color: black;"><?php echo $model_pre ?></span>
                                                </div>
                                                <div class="info">
                                                  <label for="name" style="font-size: 13px; color: #e600ac;">Hypertention:</label>
                                                  <span id="name" style="font-size: 13px; color: black;"><?php echo $model_hypertension ?></span>
                                                </div>
                                                <div class="info">
                                                  <label for="name" style="font-size: 13px; color: #e600ac;">Temp:</label>
                                                  <span id="name" style="font-size: 13px; color: black;"><?php echo $model_temp ?></span>
                                                </div>
                                                <div class="info">
                                                  <label for="name" style="font-size: 13px; color: #e600ac;">BP:</label>
                                                  <span id="name" style="font-size: 13px; color: black;"><?php echo $model_bp ?></span>
                                                </div>
                                              </div>                                              
                                            </div>
                                            <div class="col-md-6">
                                             <div class="row form-group">
                                              <div class="info">
                                                <label for="name" style="font-size: 13px; color: #e600ac;">Pulse:</label>
                                                <span id="name" style="font-size: 13px; color: black;"><?php echo $model_pulse ?></span>
                                              </div>
                                              <div class="info">
                                                <label for="number"style="font-size: 13px; color: #e600ac;">Diabetis:</label>
                                                <span id="number"style="font-size: 13px;color: black;"><?php echo $model_diabetis ?></span>
                                              </div>
                                              <div class="info">
                                                <label for="number"style="font-size: 13px; color: #e600ac;">SPO2:</label>
                                                <span id="number"style="font-size: 13px;color: black;"><?php echo $model_sp02 ?></span>
                                              </div>
                                              <div class="info">
                                                <label for="number"style="font-size: 13px; color: #e600ac;">Past History:</label>
                                                <span id="number"style="font-size: 13px;color: black;"><?php echo $model_past ?></span>
                                              </div>
                                              <div class="info">
                                                <label for="name" style="font-size: 13px; color: #e600ac;">Personal History:</label>
                                                <span id="name" style="font-size: 13px; color: black;"><?php echo $model_personal ?></span>
                                              </div>
                                              <div class="info">
                                                <label for="name" style="font-size: 13px; color: #e600ac;">Family History:</label>
                                                <span id="name" style="font-size: 13px; color: black;"><?php echo $model_family ?></span>
                                              </div>
                                              <div class="info">
                                                <label for="name" style="font-size: 13px; color: #e600ac;">PT Category:</label>
                                                <span id="name" style="font-size: 13px; color: black;"><?php echo $model_pt ?></span>
                                              </div>
                                              <div class="info">
                                                <label for="name" style="font-size: 13px; color: #e600ac;">Doctor:</label>
                                                <span id="name" style="font-size: 13px; color: black;"><?php echo $model_doctore ?></span>
                                              </div>

                                            </div>                                              
                                          </div>

                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:white ;  color:#e600ac;">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </h6>
                                <div class="col-md-6">
                                 <div class="row form-group">
                                  <div class="info">
                                    <label for="name">Name:</label>
                                    <span id="name" style="font-size: 13px;"><?php echo $_GET['name'] ?></span>
                                  </div>
                                  <div class="info">
                                    <label for="number">Number:</label>
                                    <span id="number"style="font-size: 13px;"><?php echo $_GET['mobile'] ?></span>
                                  </div>
                                  <div class="info">
                                    <label for="number">Sex:</label>
                                    <span id="number"style="font-size: 13px;"><?php echo $_GET['sex'] ?></span>
                                  </div>
                                  <div class="info">
                                    <label for="number">Village:</label>
                                    <span id="number"style="font-size: 13px;"><?php echo $_GET['village'] ?></span>
                                  </div>
                                  <div class="info">
                                    <label for="number">Sub Center:</label>
                                    <span id="number"style="font-size: 13px;"><?php echo $_GET['subvillage'] ?></span>
                                  </div>
                                </div>

                              </div>
                            </div>

                            <h6 class="border-bottom mb-3" style="color: #e600ac;">Symtoms Details</h6>
                            <div class="row mb-3">                      
                             <div class="col-md-4 form-group">
                              <label>Symtoms list</label>
                              <input class="form-control form-control-sm" type="text"  name="email">
                            </div>
                            <div class="col-md-4 form-group">
                              <label>Other Symtoms</label>
                              <input class="form-control form-control-sm" type="text" name="mobile">
                            </div>
                          </div>

<!-- ================================================== Examination Start  =====================================-->



    <style>
        .hidden {
            display: none;
        }
    </style>
                          <h6 class="border-bottom mb-3" style="color: #e600ac;">Examination</h6>
                            <button onclick="toggleData(1)" type="button" class="btn btn-info" style="background-color: #FDC7FF; color:#e600ac;">General</button>
                            <button onclick="toggleData(2)" type="button" class="btn btn-info" style="background-color: #FDC7FF; color:#e600ac;">GIT</button>
                            <button onclick="toggleData(3)" type="button" class="btn btn-info" style="background-color: #FDC7FF; color:#e600ac;">RS</button>
                            <button onclick="toggleData(4)" type="button" class="btn btn-info" style="background-color: #FDC7FF; color:#e600ac;">GUT</button>
                            <button onclick="toggleData(5)" type="button" class="btn btn-info" style="background-color: #FDC7FF; color:#e600ac;">CVS</button></button>
                            <button onclick="toggleData(6)" type="button" class="btn btn-info" style="background-color: #FDC7FF; color:#e600ac;">CNS</button>
                            <button onclick="toggleData(8)" type="button" class="btn btn-info" style="background-color: #FDC7FF; color:#e600ac;">PA</button>
                            <button onclick="toggleData(9)" type="button" class="btn btn-info" style="background-color: #FDC7FF; color:#e600ac;">PV</button>
                            <button onclick="toggleData(7)" type="button" class="btn btn-info" style="background-color: #FDC7FF; color:#e600ac;">Others</button>
<!--=== Genaral Tab Start============================================ -->
<div id="data1" class="hidden">
    <div class="row mb-3">
        <div class="container">
     <div class="row" style="border: 1px solid gray; background-color: #fafafa;">            
            <div class="col-md-4">
              <div class="col-md-12 form-group">
                <label>Temperature</label>
                <input class="form-control form-control-sm" name="name" type="text">
              </div>
            </div>
            <div class="col-md-8 mt-1" style="border: 1px solid #bababa">
                    <div class="row">
                         <div class="col-md-3 form-group d-inline">
                                <label>Conjunction</label>
                                <input class="form-control form-control-sm" name="name" type="text">
                            </div>
                            
                            <div class="col-md-3 form-group d-inline">
                                <label>togue</label>
                                <input class="form-control form-control-sm" name="name" type="text">
                            </div>
                            
                            <div class="col-md-3 form-group d-inline">
                                <label>Soft Palate</label>
                                <input class="form-control form-control-sm" name="name" type="text">
                            </div>
                            
                            <div class="col-md-3 form-group d-inline">
                                <label>Palms n Nails</label>
                                <input class="form-control form-control-sm" name="name" type="text">
                            </div>
                    </div>
            </div>
            
            
            <div class="col-md-4">
              <div class="col-md-12 form-group">
                <label>Pulse</label>
                <input class="form-control form-control-sm" name="name" type="text">
              </div>
            </div>
            <div class="col-md-8 mt-1" style="border: 1px solid #bababa">
                    <div class="row" >
                         <div class="col-md-2 form-group d-inline">
                             <br>
                                <div class="form-check">
                                    <label>
                                    None
                                  </label>
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                </div>
                            </div>
                            
                             <div class="col-md-2 form-group d-inline"><br>
                                <div class="form-check">
                                    <label>
                                    I
                                  </label>
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                </div>
                            </div>
                            
                            <div class="col-md-2 form-group d-inline"><br>
                                <div class="form-check">
                                    <label>
                                    II
                                  </label>
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                </div>
                            </div>
                            
                            <div class="col-md-2 form-group d-inline"><br>
                                  <div class="form-check">
                                    <label>
                                    III
                                  </label>
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                </div>
                            </div>
                                <div class="col-md-2 form-group d-inline"><br>
                                 <div class="form-check">
                                    <label>
                                    IV
                                  </label>
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                </div>
                            </div>
                            <div class="col-md-2 form-group d-inline">
                                 
                            </div>
                            
                    </div>
            </div>
            
            
            <div class="col-md-4">
              <div class="col-md-12 form-group">
                <label>Respiration</label>
                <input class="form-control form-control-sm" name="name" type="text">
              </div>
            </div>
            <div class="col-md-8 mt-1" style="border: 1px solid #bababa">
                    <div class="row">
                         <div class="col-md-4 form-group d-inline">
                                <label>None</label>
                                <input class="form-control form-control-sm" name="name" type="text">
                            </div>
                            
                            <div class="col-md-4 form-group d-inline">
                                <label>Central</label>
                                <input class="form-control form-control-sm" name="name" type="text">
                            </div>
                            
                            <div class="col-md-4 form-group d-inline">
                                <label>Peripherl</label>
                                <input class="form-control form-control-sm" name="name" type="text">
                            </div>
                    </div>
            </div>
            
            
            <div class="col-md-4 form-group d-inline">
                                <label>Blood Pressure</label>
                                <input class="form-control form-control-sm" name="name" type="text">
                            </div>
                            <div class="col-md-4 form-group d-inline">
                                <label>Height</label>
                                <input class="form-control form-control-sm" name="name" type="text">
                            </div>
                            <div class="col-md-4 form-group d-inline">
                                <label>Weight</label>
                                <input class="form-control form-control-sm" name="name" type="text">
                            </div>
                            <div class="col-md-4 form-group d-inline">
                                <label>Built</label>
                                <input class="form-control form-control-sm" name="name" type="text">
                            </div>
                            <div class="col-md-4 form-group d-inline">
                                <label>Gitt</label>
                                <input class="form-control form-control-sm" name="name" type="text">
                            </div>        
                            <div class="col-md-4 form-group d-inline">
                                <label>Hair</label>
                                <input class="form-control form-control-sm" name="name" type="text">
                            </div>        
                            <div class="col-md-4 form-group d-inline">
                                <label>Skin/Nails</label>
                                <input class="form-control form-control-sm" name="name" type="text">
                            </div>        
                            <div class="col-md-4 form-group d-inline">
                                <label>Lymph Node Enlargement</label>
                                <input class="form-control form-control-sm" name="name" type="text">
                            </div>        
                            <div class="col-md-4 form-group d-inline">
                                <label>Birthmarks/Moles/Wart</label>
                                <input class="form-control form-control-sm" name="name" type="text">
                            </div>
                            <div class="col-md-4 form-group d-inline">
                                <label>Oedema</label>
                                <input class="form-control form-control-sm" name="name" type="text">
                            </div>
                            <div class="row">
                            <div class="col-md-6 form-group d-inline">
                                <label style="color:#C20018">Free Field1</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div> 
                            <div class="col-md-6 form-group d-inline">
                                <label style="color:#C20018">Free Field2</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Remarks</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                            </div>
        
        </div>
        </div>
    </div>
</div>
<!--=== Genaral Tab End============================================ -->

<!--=== GIT Tab Start============================================ -->

                            <div id="data2" class="hidden">                               
                            <div class="row mb-3">
                            <div class="container">
                            <div class="row" style="border:1px solid gray; background-color: #fafafa;">
                             <div class="col-md-12 form-group d-inline">
                                <label>Inspection</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Palpation</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Percussion</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Aucultation</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-6 form-group d-inline">
                                <label style="color:#C20018">Free Field1</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-6 form-group d-inline">
                                <label style="color:#C20018">Free Field2</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Remarks</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
<!--=== GIT Tab End============================================ -->

<!--=== RS Tab Start============================================ -->
                            <div id="data3" class="hidden">
                            <div class="row mb-3">
                            <div class="container">
                            <div class="row" style="border:1px solid gray; background-color: #fafafa;">
                             <div class="col-md-12 form-group d-inline">
                                <label>Inspection</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Palpation</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Percussion</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Aucultation</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-6 form-group d-inline">
                                <label style="color:#C20018">Free Field1</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-6 form-group d-inline">
                                <label style="color:#C20018">Free Field2</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Remarks</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
<!--=== RS Tab End============================================ -->

<!--=== GUT Tab Start============================================ -->
                            <div id="data4" class="hidden">
                            <div class="row mb-3">
                            <div class="container">
                            <div class="row" style="border:1px solid gray; background-color: #fafafa;">
                             <div class="col-md-12 form-group d-inline">
                                <label>Inspection</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Palpation</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Percussion</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Aucultation</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-6 form-group d-inline">
                                <label style="color:#C20018">Free Field1</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-6 form-group d-inline">
                                <label style="color:#C20018">Free Field2</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Remarks</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
<!--=== GUT Tab End============================================ -->

<!--=== Cardiac Tab Start============================================ -->
                            <div id="data5" class="hidden">
                            <div class="row mb-3">
                            <div class="container">
                            <div class="row" style="border:1px solid gray;background-color: #fafafa;">
                             <div class="col-md-12 form-group d-inline">
                                <label>Inspection</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Palpation</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Percussion</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Aucultation</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-6 form-group d-inline">
                                <label style="color:#C20018">Free Field1</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-6 form-group d-inline">
                                <label style="color:#C20018">Free Field2</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Remarks</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
<!--=== Cardiac Tab End============================================ -->

<!--=== CNS Tab Start============================================ -->

                            <div id="data6" class="hidden">
                            <div class="row mb-3">
                            <div class="container">
                            <div class="row" style="border:1px solid gray;background-color: #fafafa;">
                             <div class="col-md-12 form-group d-inline">
                                <label>Sensory</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Locomottor</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Creanial Nerves</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Reflexes</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-6 form-group d-inline">
                                <label style="color:#C20018">Free Field1</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-6 form-group d-inline">
                                <label style="color:#C20018">Free Field2</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Remarks</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
<!--=== CNS Tab End============================================ -->
<!--=== PA Tab Start============================================ -->

                            <div id="data8" class="hidden">
                            <div class="row mb-3">
                            <div class="container">
                            <div class="row" style="border:1px solid gray; background-color: #fafafa;">
                             <div class="col-md-12 form-group d-inline">
                                <label>Inspection</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Palpation</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Percussion</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Aucultation</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-6 form-group d-inline">
                                <label style="color:#C20018">Free Field1</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-6 form-group d-inline">
                                <label style="color:#C20018">Free Field2</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Remarks</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
<!--=== PA Tab End============================================ -->

<!--=== PV Tab Start============================================ -->
                            <div id="data9" class="hidden">
                            <div class="row mb-3">
                            <div class="container">
                            <div class="row" style="border:1px solid gray;background-color: #fafafa;">
                             <div class="col-md-12 form-group d-inline">
                                <label>External</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Internal</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
<!--=== PV Tab End============================================ -->

<!--=== Others Tab Start============================================ -->

                            <div id="data7" class="hidden">
                            <div class="row mb-3">
                            <div class="container">
                            <div class="row" style="border:1px solid gray;background-color: #fafafa;">
                             <div class="col-md-12 form-group d-inline">
                                <label>Other  Details</label>
                                <textarea class="form-control form-control-sm" name="name" rows="6"></textarea>
                            </div>
                             <div class="col-md-6 form-group d-inline">
                                <label style="color:#C20018">Free Field1</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-6 form-group d-inline">
                                <label style="color:#C20018">Free Field2</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                             <div class="col-md-12 form-group d-inline">
                                <label>Remarks</label>
                                <textarea class="form-control form-control-sm" name="name" type="text"></textarea>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
<!--=== Others Tab End============================================ -->
                            <script>
                                function toggleData(buttonNumber) {
                                    for (let i = 1; i <= 9; i++) {
                                        const element = document.getElementById('data' + i);
                                        if (i === buttonNumber) {
                                            // Toggle the visibility of the clicked element
                                            element.classList.toggle('hidden');
                                        } else {
                                            // Hide other elements
                                            element.classList.add('hidden');
                                        }
                                    }
                                }
                            </script>
<!-- ==================================== Examination End  ==========================-->


<!-- ==================================== Lab Request Start  ==========================-->

                         <form method="post" action="">
    <h6 class="border-bottom mb-3" style="color: #e600ac;">LAB Request</h6>
    <div class="row mb-3">
        <div class="col-md-4 form-group">
            <label>Report list</label>
            <select id="labreport_save" name="labreport_save[]" style="width: 300px;" class="form-control" multiple="multiple">
                <option selected>Select Laboratory report</option>
                <?php
                include('../database/config.php');
                $g = mysqli_query($q,"select * from labrepoerlist");
                while($o = mysqli_fetch_array($g))
                {
                    echo "<option value='$o[1]'>$o[1]</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-md-4 form-group"><br>
            <input type="submit" class="btn btn-light" name="btn_lab_request" style="background-color:white ;  color:#e600ac;" value="Add">
        </div>
    </div>
</form>

<?php
if(isset($_POST['btn_lab_request'])) {

    $lab_req = $_POST['labreport_save'];
    $id = $_GET['id'];
    
    foreach ($lab_req as $selected_report) {
        //    $id  / $selected_report
      mysqli_query($q,"insert into req_lab values('..','".$selected_report."','".$id."')");
    }
}
?>


<!-- ==================================== Lab Request End  ==========================-->
                          <div class="table-responsive">
                          <table id="example" class="display table" style="width:100%;">
                           <thead style=" background-color:#FDC7FF; color:#e600ac;">
                            <tr>
                              <th style="text-align:center; font-size:12px;">#</th>
                              <th style="text-align:center; font-size:12px;">Report Name</th>
                              <th style="text-align:center; font-size:12px;">Action</th>
                            </tr> 
                          </thead>
                            <?php 
                            $id = $_GET['id'];
                            $qr = mysqli_query($q, "select * from req_lab where user_id='$id' ");
                            while($r = mysqli_fetch_assoc($qr))
                            {
                                

                            ?>
                          <tbody >
                            <th style="text-align:center; font-size:12px;">#</th>
                            <th style="text-align:center; font-size:12px;"><?php echo $r['report_name']; ?></th>
                            <th style="text-align:center; font-size:12px;">Action</th>
                          </tbody>
                          <?php
                            }                          
                          ?>
                          
                          
                          
                        </table>
                        </div>
                        <h6 class="border-bottom mb-3" style="color: #e600ac;">Diagnosis</h6>
                        <div class="row mb-3">
                          <div class="col-md-4 form-group">
                            <label>IDSP : </label>
<!--                            <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="p_refer" id="exampleRadios1" checked onclick="toggleFields()">
                             <label class="form-check-label" for="exampleRadios1">
                              yes
                            </label><br>

                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="p_refer" id="inlineRadio2" onclick="toggleFields()">
                            <label class="form-check-label" for="inlineRadio2">No</label>
                          </div>-->
                          <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Other</option>
                            <?php 
                            include('../database/config.php');
                            $g = mysqli_query($q,"select * from idsp_list");
                            while($o = mysqli_fetch_array($g))
                            {
                                echo "<option value=$o[1]>$o[1]</option>";
                            }
                            
                            ?>
                          </select>

                        </div>

                        <div class="col-md-4 form-group">
                          <label>Other</label>
                          <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Select Other Diagnosis</option>
                            <?php 
                            include('../database/config.php');
                            $g = mysqli_query($q,"select * from other_list");
                            while($o = mysqli_fetch_array($g))
                            {
                                echo "<option value=$o[1]>$o[1]</option>";
                            }
                            ?>
                          </select>
                          
                        </div> 
                      </div>
<!-- ==================================== Treatment End  ==========================-->
<style>
    .inline-elements {
        display: inline-flex; /* or inline-block */
        align-items: center; /* optional: align items vertically */
    }
</style>

<!-- Your HTML code with inline style -->
<h6 class="border-bottom mb-3" style="color: #e600ac;">
    Treatment
    <div class="inline-elements">
        <select class="form-control form-control-sm w-40 col-21" name="Treatment" id="Treatment">
            <option>select Treatment</option>
            <?php
            include("../databases/config.php");
            $th = mysqli_query($q, "SELECT DISTINCT Name FROM Add_Treatment");
            while ($r = mysqli_fetch_array($th)) {
                echo "<option>" . htmlspecialchars($r[0]) . "</option>";
            }
            ?>
        </select>
        <button type="submit" class="btn btn-light" name="t_add" value="Submit" style="background-color:white ;  color:#e600ac;">Add</button>
    </div>
</h6>

<!-- =Add Treatment========================================================================== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
                      <div class="row mb-3">
                     <form mathod="post">
                        <div class="col-md-4 form-group">
                          <label>Name</label>
                          <input class="form-control form-control-sm" type="text" id="t_name"  name="t_name">
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Dose</label>
                          <br>
                          <!--<input class="form-control form-control-sm" type="text" id="t_dose"  name="t_dose">-->
                          <select id="t_dose" name="t_dose" style="width: 300px;" class="form-control">
                           <option value="" disabled selected>Select Dose----</option>
                          <option value="option1">Option 1</option>
                          <option value="option2">Option 2</option>
                          <option value="option3">Option 3</option>
                        </select>
                        </div>  
                        <div class="col-md-4 form-group">
                          <label>Qnt</label><br>
                        <select id="t_qnt" name="t_qnt" style="width: 300px;" class="form-control">
                           <option value="" disabled selected>Select Qnt----</option>
                                    <option value="1">1</option>  
                                    <option value="1/2">1/2</option>
                                    <option value="2">2</option>
                                    <option value="0.1 ml">0.1 ml</option>
                                    <option value="0.5 ml">0.5 ml</option>
                                    <option value="1 ml">1 ml</option>
                                    <option value="2 ml">2 ml</option>
                                    <option value="3 ml">3 ml</option>
                                    <option value="5 ml">5 ml</option>
                                    <option value="7.5 ml">7.5 ml</option>
                                    <option value="10 ml">10 ml</option>
                                    <option value="20 ml">20 ml</option>
                                    <option value="5 Drops">5 Drops</option>
                                    <option value="10 Drops">10 Drops</option>
                                    <option value="100 ml">100 ml</option>
                                    <option value="250 ml">250 ml</option>
                                    <option value="500 ml">500 ml</option>
                        </select>
                          <!--<input class="form-control form-control-sm" type="text" id="t_qnt"  name="t_qnt">-->
                        </div>
                        <div class="col-md-4 form-group">
                          <label>Frequency</label><br>
                        <select id="t_frequency" name="t_frequency" style="width: 300px;" class="form-control">
                            <option value="સવાર-બપોર-સાંજ" selected>સવાર-બપોર-સાંજ</option>
                            <option value="સવાર-બપોર-સાંજ- રાત્રે">સવાર-બપોર-સાંજ- રાત્રે</option>
                            <option value="સવાર - 0- સાંજ-0">સવાર - 0- સાંજ-0</option>
                            <option value="0- બપોર-  0 - 0">0- બપોર-  0 - 0</option>
                            <option value="સવાર - 0- 0-0 ">સવાર - 0- 0-0 </option> 
                            <option value="0-0- સાંજ-0 ">0-0- સાંજ-0 </option> 
                            <option value="0-0-0-રાત્રે">0-0-0-રાત્રે</option>
                            <option value="દર્ અવાડીયે એક વાર">દર્ અવાડીયે એક વાર</option>
                        </select>
                          <!--<input class="form-control form-control-sm" type="text" id="t_frequency"  name="t_frequency">-->
                        </div>  
                        <div class="col-md-4 form-group">
                          <label>Rout</label><br>
                        <select id="t_rout" name="t_rout" style="width: 300px;" class="form-control">
                            
                            <option value="Oral" selected>Oral</option>
                            <option value="Intramuscular">Intramuscular</option>
                            <option value="Intravenous">Intravenous</option>
                            <option value="Intradermal">Intradermal</option>
                            <option value="Subcutaneous">Subcutaneous</option>
                            <option value="Topical">Topical</option>
                            <option value="Vaginal">Vaginal</option>
                            <option value="Sublingual">Sublingual</option>
                        </select>
<!--                          <input class="form-control form-control-sm" type="text" id="t_rout"  name="t_rout">
-->                        </div>
                        <div class="col-md-4 form-group">
                          <label>Duration</label><br>
                        <select id="t_duration" name="t_duration" style="width: 300px;" class="form-control">
                        <option value="3 Days" selected>3 Days</option>
                        <option value="5 Days">5 Days</option>
                        <option value="10 Days">10 Days</option>
                        <option value="20 Days">20 Days</option>
                        <option value="30 days">30 days</option>
                        </select>
<!--                          <input class="form-control form-control-sm" type="text" id="t_duration"  name="t_duration">
-->                        </div>  
                        <div class="col-md-4 form-group">
                          <label>Advice</label><br>
                        <select id="t_advice" name="t_advice[]" style="width: 300px;" class="form-control" multiple="multiple">
                            <option value="જમયા પછી"  selected> જમયા પછી</option>
                            <option value="જમયા પહેલા">જમયા પહેલા</option>
                            <option value="પાણી સાથે">પાણી સાથે</option>
                            <option value="દુધ સાથે">દુધ સાથે</option>
                            <option value="રાત્રે સૂતી વખતે">રાત્રે સૂતી વખતે</option>
                            <option value="રાત્રે સૂતી વખતે ગરમ પાણી સાથે">રાત્રે સૂતી વખતે ગરમ પાણી સાથે</option>
                            <option value="તીખા અને તેલ વાળા ખોરાક લેવા નહી.">તીખા અને તેલ વાળા ખોરાક લેવા નહી.</option>
                            <option value="પૂરતો આરામ કરવો">પૂરતો આરામ કરવો</option>
                            <option value="બહાર ના ખોરાક લેવાનુ ટાળવુ.">બહાર ના ખોરાક લેવાનુ ટાળવુ.</option>
                            <option value="સહેલાઈ થી પચે એવો ખોરાક લેવો">સહેલાઈ થી પચે એવો ખોરાક લેવો</option>
                            <option value="ગરમ પાણી પીવું">ગરમ પાણી પીવું</option>
                            <option value="ધ્રુમ્પાન કરવું નહી">ધ્રુમ્પાન કરવું નહી</option>
                            <option value="નિયમિત કસરત કરવી">નિયમિત કસરત કરવી</option>
                            <option value="પુષ્કળ પ્રમાણમા પાણી અને રસ પીવૉ">પુષ્કળ પ્રમાણમા પાણી અને રસ પીવૉ</option>
                            <option value="પુરતી ઊંઘ લેવી">પુરતી ઊંઘ લેવી</option>
                            <option value="પ્રમાણસર વજન જાળવવુ">પ્રમાણસર વજન જાળવવુ</option>
                            <option value="ગળ્યા પદાર્થ ખાવા નહીં">ગળ્યા પદાર્થ ખાવા નહીં</option>
                            <option value="ફ્રીજ મા રાખેલો વાસી ખોરાક તથા ઠંડા પીણા પીવા નહી.">ફ્રીજ મા રાખેલો વાસી ખોરાક તથા ઠંડા પીણા પીવા નહી.</option>
                            <option value="ફોલેટ, આર્યન, પ્રોટીન તથા કેલ્શીયમ થી ભરપૂર ખોરાક લેવા">ફોલેટ, આર્યન, પ્રોટીન તથા કેલ્શીયમ થી ભરપૂર ખોરાક લેવા</option>
                            <option value="સારું આરોગય જાળવવુ">સારું આરોગય જાળવવુ</option>
                            <option value="હાથ સારી રીતે ધોવા">હાથ સારી રીતે ધોવા</option>
                            <option value="બાળકોને નિયમિત રસી મુકાવવી">બાળકોને નિયમિત રસી મુકાવવી</option>
                            <option value="ગળુ દુખે ત્યારે મીઠાવાલા પાણી ના કોગળા કરવા">ગળુ દુખે ત્યારે મીઠાવાલા પાણી ના કોગળા કરવા</option>
                            <option value="ધુમાડો, રજ તથા અન્ય પ્રદુશક પ્રદાર્થથી દુર રહેવું">ધુમાડો, રજ તથા અન્ય પ્રદુશક પ્રદાર્થથી દુર રહેવું</option>
                            <option value="ચેપ થી બચવા એક દર્દી થી બિજા દર્દી વચ્ચે યોગ્ય અંતર રાખવું">ચેપ થી બચવા એક દર્દી થી બિજા દર્દી વચ્ચે યોગ્ય અંતર રાખવું</option>
                            <option value="નિયમિત  મછરદાની મા સુવુ.">નિયમિત  મછરદાની મા સુવુ.</option>
                            <option value="પંદર દિવસ થી વધુ સમય થી ઉધરસ હોઇ તો કફ ની તપાસ જરૂર કરાવી">પંદર દિવસ થી વધુ સમય થી ઉધરસ હોઇ તો કફ ની તપાસ જરૂર કરાવી</option>
                            <option value="જરૂર પડે ત્યારે ડૉક્ટરની સલાહ લેવી">જરૂર પડે ત્યારે ડૉક્ટરની સલાહ લેવી</option>
                            <option value="દવા નિયમિત લેવી">દવા નિયમિત લેવી</option>
                            <option value="બીપીવાળા દર્દીએ પ્રમાણસર મીઠું ખાવું">બીપીવાળા દર્દીએ પ્રમાણસર મીઠું ખાવું</option>
                        </select>
<!--                          <input class="form-control form-control-sm" type="text" id="t_advice"  name="t_advice">
-->                        </div>  
                        <div class="col-md-4 form-group"><br>
                          <button type="submit" class="btn btn-light" name="btn_Add_Treatment" value="Submit" style="background-color:white ;  color:#e600ac;">Add</button>
                        </div>                              
                      </div>
                      </form>
<script>
$(document).ready(function() {
  $('#t_dose').select2({
    tags: true,
    tokenSeparators: [',', ' '],
    multiple: false, 
  });
});
$(document).ready(function() {
  $('#t_qnt').select2({
    tags: true,
    tokenSeparators: [',', ' '],
    multiple: false, 
  });
});
$(document).ready(function() {
  $('#t_frequency').select2({
    tags: true,
    tokenSeparators: [',', ' '],
    multiple: false, 
  });
});
$(document).ready(function() {
  $('#t_rout').select2({
    tags: true,
    tokenSeparators: [',', ' '],
    multiple: false, 
  });
});
$(document).ready(function() {
  $('#t_duration').select2({
    tags: true,
    tokenSeparators: [',', ' '],
    multiple: false, 
  });
});
$(document).ready(function() {
  $('#labreport_save').select2({
    tags: true,
    tokenSeparators: [',', ' '],
  });
});
$(document).ready(function() {
  $('#t_advice').select2({
    tags: true,
    tokenSeparators: [',', ' '],
  });
});
</script>


<script>
$(document).ready(function() {
  // Initialize Select2 with tagging
  $('#dropdown').select2({
    tags: true,
    tokenSeparators: [',', ' '], // Allow multiple tags to be entered with commas or spaces
  });

  // Add an event listener for input changes in the typing input
  $('#typingInput').on('input', function() {
    // Do something with the typed input value if needed
    var typedValue = $(this).val();
    console.log('Typed value:', typedValue);
  });
});
</script>
 <!-- =====End Treatment====================================================================== -->
                        <?php
                        if (isset($_POST['t_add'])) 
                        {
                            $ff = $_POST["Treatment"];
                            include("../databases/config.php");
                            $secondTableName = "treatment_save";
                            $th = mysqli_query($q, "SELECT  Name, Dose, Qnt, Frequency, Rout, Duration, Advice FROM Add_Treatment where Name='$ff' ");
                            if (mysqli_num_rows($th) > 0) {
                                while ($r = mysqli_fetch_array($th)) {
                                    $t_name = mysqli_real_escape_string($q, $r[0]);
                                    $t_dose = mysqli_real_escape_string($q, $r[1]);
                                    $t_qnt = mysqli_real_escape_string($q, $r[2]);
                                    $t_frequency = mysqli_real_escape_string($q, $r[3]);
                                    $t_rout = mysqli_real_escape_string($q, $r[4]);
                                    $t_duration = mysqli_real_escape_string($q, $r[5]);
                                    $t_advice = mysqli_real_escape_string($q, $r[6]);
                                    $t_user_id = $_GET['id'];
                                    $t_qry = mysqli_query($q, "INSERT INTO $secondTableName (Name, Dose, Qnt, Frequency, Rout, Duration, Advice, UserID) VALUES ('$t_name', '$t_dose', '$t_qnt', '$t_frequency', '$t_rout', '$t_duration', '$t_advice', '$t_user_id')");
                                    if (!$t_qry) {
                                        echo "Error inserting data: " . mysqli_error($q);
                                    }
                                }
                            } else {
                                echo "No data found in Add_Treatment table.";
                            }
                        
                            mysqli_close($q);
}
                        if(isset($_POST['btn_Add_Treatment']))
                        {
                            $t_name = $_POST['t_name'];
                            $t_dose = $_POST['t_dose'];
                            $t_qnt = $_POST['t_qnt'];
                            $t_frequency = $_POST['t_frequency'];
                            $t_rout = $_POST['t_rout'];
                            $t_duration = $_POST['t_duration'];
                            $a_advice = isset($_POST['t_advice']) ? $_POST['t_advice'] : [];
                            $t_advice = implode(',', $a_advice);
                            $t_id = $_GET['id'];
                            include("../databases/config.php");
                            $t_qry = mysqli_query($q, "INSERT INTO treatment_save VALUES('..', '$t_name', '$t_dose', '$t_qnt', '$t_frequency', '$t_rout', '$t_duration', '$t_advice', '$t_id')");
                        }
                        ?>
                        <div class="table-responsive">
                      <table id="example" class="display table" style="width:100%;">
                       <thead style=" background-color:#FDC7FF; color:#e600ac;">
                        <tr>
                          <th style="text-align:center; font-size:12px;">#</th>
                          <th style="text-align:center; font-size:12px;">Name</th>
                          <th style="text-align:center; font-size:12px;">Dose</th>
                          <th style="text-align:center; font-size:12px;">Qnt</th>
                          <th style="text-align:center; font-size:12px;">Frequency</th>
                          <th style="text-align:center; font-size:12px;">Rout</th>
                          <th style="text-align:center; font-size:12px;">Duration</th>
                          <th style="text-align:center; font-size:12px;">Advice</th>
                          <th style="text-align:center; font-size:12px;">Action</th>
                        </tr> 
                      </thead>
                      <tbody >
                          <?php
                          include("../databases/config.php");
                          $t_id = $_GET['id'];
                          $v_qry = mysqli_query($q,"select * from treatment_save where userid='$t_id' ");
                          while($r = mysqli_fetch_assoc($v_qry))
                          {
                              echo "<tr>";
                              echo "<td style='text-align:center; font-size:12px;'>" . $r['id'] . "</td>";
                              echo "<td style='text-align:center; font-size:12px;'>" . $r['name'] . "</td>";
                              echo "<td style='text-align:center; font-size:12px;'>" . $r['dose'] . "</td>";
                              echo "<td style='text-align:center; font-size:12px;'>" . $r['qnt'] . "</td>";
                              echo "<td style='text-align:center; font-size:12px;'>" . $r['frequency'] . "</td>";
                              echo "<td style='text-align:center; font-size:12px;'>" . $r['rout'] . "</td>";
                              echo "<td style='text-align:center; font-size:12px;'>" . $r['duration'] . "</td>";
                              echo "<td style='text-align:center; font-size:12px;'>" . $r['advice'] . "</td>";
                              echo "<td style='text-align:center; font-size:12px;'> Action</td>";
                              echo "</tr>";
                          }
                          
                          ?>
                      </tbody>
                    </table>
                        </div>
<!-- ==================================== Treatment End  ==========================-->
                    <h6 class="border-bottom mb-3" style="color: #e600ac;">Advice</h6>
                    <div class="row mb-3">
                      <div class="col-md-4 form-group">
                        <label>Templets</label>
                        <input class="form-control form-control-sm" type="text"  name="email">
                      </div>
                      <div class="col-md-4 form-group">
                        <label>Type</label>
                        <input class="form-control form-control-sm" type="text"  name="email">
                      </div>
                      <div class="col-md-4 form-group">
                        <label>Next Visit </label><br>
                        
                          <div class="form-check form-check-inline">
                            <input type="radio" name="next" class="form-check-input" onclick="toggleTextbox(true)">Date
                          </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="next" class="form-check-input" onclick="toggleTextbox(false)">જરૂર પડે તો
                        </div>
                         <div class="form-check form-check-inline">
                            <input type="radio" name="next" class="form-check-input" onclick="toggleTextbox(false)" checked>Not Applicable
                        </div>
                        
                      </div>
                      <div class="col-md-4 form-group">
                        <label>Refer (Why)</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Why/ Where-Investigation Outside-Doctor-Hospital" name="email">
                      </div>
                       <div class="col-md-4 form-group">
                        <label>Refer (Where)</label>
                        <select class="form-control form-control-sm">
                            <option>Select Where</option>
                            <?php
                            include("../databases/config.php");
                            $w = mysqli_query($q,"select * from cwhere");
                            while($t = mysqli_fetch_array($w))
                            {
                                echo "<option>$t[1]</option>";
                            }
                            ?>
                        </select>
                      </div>
                      <div class="col-md-4 form-group">
                       
                           <input class="form-control form-control-sm" type="date" name="email" id="textbox" style="display: none;">
                               <script>
                                    function toggleTextbox(show) {
                                        var textbox = document.getElementById("textbox");
                                        textbox.style.display = show ? "block" : "none";
                                    }
                                </script>
                      </div>
                      <div class="col-md-8 form-group"><br>
                        <button type="button" class="btn btn-light" name="" value="Submit"style="background-color:white ;  color:#e600ac;">Laboretory</button>
                        <button type="button" class="btn btn-light" name="" value="Submit"style="background-color:white ;  color:#e600ac;">Pharmacy</button>
                        <button type="button" class="btn btn-light" name="" value="Submit"style="background-color:white ;  color:#e600ac;">Minor Procedure</button>
                        <button type="button" class="btn btn-light" name="" value="Submit"style="background-color:white ;  color:#e600ac;">Indore</button>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group" >
                      <input type="submit" class="btn btn-light" name="" value="Refer Slip"style="background-color: #e600ac;  color:white;">
                      <input type="submit" class="btn btn-light" name="" value="Certificate"style="background-color: #e600ac;  color:white;">
                      <input type="submit" class="btn btn-light" name="" value="Submit"style="background-color: #e600ac;  color:white;">
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
</body>

</html>