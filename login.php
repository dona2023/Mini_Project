<?php 

include 'config.php';

  $cust_islogged= isset($_SESSION['cust_islogged']) ? $_SESSION['cust_islogged'] : "false";
  if($cust_islogged=="true"){
      echo "<script>window.location.href='./customer/customer_dashboard.php';</script>";
  }

//session_start();
//error_reporting(0);


if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM tblusers WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		//$_SESSION['username'] = $row['username'];
    $_SESSION['cust_id']= $row['id'];
    $_SESSION['cust_username']=$row['username'];
    $_SESSION['cust_email']= $row['email'];
    $_SESSION['cust_islogged']="true";
		header("Location: customer/customer_dashboard.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
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
            <a><img class="main-logo" src="images/logos.png" alt="" height="100" width="50"/>  SUPER GAS</a> 
       
      </div>
      

  </header>
  
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 3rem; font-weight: 800;">Login</p>
            
			
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" required style="font-size: 2rem;">
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required style="font-size: 2rem;">
			</div>
			<div class="input-group">
				<button name="submit" class="btn"style="font-size: 2rem;">Login<a href="home.html"></a></button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
			<p class="login-register-text"> <a href="forgot.php"><u>forgot Password?</u></a></p>
      <div>
        <a href="index.php">Back To Home Page</a></div>
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