<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "gasagency";

$conn = mysqli_connect($server, $user, $pass,$database);
session_start();
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
?>