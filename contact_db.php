<?php  
include ('connect.php');

$first = $_POST['FirstName'];
$last = $_POST['LastName'];
$email = $_POST['Email'];
$phone = $_POST['PhoneNumber'];
$pesan = $_POST['Pesan'];

mysqli_query($connect, "INSERT INTO tb_contact (first ,last , email, phone, pesan) VALUES ('$first','$last', '$email','$phone','$pesan')");

echo "<script>alert('Pesan telah berhasil dikirim!');</script>";
echo "<script>window.location.href = 'contact-us.php';</script>";