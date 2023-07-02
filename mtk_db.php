<?php
include('connect.php');
session_start();

$username = $_SESSION['username'];

if (isset($_POST['submit'])) {

    // Mendapatkan nilai jawaban dari form
    $jawaban1 = $_POST['soal1'];
    $jawaban2 = $_POST['soal2'];
    $jawaban3 = $_POST['soal3'];
    $jawaban4 = $_POST['soal4'];
    $jawaban5 = $_POST['soal5'];

    // Mendapatkan kunci jawaban dari tabel tb_mtk
    $query = "SELECT * FROM tb_mtk";
    $result = mysqli_query($connect, $query);

    $kunciJawaban = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $kunciJawaban[] = $row['jawaban'];
    }

    // Menghitung skor
    $skor = 0;
    if ($jawaban1 === $kunciJawaban[0]) {
        $skor += 20;
    }
    if ($jawaban2 === $kunciJawaban[1]) {
        $skor += 20;
    }
    if ($jawaban3 === $kunciJawaban[2]) {
        $skor += 20;
    }
    if ($jawaban4 === $kunciJawaban[3]) {
        $skor += 20;
    }
    if ($jawaban5 === $kunciJawaban[4]) {
        $skor += 20;
    }

    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date('Y-m-d H:i:s');

    // Menginsert ke tb_skor
    $mapel = "Matematika";
    $insertQuery = "INSERT INTO tb_skor (username, mapel, skor, attempts) VALUES ('$username', '$mapel', '$skor', '$tanggal')";
    if (mysqli_query($connect, $insertQuery)) {
        echo "<script>alert('Skor berhasil disimpan!');</script>";
        echo "<script>window.location.href='test.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan skor: " . mysqli_error($connect) . "');</script>";
    }
} else {
    echo "<script>alert('Error!');</script>";
}
