<?php
include '../database/database.php';
include '../notifikasi.php';

class PESAN extends database
{


    function masuk($a)
    {
        $d = mysqli_query($this->connect, " INSERT INTO tb_pesan VALUES ('','$a')");
    }
    function tampil_pesan()
    {
        $d = mysqli_query($this->connect, " SELECT * FROM tb_pesan");
        return $d;
    }
    function profil($x)
    {
        $d = mysqli_query($this->connect, " SELECT * FROM tb_usser WHERE ussername_usser='$x' ");
        return $d;
    }

    function hapus($A)
    {
        $d = mysqli_query($this->connect, " DELETE FROM tb_pesan WHERE id_pesan='$A'");
        return $d;
    }

    function prof($foto, $nama, $nik, $telepon, $alamat)
    {

        $d = mysqli_query($this->connect, "UPDATE tb_usser SET foto='$foto', ussername_usser='$nama' , nik='$nik', no_telepon_usser='$telepon' ,alamat='$alamat' WHERE ussername_usser='$nama'");

        return $d;
    }

    function top($saldo, $nama)
    {

        $d = mysqli_query($this->connect, " SELECT * FROM tb_usser WHERE ussername_usser='$nama' ");

        $a = mysqli_fetch_array($d);

        $b = $saldo + $a['saldo'];


        $d = mysqli_query($this->connect, "UPDATE tb_usser SET saldo='$b' WHERE ussername_usser='$nama'");
        echo "<script>
                    alert(' berhasil');
                    window.location ='menu-admin-info.php';
                </script>";
    }
}






class tampil_admin extends database
{

    function tampil()
    {

        $data = mysqli_query($this->connect, "SELECT * FROM tb_usser ORDER BY ussername_usser ASC");
        return $data;
    }
    function tampil3($id)
    {

        $data = mysqli_query($this->connect, "SELECT * FROM tb_pesawat WHERE id_pesawat='$id'");

        return $data;
    }
    function tampil4($id)
    {

        $data = mysqli_query($this->connect, "SELECT * FROM tb_kereta WHERE id_kereta='$id'");

        return $data;
    }
    function tampil5($id)
    {

        $data = mysqli_query($this->connect, "SELECT * FROM tb_bus WHERE id_bus='$id'");

        return $data;
    }

    function tampil2($d)
    {

        $data = mysqli_query($this->connect, "SELECT * FROM tb_usser WHERE ussername_usser LIKE '$d%' ");
        return $data;
    }

    function hapus($d)
    {

        $data = mysqli_query($this->connect, "DELETE FROM tb_usser WHERE id_usser='$d'");

        $a = new notif_admin();
        $a = $a->hapus2();
    }
}
class bandara extends database
{
    function tampil_bandara($d)
    {

        $data = mysqli_query($this->connect, "SELECT * FROM tb_pesawat WHERE nama_bandara LIKE '$d%' ");
        return $data;
    }
    function tampil_stasiun($d)
    {

        $data = mysqli_query($this->connect, "SELECT * FROM tb_kereta WHERE nama_stasiun LIKE '$d%' ");
        return $data;
    }
    function tampil_terminal($d)
    {

        $data = mysqli_query($this->connect, "SELECT * FROM tb_bus WHERE nama_terminal LIKE '$d%' ");
        return $data;
    }

    function tambahc($nama, $nama_pesawat, $tujuan, $jam_berangkat, $jumlah, $harga, $kelas)
    {

        $data = mysqli_query($this->connect, "SELECT * FROM tb_pesawat WHERE nama_bandara ='$nama' ");

        $data3 = mysqli_fetch_assoc($data);

        $gambar_pesawat = "batik.jpg";
        $logo = "logo1.jpg";
        $kota_asal = $data3['kota_asal_pesawat'];

        $data = mysqli_query($this->connect, "INSERT INTO tb_pesawat VALUES ('','$nama_pesawat','$nama','$kota_asal','$tujuan','$jam_berangkat','$gambar_pesawat','$kelas','$jumlah','$logo','$gambar_bandara','$harga')");

        $a = new notif_admin();
        $a = $a->tambahx();
    }

