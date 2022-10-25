<?php
include 'config.php';
session_start();
if ($_SESSION['username']) {
    $username = $_SESSION['username'];
} else {
    echo '<script> alert ("Error!");</script>';
    echo '<script>window.location.href="forgotpassword.php";</script>';
}

if (isset($_POST['submit_otp'])) {
    $otp = $_POST['otp-enter'];
    echo $otp_check = "SELECT `otp_code` FROM `users` WHERE `username`= '$username'";
    $otp_run = mysqli_query($conn, $otp_check);
    $row = mysqli_fetch_array($otp_run);
    // echo $row['otp_code'];
    if ($row['otp_code'] === $otp) {
        $upotp = "UPDATE `users` SET `otp_code`='0' WHERE `username`= '$username'";
        mysqli_query($conn, $upotp);
        echo '<script> alert ("OTP verified");</script>';
        echo '<script>window.location.href="updatePass.php";</script>';
    } else {
        echo '<script> alert ("Invalid OTP");</script>';
        echo '<script>window.location.href="enterotp.php";</script>';
    }
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style3.css">

	<title>Reset Password</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight:50;">Enter your OTP</p>
			<div class="input-group">
				<input type="text" name="otp-enter" placeholder="Enter your OTP here" maxlength="6" required>
			</div>
			
			<div class="input-group">
				<button name="submit_otp" class="btn">submit</a></button>
			</div>
			
		</form>
	</div>
</body>
</html>
