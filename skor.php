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
    <link rel="stylesheet" href="assets/style/style-skor.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="main.php"><i class="fa-solid fa-house" style="margin-right: 10px;"></i>Home</a>
        <a href="test.php"><i class="fas fa-book" style="margin-right: 10px;"></i>Test</a>
        <a href=""><i class="fas fa-tasks" style="margin-right: 10px;"></i>Your Score</a>
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
        <h1 id="pilih">Tabel Skor Hasil</h1>
        <hr id="atas">

        <table>
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Username</th>
                    <th>Mapel</th>
                    <th>Skor</th>
                    <th>Attempts</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('connect.php');
                $query = "SELECT * FROM tb_skor WHERE username = '$username'";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $username = $row['username'];
                        $mapel = $row['mapel'];
                        $skor = $row['skor'];
                        $attempts = $row['attempts'];
                ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $username; ?></td>
                            <td><?php echo $mapel; ?></td>
                            <td><?php echo $skor; ?></td>
                            <td><?php echo $attempts; ?></td>
                        </tr>
                <?php
                        $i++;
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data skor</td></tr>";
                }
                ?>
            </tbody>
        </table>
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