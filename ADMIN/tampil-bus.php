<?php
error_reporting(0);


session_start();
if (!isset($_SESSION["ussername_admin-bus"])) {
    echo "<script>
                     alert('silahkan log in dahulu');
                    window.location ='../index.php';
             </script>";
}

include 'read_admin.php';
$nama = $_POST['nama_terminal'];
?>






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROYAL TRAVEL</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">

    <script src="js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--
    
TemplateMo 553 ROYAL TRAVEL

https://templatemo.com/tm-553-xtra-blog

-->
</head>

<body>
    <header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo">
                    <img style=" height: 150px;width:150px;border-radius: 20px;" src="../assets/images/oke2.webp" alt="ROYAL TRAVEL">
                </div>
                <br>
                <center>
                    <h1>ADMIN BUS</h1>
                </center>
            </div>
            <nav class="tm-nav" id="tm-nav">
                <ul>
                    <li class="tm-nav-item">
                        <img style=" margin-left: 20px;height: 50px;width:50px;border-radius: 50%;" src="../assets/images/oke3.png" alt="ROYAL TRAVEL">
                        <button class="btn btn-secondary" onclick="myFunction()">
                            UBAH MODE
                        </button>
                    </li>
                    <li class="tm-nav-item"><a href="menu-admin-bus.php" class="tm-nav-link">
                            <img style=" margin-right: 10px;height: 40px;width:40px;border-radius: 10px;" src="../assets/images/oke5.jpg" alt="ROYAL TRAVEL">
                            DATA TERMINAL
                        </a></li>

                </ul>
            </nav>
            <div class="tm-mb-65">
                <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon"></i>
                </a>
                <a href="https://twitter.com" class="tm-social-link">
                    <i class="fab fa-twitter tm-social-icon"></i>
                </a>
                <a href="https://instagram.com" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i>
                </a>
                <a href="https://linkedin.com" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i>
                </a>
            </div>
            <p class="tm-mb-80 pr-5 text-white">
                ROYAL TRAVEL is a multi-purpose HTML template from TemplateMo website. Left side is a sticky menu bar. Right side content will scroll up and down.
            </p>
        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">

            <?php
            $nomor = 1;
            $nm = strtoupper($nama);
            ?>

            <h2><b> TERMINAL <?= $nm ?></b></h2>
            <h2><b>DAFTAR TIKET</b></h2>
            <hr class="tm-hr-primary tm-mb-55">
            <div>
                <table class="table table-dark table-striped" style="font-size:20px;width: 100%;">
                    <thead>
                        <td>No</td>
                        <td></td>
                        <td>bus</td>
                        <td>Kota asal</td>
                        <td>Tujuan</td>
                        <td>Harga</td>
                        <td>jam</td>
                        <td>jumlah</td>
                        <td>Opsi</td>


                    </thead>
                    <?php $ban = new bandara();
                    foreach ($ban->tampil_terminal($nama) as $data2) {
                        if ($data2['nama_bus'] == "") {
                        } else {
                    ?>
                            <tr>
                                <td><?= $nomor++ ?></td>
                                <td>
                                    <img style="width:100px;hight:40px;" src="../assets/images/<?= $data2['gambar_bus']; ?>">
                                </td>
                                <td><?= $data2['nama_bus'] ?></td>
                                <td><?= $data2['kota_asal_bus'] ?></td>
                                <?php
                                $kota_asal = $data2['kota_asal_bus'];
                                $gambar_stasiun = $data2['gambar_terminal']
                                ?>


                                <td><?= $data2['kota_tujuan_bus'] ?></td>
                                <td><?= $data2['harga'] ?></td>

                                <td><?= $data2['jam_berangkat_bus'] ?></td>
                                <td><?= $data2['jumlah_tiket'] ?></td>



                                <td>
                                    <form action="edit-bus.php" method="post">
                                        <input type="hidden" name="id" value="<?= $data2['id_bus'] ?>">
                                        <input type="hidden" name="cek" value="edit">

                                        <button style="width:75px" class="btn btn-secondary " name="edit3" type="submit"><b>EDIT</b></button>

                                    </form>
                                    <form action="" method="post">
                                        <input type="hidden" name="id" value="<?= $data2['id_bus'] ?>">
                                        <button style="margin-top:10px;" class="btn btn-secondary " name="hapus2" type="submit"><b>HAPUS</b></button>
                                </td>
                                </form>

                            </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
                <?php
                if (isset($_POST['hapus2'])) {
                    $id = $_POST['id'];
                    $h = new bandara();
                    $h = $h->hapus2bus($id);
                }

                ?>

                <hr class="tm-hr-primary tm-mb-55">
                <H3><b>Tambah Data Tiket</b></H3>
                <table class="table table-dark table-striped" style="font-size:20px;width: 100%;">
                    <form action="" method="post">
                        <thead>
                            <td></td>
                        </thead>
                        <input type="hidden" name="nama_terminal" value="<?= $nama    ?>">

                        <tr>
                            <td>Nama bus</td>
                            <td><input type="text" name="nama_bus" required> </td>
                        </tr>
                        <tr>
                            <td>Tujuan</td>
                            <td><input type="text" name="tujuan" required> </td>
                        </tr>
                        <tr>
                            <td>jam berangkat</td>
                            <td><input type="time" name="jam_berangkat" required> </td>
                        </tr>
                        <tr>
                            <td>Jumlah Tiket</td>
                            <td><input type="text" name="jumlah" required> </td>
                        </tr>
                        <tr>
                            <td>harga</td>
                            <td><input type="text" name="harga" required> </td>
                        </tr>
                        <tr>
                            <td>kelas</td>
                            <td><input type="text" name="kelas" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" name="tambah" class="btn btn-primary">
                                    TAMBAH
                                </button>
                            </td>

                        </tr>
                    </form>
                </table>
                <?php
                if (isset($_POST['tambah'])) {

                    $nama;
                    $kota_asal;
                    $nama_bus = $_POST['nama_bus'];
                    $tujuan = $_POST['tujuan'];
                    $jam_berangkat = $_POST['jam_berangkat'];
                    $jumlah = $_POST['jumlah'];
                    $gambar_terminal;
                    $harga = $_POST['harga'];
                    $kelas = $_POST['kelas'];
                    $c = new bandara();
                    $c = $c->tambahd2($nama, $kota_asal, $nama_bus, $tujuan, $jam_berangkat, $jumlah, $gambar_terminal, $harga, $kelas);
                }
                ?>






                <div class="row tm-row tm-mt-100 tm-mb-75">
                    <div class="tm-prev-next-wrapper">
                        <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20"></a>

                    </div>
                    <div class="tm-paging-wrapper">
                        <span class="d-inline-block mr-3"></span>
                        <nav class="tm-paging-nav d-inline-block">
                            <ul>
                                <li class="tm-paging-item active">
                                    <a href="#" class="mb-2 tm-btn tm-paging-link"></a>
                                </li>
                                <li class="tm-paging-item active">
                                    <a href="#" class="mb-2 tm-btn tm-paging-link"></a>
                                </li>
                                <li class="tm-paging-item active">
                                    <a href="#" class="mb-2 tm-btn tm-paging-link"></a>
                                </li>
                                <li class="tm-paging-item active">
                                    <a href="#" class="mb-2 tm-btn tm-paging-link"></a>
                                </li>


                            </ul>
                        </nav>
                    </div>
                </div>
                <footer class="row tm-row">
                    <hr class="col-12">
                    <div class="col-md-6 col-12 tm-color-gray">
                        Design: <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-external-link">TemplateMo</a>
                    </div>
                    <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                        Copyright 2020 ROYAL TRAVEL Company Co. Ltd.
                    </div>
                </footer>
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>

</html>