    function tambahd($nama, $kota_asal, $nama_kereta, $tujuan, $jam_berangkat, $jumlah, $gambar_stasiun, $harga, $kelas)
    {
        $gambar_kereta = "cibatu.jpg";
        $data = mysqli_query($this->connect, "INSERT INTO tb_kereta VALUES ('','$nama_kereta','$nama','$kota_asal','$tujuan','$jam_berangkat','$gambar_kereta','$kelas','$jumlah','$gambar_stasiun','$harga')");

        $a = new notif_admin();
        $a = $a->tambahx2();
    }
    function tambahd2($nama, $kota_asal, $nama_bus, $tujuan, $jam_berangkat, $jumlah_tiket, $gambar_terminal, $harga, $kelas)
    {
        $gambar_bus = "sinarjaya.jpg";
        $logo_bus = "logobus.jpg";


        $data = mysqli_query($this->connect, "INSERT INTO tb_bus VALUES ('','$nama_bus','$nama','$kota_asal','$tujuan','$jam_berangkat','$gambar_bus','$jumlah_tiket','$logo_bus','$gambar_terminal','$harga')");

        $a = new notif_admin();
        $a = $a->tambahx23();
    }



    function hapus_tiketz($id)
    {
        $data = mysqli_query($this->connect, "DELETE FROM tb_pemesanan_pesawat where id_pemesanan_pesawat ='$id'");

        $a = new notif_admin();
        $a = $a->hapusx();
    }
    function hapus_tiketz2($id)
    {
        $data = mysqli_query($this->connect, "DELETE FROM tb_pemesanan_kereta where id_pemesanan_kereta ='$id'");

        $a = new notif_admin();
        $a = $a->hapuskd();
    }
    function hapus_tiketz3($id)
    {
        $data = mysqli_query($this->connect, "DELETE FROM tb_pemesanan_bus where id_pemesanan_bus ='$id'");

        $a = new notif_admin();
        $a = $a->hapuskd3();
    }
    function tampil_bandarax($d)
    {

        $data = mysqli_query($this->connect, "SELECT * FROM tb_pesawat WHERE nama_bandara LIKE '$d%' GROUP BY nama_bandara");
        return $data;
    }
    function tampil_stasiunx($d)
    {

        $data = mysqli_query($this->connect, "SELECT * FROM tb_kereta WHERE nama_stasiun LIKE '$d%' GROUP BY nama_stasiun");
        return $data;
    }

    function tampil_terminalx($d)
    {

        $data = mysqli_query($this->connect, "SELECT * FROM tb_bus WHERE nama_terminal LIKE '$d%' GROUP BY nama_terminal");
        return $data;
    }
    function tampil_usserx($d)
    {

        $data = mysqli_query($this->connect, "SELECT * FROM tb_usser WHERE ussername_usser LIKE '$d%'");
        return $data;
    }


    function tampil_bandara2()
    {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_pesawat GROUP BY nama_bandara");
        return $data;
    }
    function tampil_stasiun2()
    {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_kereta GROUP BY nama_stasiun");
        return $data;
    }
    function tampil_terminal2()
    {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_bus GROUP BY nama_terminal");
        return $data;
    }
    function tampil_usser2()
    {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_usser");
        return $data;
    }
    function hapus_bandara($nama)
    {

        $data = mysqli_query($this->connect, "DELETE FROM tb_pesawat where nama_bandara ='$nama'");
        $a = new notif_admin();
        $a = $a->hapus();
    }
    function hapus_stasiun($nama)
    {

        $data = mysqli_query($this->connect, "DELETE FROM tb_kereta where nama_stasiun ='$nama'");
        $a = new notif_admin();
        $a = $a->hapusk();
    }
    function hapus_terminal($nama)
    {

        $data = mysqli_query($this->connect, "DELETE FROM tb_bus where nama_terminal ='$nama'");
        $a = new notif_admin();
        $a = $a->hapusk2();
    }
    function hapus_usser($nama)
    {

        $data = mysqli_query($this->connect, "DELETE FROM tb_usser where ussername_usser='$nama'");

        $a = new notif_admin();
        $a = $a->hapuski();
    }

