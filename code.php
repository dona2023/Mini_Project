<?php
session_start();
require 'config.php';

if(isset($_POST['delete_customer']))
{
    $customer_id = mysqli_real_escape_string($con, $_POST['delete_customer']);

    $query = "DELETE FROM customer WHERE id='$customer_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "customer Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "customer Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_customer']))
{
    $customer_id = mysqli_real_escape_string($con, $_POST['customer_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['address']);

    $query = "UPDATE customer SET name='$name', email='$email', phone='$phone', address='$address' WHERE id='$customer_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "customer Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "customer Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_rate']))
{
    $Cylinder_Weight = mysqli_real_escape_string($conn, $_POST['Cylinder_Weight']);
    $Refill_rate= mysqli_real_escape_string($conn, $_POST['Refill_rate']);
    // $phone = mysqli_real_escape_string($con, $_POST['phone']);
    // $course = mysqli_real_escape_string($con, $_POST['address']);

    $query = "INSERT INTO refill (Cylinder_Weight,Refill_rate) VALUES ('$Cylinder_Weight','$Refill_rate')";

    $query_run = mysqli_query($conn, $query);
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