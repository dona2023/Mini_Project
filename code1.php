<?php
session_start();
require 'config.php';
if(isset($_POST['save_customer']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    //$= mysqli_real_escape_string($con, $_POST['address']);

    $query = "INSERT INTO connection (name,email,phone,address) VALUES ('$name','$email','$phone','$address')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Customer Created Successfully";
        header("Location: customer-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Created";
        header("Location: customer-create.php");
        exit(0);
    }
}
?>