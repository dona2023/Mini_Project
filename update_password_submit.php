<?php
include 'config.php';
session_start();
$pass_value = $_SESSION['username'];

if(isset($_POST['submit_reset'])){
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $password=md5($pass);
    if($pass != $cpass){
        echo '<script> alert ("Password doesnot match");</script>';
	    echo'<script>window.location.href="updatePass.php";</script>';
    }
    else{
        $insert = "UPDATE `users` SET `password`='$password' WHERE `username`='$pass_value'";
        mysqli_query($conn,$insert);
        echo '<script> alert ("Password updated successfully");</script>';
	    echo'<script>window.location.href="index.php";</script>';
    }
}
?>