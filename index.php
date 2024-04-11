<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="media/logo.png">
	<title>
		Hospital
	</title>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<!-- Nucleo Icons -->
	<link href="assets/css/nucleo-icons.css" rel="stylesheet" />
	<link href="assets/css/nucleo-svg.css" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<link href="assets/css/nucleo-svg.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
	<!-- Include SweetAlert2 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

  <!-- Include SweetAlert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body style="background-image: url('media/doctor.jpg'); 
             background-color: rgba(255, 255, 255,0.7); 
             background-blend-mode: lighten; 
             background-repeat: no-repeat; 
             background-size: cover; 
             background-position: center;
             height: 120vh;">
    
	<main class="main-content  mt-0" >
		<section>
			<div class="page-header min-vh-75">
				<div class="container ">
					<div class="row  ">
						<div class="col-xl-4 col-lg-5 col-md-3 d-flex flex-column mx-auto " >
							<div class=" btn btn-outline card-body mt-8 card-body"
							style="	background-color: white;">
							<div class="card-header pb-0 text-left bg-transparent ">
								<h3 class="font-weight-bolder text-info text-gradient " style="text-align:center; "> <img src="media/logo.png" height="120px" width="140px"></h3>

							</div>
							<div class="card-body" style="	background-color: white;">
								<form role="form" method="POST">
									<label style="float: left;">Username</label>
									<div class="mb-3">

										<input type="number" class="form-control" placeholder="Enter Number" name="username" aria-label="Email" aria-describedby="email-addon">
									</div>
									<label style="float: left;">Password</label>
									<div class="mb-3">
										<input type="password" class="form-control" placeholder="Password" name="password" aria-label="Password" aria-describedby="password-addon">
									</div>
									<div class="text-center">
										<input type="submit" value="Sign IN" id="sa-success" name="submit"class="btn bg-gradient-info w-50 mt-4 mb-0" style=" background-image: linear-gradient(to bottom right, red,white);">
									</div><br>
								</form>
							</div>
						</div>
						<div class="col-md-6">
							
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
	<!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
	<!--   Core JS Files   -->
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
	<script src="assets/js/plugins/smooth-scrollbar.min.js"></script>

	
	<!-- Github buttons -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>

<?php

if(isset($_POST['submit']))
{
  include('databases/config.php');
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $qry = "select * from user where mobile_number='".$username."' AND password='".$password."' ";
  $qq = mysqli_query($q,$qry);
  $count = mysqli_num_rows($qq);
  if($count)
  {
    $_SESSION['username'] = $username;
    echo "<script>
          document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
              icon: 'success',
              title: 'Success!',
              text: 'Welcome to the dashboard.',
              showConfirmButton: false,
              timer: 1000
              }).then(function() {
                window.location='./app/dashboard';
                });
                });
          </script>";
    /*echo"<script>window.location='./app/dashboard';</script>";*/
  }
  else
  {
   echo '<script>Swal.fire("Fail", "Check Username  & Password", "error");</script>';
 }

}

?>