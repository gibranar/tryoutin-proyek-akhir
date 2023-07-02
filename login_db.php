<?php
session_start();

if (isset($_POST['submit'])) {
    $connect = mysqli_connect('localhost', 'root', '', 'tryoutin') or die("Koneksi Gagal!");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        echo "<script>window.location.href='main.php';</script>";
        exit();
    } else {
        echo "<script>alert('Login anda gagal!');</script>";
        echo "<script>window.location.href='login.php';</script>";
        exit();
    }
}
