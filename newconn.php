<?php
session_start();
?>


<?php 
require("config.php");
//include("header.php");
//include('sidebar.php');
if(isset($_POST['save_customer']))
{
$sid=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];

$a=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"image/".$a);
$sqlInsert="INSERT INTO `connection`(`id`, `name`, `email`, `phone`, `address`,`image`) VALUES('$id','$name','$email','$phone','$address','$a')";
$queryInsert=mysqli_query($conn,$sqlInsert);
if($queryInsert)
{
  echo "<script>alert('Data inserted Successfully!!');window.location='newview.php'</script>";
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Customer Create</title>
</head>
<body>
  
    <div class="container mt-5">

        

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>New Connection Form 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code1.php" method="POST">

                            <div class="mb-3">
                                <label> Customer Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Customer Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Customer Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Customer Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="mb-3">
                            <label>Upload Your Profile Photo:</label>
                            <input type="file" name="file">
                            <!-- <input type="submit" name="submit" value="Upload"></div> -->
                            <div class="mb-3">
                                <button type="submit" name="save_customer" class="btn btn-primary">Save Customer</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
