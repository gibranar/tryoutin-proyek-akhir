<?php  
include ('connect.php');

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

mysqli_query($connect, "INSERT INTO tb_user (username, password, email) VALUES ('$username', '$password', '$email')");

echo "<script>window.location.href = 'login.php';</script>";
