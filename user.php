<?php include 'include/config.php' ?>
<?php
session_start();
if ($_SESSION['status'] != 'login') {
    header('location: login.php?pesan=belum_login');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/volt.png">
    <link rel="stylesheet" href="style.css">
    <title>PLN PPOB</title>
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <h2>PLN PPOB</h2>
            <ul>
                <!-- <li><a href="admin.php?page=tarif">Tarif</a></li>
                <li><a href="admin.php?page=pelanggan">Pelanggan</a></li>
                <li><a href="admin.php?page=penggunaan">Penggunaan</a></li>
                <li><a href="admin.php?page=tagihan">Tagihan</a></li> -->
                <li><a href="user.php?page=pembayaran">Pembayaran</a></li>
            </ul>
        </div>
        <div class="main_content">
            <div class="header">
                <div class="header-brand">Dashboard</div>
                <div class="header-item">
                    <a href="logout.php" class="btn-xs btn-biru">Logout</a>
                </div>
            </div>
            <div class="info">
                <?php
                if (isset($_GET['page'])) {
                    if ($_GET['page'] == 'pembayaran') {
                        include 'pembayaran/pembayaran.php';
                    } elseif ($_GET['page'] == 'bayar') {
                        include 'pembayaran/bayar.php';
                    } elseif ($_GET['page'] == 'history') {
                        include 'pembayaran/history.php';
                    }
                } else {
                    echo 'Halo Selamat Datang ' . $_SESSION['username'];
                }
                ?>
            </div>
        </div>
    </div>
    <div class="footer footer2">
        <p align="center">Copyright &copy; 2023 B2 Kelompok 4</p>
    </div>
</body>

</html>