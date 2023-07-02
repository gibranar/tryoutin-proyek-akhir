<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    echo "<script>alert('Session tidak terakses!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Main Page</title>
    <link rel="stylesheet" href="assets/style/side-nav.css">
    <link rel="stylesheet" href="assets/style/style-test.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="main.php"><i class="fa-solid fa-house" style="margin-right: 10px;"></i>Home</a>
        <a href=""><i class="fas fa-book" style="margin-right: 10px;"></i>Test</a>
        <a href="skor.php"><i class="fas fa-tasks" style="margin-right: 10px;"></i>Your Score</a>
        <a href="" style="margin-top: 34rem;"></a>
        <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?')"><i class="fa fa-sign-out" aria-hidden="true" style="margin-right: 10px;"></i>Logout</a>
        <hr id="navleft">
        <div id="profil">
            <a href="#" id="profile"><i class="fa-solid fa-user" style="margin-right: 10px;"></i><?php echo $username; ?></a>
            <a href="#" id="darkModeToggle" onclick="toggleDarkMode()"><i class="fas fa-sun fa-spin"></i></a>
        </div>
    </div>
    <span style="font-size:40px;margin-left:20px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <main>
        <h1 id="pilih">Silahkan Mengerjakan Tryout</h1>
        <hr id="atas">
        <div class="container">
            <div class="mapel">
                <span class="round">
                    <img src="assets/icon/mtk.png" alt="mtk" style="width: 80px; height: 80px; margin-top: 20px;" />
                </span>
                <h1 id="mtk">Matematika</h1>
                <button class="start" onclick="window.location.href='mtk.php'">
                    Mulai Mengerjakan
                </button>
            </div>

            <div class="mapel">
                <span class="round">
                    <img src="assets/icon/tps.png" alt="tps" style="
              width: 65px;
              height: 65px;
              display: inline-block;
              margin-top: 23px;
            " />
                </span>
                <h1 id="tps">TPS</h1>
                <button class="start" onclick="window.location.href='tps.php'">
                    Mulai Mengerjakan
                </button>
            </div>

            <div class="mapel">
                <span class="round">
                    <img src="assets/icon/indonesia.png" alt="indonesia" style="
              width: 70px;
              height: 70px;
              display: inline-block;
              margin-top: 20px;
            " />
                </span>
                <h1>Bahasa Indonesia</h1>
                <button class="start2" onclick="window.location.href='indonesia.php'">
                    Mulai Mengerjakan
                </button>
            </div>

            <div class="mapel">
                <span class="round">
                    <img src="assets/icon/inggris.png" alt="inggris" style="
              width: 70px;
              height: 70px;
              display: inline-block;
              margin-top: 20px;
            " />
                </span>
                <h1 id="inggris">Bahasa Inggris</h1>
                <button class="start" onclick="window.location.href='inggris.php'">
                    Mulai Mengerjakan
                </button>
            </div>
        </div>
    </main>
</body>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    function toggleDarkMode() {
        var body = document.getElementsByTagName("body")[0];
        body.classList.toggle("dark-mode");
    }
</script>

</html>