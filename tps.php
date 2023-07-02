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
    <link rel="stylesheet" href="assets/style/style-soal.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="main.php"><i class="fa-solid fa-house" style="margin-right: 10px;"></i>Home</a>
        <a href="test.php"><i class="fas fa-book" style="margin-right: 10px;"></i>Test</a>
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
        <h1 id="pilih" style="text-align: center;">Selamat Mengerjakan</h1>
        <hr id="atas">
        <?php
        include('connect.php');
        $query = "SELECT * FROM tb_tps";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $soal1 = $row['soal'];
            $pilihanA1 = $row['A'];
            $pilihanB1 = $row['B'];
            $pilihanC1 = $row['C'];
            $pilihanD1 = $row['D'];
            $jawaban1 = $row['jawaban'];

            $query = "SELECT * FROM tb_tps LIMIT 1, 1";
            $result = mysqli_query($connect, $query);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $soal2 = $row['soal'];
                $pilihanA2 = $row['A'];
                $pilihanB2 = $row['B'];
                $pilihanC2 = $row['C'];
                $pilihanD2 = $row['D'];
                $jawaban2 = $row['jawaban'];
            }

            $query = "SELECT * FROM tb_tps LIMIT 2, 1";
            $result = mysqli_query($connect, $query);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $soal3 = $row['soal'];
                $pilihanA3 = $row['A'];
                $pilihanB3 = $row['B'];
                $pilihanC3 = $row['C'];
                $pilihanD3 = $row['D'];
                $jawaban3 = $row['jawaban'];
            }

            $query = "SELECT * FROM tb_tps LIMIT 3, 1";
            $result = mysqli_query($connect, $query);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $soal4 = $row['soal'];
                $pilihanA4 = $row['A'];
                $pilihanB4 = $row['B'];
                $pilihanC4 = $row['C'];
                $pilihanD4 = $row['D'];
                $jawaban4 = $row['jawaban'];
            }

            $query = "SELECT * FROM tb_tps LIMIT 4, 1";
            $result = mysqli_query($connect, $query);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $soal5 = $row['soal'];
                $pilihanA5 = $row['A'];
                $pilihanB5 = $row['B'];
                $pilihanC5 = $row['C'];
                $pilihanD5 = $row['D'];
                $jawaban5 = $row['jawaban'];
            }
        } else {
            echo "Tidak ada data soal!";
        }
        ?>
        <form action="tps_db.php" method="POST">
            <div class="container">
                <div class="soal">
                    <p>1. <?php echo $soal1 ?></p>
                    <input type="radio" name="soal1" value="A"> <?php echo $pilihanA1 ?> <br>
                    <input type="radio" name="soal1" value="B"> <?php echo $pilihanB1 ?> <br>
                    <input type="radio" name="soal1" value="C"> <?php echo $pilihanC1 ?> <br>
                    <input type="radio" name="soal1" value="D"> <?php echo $pilihanD1 ?>

                    <p>2. <?php echo $soal2 ?></p>
                    <input type="radio" name="soal2" value="A"> <?php echo $pilihanA2 ?> <br>
                    <input type="radio" name="soal2" value="B"> <?php echo $pilihanB2 ?> <br>
                    <input type="radio" name="soal2" value="C"> <?php echo $pilihanC2 ?> <br>
                    <input type="radio" name="soal2" value="D"> <?php echo $pilihanD2 ?>

                    <p>3. <?php echo $soal3 ?></p>
                    <input type="radio" name="soal3" value="A"> <?php echo $pilihanA3 ?> <br>
                    <input type="radio" name="soal3" value="B"> <?php echo $pilihanB3 ?> <br>
                    <input type="radio" name="soal3" value="C"> <?php echo $pilihanC3 ?> <br>
                    <input type="radio" name="soal3" value="D"> <?php echo $pilihanD3 ?>

                    <p>4. <?php echo $soal4 ?></p>
                    <input type="radio" name="soal4" value="A"> <?php echo $pilihanA4 ?> <br>
                    <input type="radio" name="soal4" value="B"> <?php echo $pilihanB4 ?> <br>
                    <input type="radio" name="soal4" value="C"> <?php echo $pilihanC4 ?> <br>
                    <input type="radio" name="soal4" value="D"> <?php echo $pilihanD4 ?>

                    <p>5. <?php echo $soal5 ?></p>
                    <input type="radio" name="soal5" value="A"> <?php echo $pilihanA5 ?> <br>
                    <input type="radio" name="soal5" value="B"> <?php echo $pilihanB5 ?> <br>
                    <input type="radio" name="soal5" value="C"> <?php echo $pilihanC5 ?> <br>
                    <input type="radio" name="soal5" value="D"> <?php echo $pilihanD5 ?>
                </div>
            </div>
            <input type="submit" value="Submit" name="submit">
        </form>
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