    function hapus2($id)
    {

        $data = mysqli_query($this->connect, "DELETE FROM tb_pesawat where id_pesawat ='$id'");
        $a = new notif_admin();
        $a = $a->hapus3();
    }
    function hapus2m($id)
    {

        $data = mysqli_query($this->connect, "DELETE FROM tb_pesawat where id_pesawat ='$id'");
        $a = new notif_admin();
        $a = $a->hapus3m();
    }
    function hapus2k($id)
    {

        $data = mysqli_query($this->connect, "DELETE FROM tb_kereta where id_kereta ='$id'");
        $a = new notif_admin();
        $a = $a->hapus3k();
    }
    function hapus2ker($id)
    {

        $data = mysqli_query($this->connect, "DELETE FROM tb_kereta where id_kereta ='$id'");
        $a = new notif_admin();
        $a = $a->hapusk();
    }
    function hapus2bus($id)
    {

        $data = mysqli_query($this->connect, "DELETE FROM tb_bus where id_bus ='$id'");
        $a = new notif_admin();
        $a = $a->hapuskbus();
    }
    function edit($nama, $nama2, $kota)
    {

        $data = mysqli_query($this->connect, "SELECT * FROM tb_pesawat WHERE nama_bandara ='$nama2'");

        if (mysqli_num_rows($data) == 1) {
            $a = new notif_admin();
            $a = $a->gagal();
        } else {

            $data = mysqli_query($this->connect, "UPDATE tb_pesawat SET nama_bandara='$nama2' ,kota_asal_pesawat='$kota' where nama_bandara ='$nama' ");

            $a = new notif_admin();
            $a = $a->edit2();
        }
    }

    function tambahband($nama, $kota)
    {

        $data = mysqli_query($this->connect, "SELECT * FROM tb_pesawat WHERE nama_pesawat ='$nama'");

        if (mysqli_num_rows($data) == 1) {
            $a = new notif_admin();
            $a = $a->gagal();
        } else {
            $g = "soekarnohatta.jpg";
            $data2 = mysqli_query($this->connect, "INSERT INTO tb_pesawat VALUES ('','','$nama','$kota','','','','','','','$g','') ");

            $a = new notif_admin();
            $a = $a->tambahx();
        }
    }
    function tambahstas($nama, $kota)
    {

        $data = mysqli_query($this->connect, "SELECT * FROM tb_kereta WHERE nama_kereta ='$nama'");

        if (mysqli_num_rows($data) == 1) {
            $a = new notif_admin();
            $a = $a->gagal2();
        } else {

            $g = "stasiun.jpg";
            $data2 = mysqli_query($this->connect, "INSERT INTO tb_kereta VALUES ('','','$nama','$kota','','','','','','$g','') ");

            $a = new notif_admin();
            $a = $a->tambahz();
        }
    }



    function tambahter($nama, $kota)
    {


        $b = 0;
        $data = mysqli_query($this->connect, "SELECT * FROM tb_bus WHERE nama_terminal ='$nama'  ");

        while ($datax = mysqli_fetch_array($data)) {

            if ($nama == $datax['nama_terminal']) {
                $b++;
            }
        }

        if ($b > 0) {




            $a = new notif_admin();
            $a = $a->gagal3();
        } else {

            $g = "terminal2.jpg";
            $data2 = mysqli_query($this->connect, "INSERT INTO tb_bus VALUES ('','','$nama','$kota','','','','','','$g','') ");

            $a = new notif_admin();
            $a = $a->tambahz2();
        }
    }




