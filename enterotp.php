<?php
include 'config.php';
if ($_SESSION['email']) {
    $email = $_SESSION['email'];
} 
else {
    echo '<script> alert ("Error!");</script>';
    echo '<script>window.location.href="forgotpswd.php";</script>';
}

if (isset($_POST['submit_otp'])) {
    $otp = $_POST['otp-enter'];
    $otp_check = "SELECT `otp_code` FROM `tblusers` WHERE `email`= '$email'";
    
    $otp_run = mysqli_query($conn, $otp_check);
    $row = mysqli_fetch_array($otp_run);
    $row['otp_code'];
    if ($row['otp_code'] === $otp) {
        $upotp = "UPDATE `tblusers` SET `otp_code`='0' WHERE `email`= '$email'";
        mysqli_query($conn, $upotp);
        echo '<script> alert ("OTP verified");</script>';
        echo '<script>window.location.href="UpdatePass.php";</script>';
    } else {
        echo '<script> alert ("Invalid OTP");</script>';
        echo '<script>window.location.href="enterotp.php";</script>';
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SUPER GAS </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style3.css">
  
</head>

<body>
  <header id="header" class="fixed-top d-flex align-items-center">
   

        <div class="logo">
            <a><img class="main-logo" src="images/logos.png" alt="" height="100" width="50"/> SUPER GAS</a>
       
        </div><br><br>

  </header>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight:50;"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Enter your OTP</h2></p><br>
			<div class="input-group">
				<input type="text" name="otp-enter" placeholder="Enter your OTP here" maxlength="6" required style="font-size: 2rem;">
			</div>
			
			<div class="input-group">
				<button name="submit_otp" class="btn" style="font-size: 2rem;">submit</a></button>
			</div>
			
		</form>
	</div>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



</body>
</html>