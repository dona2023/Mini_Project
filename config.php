<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "login_register_pure_coding";

$conn = mysqli_connect($server, $user, $pass,$database);
// session_start();
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
?>