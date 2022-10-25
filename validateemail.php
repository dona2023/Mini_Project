<?php
include "../con.php";
$tokenerr=false;
 
  $mailmsg =$_SESSION['mailsend'];
  $name=$_SESSION['name'];
  $lname= $_SESSION['lname'];
  $email=$_SESSION['email'];
  $mobile= $_SESSION['mobile'];
  $hname= $_SESSION['housename'];
  $pincode= $_SESSION['pincode'];
  $password= $_SESSION['password'];
  $cpassword= $_SESSION['cpassword'];
   
if(isset($_POST['btn']))
{
  
  $tokenfrom=$_POST['otp'];
  $user= $_SESSION['email'];
  $tok="select token from temp where email='$user'";
  $tokres=mysqli_query($con,$tok);
  $row=mysqli_fetch_array($tokres);
  $cnt=$row['token'];
  if($tokenfrom==$cnt)
  {

  
    $sql1 = "INSERT INTO tbl_reg (`reg_name`,`reg_lname`,`reg_email`,`reg_mobile`,`reg_housename`,`reg_pincode`,`reg_password`,`reg_cpassword`,`reg_userstatus`) 
     VALUES ('$name','$lname','$email','$mobile','$hname','$pincode','$password','$cpassword','0')";
     $sql = "INSERT INTO tbl_login (`email`,`password`) VALUES ('$email','$password')";
     $s = "SELECT * FROM tbl_reg WHERE reg_email='$email'";
     $res = mysqli_query($con, $sql1);
     $res1 = mysqli_query($con, $sql);
     if($res)
     {
         echo "<script>alert('registered successfully');window.location='http://localhost/mini_project/login/login.html'</script>"; 
    	exit;
    }
}
  else{
    $tokenerr=true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Forgot Password</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-password-image"></div> -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Enter Your OTP?</h1>
                                        <!-- <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                            and we'll send you a link to reset your password!</p> -->
                                    </div>
                                    <form class="user" method="post" action="validateemail.php">

                                    <script>
                                        function showerr()
                                            {
                                                document.getElementById("time").style.visibility="visible";

                                            }
                                            setTimeout("showerr()",0);

                                            function hideerr()
                                            {
                                                document.getElementById("time").style.visibility="hidden";

                                            }
                                            setTimeout("hideerr()",3000);
                                    </script>
                                    <?php 

                                    if($mailmsg) {
                                        
                                        echo ' <div class="alert alert-danger 
                                            alert-dismissible fade show" role="alert" id="time" style="visibility:hidden">'. $mailmsg.'

                                    
                                    </div> '; 
                                    
                                    }
                                    ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="otp"
                                                id="otp" aria-describedby="emailHelp"
                                                placeholder="Enter your otp...">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block"  name="btn" value="submit">
                                            
                                    </input>
                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="login.php">Create an Account!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Already have an account? Login!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>