    function editker($nama, $nama2, $kota)
    {
        $b = 0;
        $data = mysqli_query($this->connect, "SELECT * FROM tb_kereta WHERE nama_stasiun ='$nama2'");

        while ($datax = mysqli_fetch_array($data)) {

            if ($nama2 == $datax['nama_stasiun']) {
                $b++;
            }
        }

        if ($b > 0) {


            $a = new notif_admin();
            $a = $a->gagal2();
        } else {

            $data = mysqli_query($this->connect, "UPDATE tb_kereta SET nama_stasiun='$nama2' ,kota_asal_kereta='$kota' where nama_stasiun ='$nama' ");

            $a = new notif_admin();
            $a = $a->editker();
        }
    }
    function editbus($nama, $nama2, $kota)
    {
        $b = 0;
        $data = mysqli_query($this->connect, "SELECT * FROM tb_bus WHERE nama_terminal ='$nama2'");

        while ($datax = mysqli_fetch_array($data)) {

            if ($nama2 == $datax['nama_terminal']) {
                $b++;
            }
        }

        if ($b > 0) {


            $a = new notif_admin();
            $a = $a->gagal2x();
        } else {

            $data = mysqli_query($this->connect, "UPDATE tb_bus SET nama_terminal='$nama2' ,kota_asal_bus='$kota' where nama_terminal ='$nama' ");

            $a = new notif_admin();
            $a = $a->editbus();
        }
    }


    function edit2($id)
    {

        $data = mysqli_query($this->connect, "UPDATE tb_pesawat SET nama_bandara='$nama2' ,kota_asal_pesawat='$kota' where nama_bandara ='$nama' ");

        $a = new notif_admin();
        $a = $a->edit2();
    }
    function edit3($id, $nama, $asal, $tujuan, $harga, $jam, $jumlah)
    {

        $data = mysqli_query($this->connect, "UPDATE tb_pesawat SET nama_pesawat='$nama',kota_asal_pesawat='$asal',kota_tujuan_pesawat='$tujuan',harga='$harga',jam_berangkat_pesawat='$jam',jumlah_kursi='$jumlah' where id_pesawat ='$id' ");

        $a = new notif_admin();
        $a = $a->edit3();
    }

    function edit3ker($id, $nama, $asal, $tujuan, $harga, $jam, $jumlah)
    {

        $data = mysqli_query($this->connect, "UPDATE tb_kereta SET nama_kereta='$nama',kota_asal_kereta='$asal',kota_tujuan_kereta='$tujuan',harga='$harga',jam_berangkat_kereta='$jam',jumlah_tiket='$jumlah' where id_kereta ='$id' ");

        $a = new notif_admin();
        $a = $a->editker();
    }
    function edit3bus($id, $nama, $asal, $tujuan, $harga, $jam, $jumlah)
    {

        $data = mysqli_query($this->connect, "UPDATE tb_bus SET nama_bus='$nama',kota_asal_bus='$asal',kota_tujuan_bus='$tujuan',harga='$harga',jam_berangkat_bus='$jam',jumlah_tiket='$jumlah' where id_bus ='$id' ");

        $a = new notif_admin();
        $a = $a->editbus();
    }
}

class tiket extends database
{
    function tampil_pesawat($d)
    {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_pemesanan_pesawat WHERE ussername_pemesan LIKE '$d%' || nama_bandara LIKE '$d%' ||total_harga LIKE '$d%'  || status_pemesanan  LIKE '$d%' || kota_tujuan_pesawat  LIKE '$d%' ");
        return $data;
    }
    function tampil_kereta($d)
    {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_pemesanan_kereta WHERE ussername_pemesan LIKE '$d%' || nama_stasiun LIKE '$d%' ||total_harga LIKE '$d%'  || status_pemesanan  LIKE '$d%' || kota_tujuan_kereta  LIKE '$d%' ");
        return $data;
    }
    function tampil_bus($d)
    {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_pemesanan_bus WHERE ussername_pemesan LIKE '$d%' || nama_terminal LIKE '$d%' ||total_harga LIKE '$d%'  || status_pemesanan  LIKE '$d%' || kota_tujuan_bus  LIKE '$d%' ");
        return $data;
    }
    function tampil_pesawat2()
    {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_pemesanan_pesawat");
        return $data;
    }
    function tampil_kereta2()
    {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_pemesanan_kereta");
        return $data;
    }
    function tampil_bus2()
    {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_pemesanan_bus");
        return $data;
    }
}
