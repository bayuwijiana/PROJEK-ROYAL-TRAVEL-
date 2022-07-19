<?php	
class notif{

    public function notif_daftar(){
            echo"<script>
                    alert('Ussername sudah terdaftar')
                    window.location='../buat_akun.php';
                </script>";
    }
    public function notif_telepon(){
            echo"<script>
                    alert('No telepon lebih angka')
                    window.location='../buat_akun.php';
                </script>";
    }
    public function notif_confirm(){
            echo"<script>
                    alert('konfirmasi password tidak sesuai')
                    window.location='../buat_akun.php';
                </script>";
    }
    public function notif_val(){
            echo"<script>
                    alert('buat ussername sesuai PANDUAN PENDAFTARAN ,CARAKTER AWAL TIDAK BOLEH ANGKA , _ , !! ')
                    window.location='../buat_akun.php';
                </script>";

    }
    public function notif_val2(){
            echo"<script>
                    alert('buat ussername sesuai PANDUAN PENDAFTARAN  !!! ');
                    window.location='../buat_akun.php';
                </script>";
    }
     public function notif_pass(){
            echo"<script>
                    alert('password salah');
                    window.location='../index.php';
                </script>";
    }
     public function notif_daf2(){
            echo"<script>
                    alert('ussername tidak terdaftar');
                    window.location ='../index.php';
                </script>";
     }
     

}
class notif_admin{
        public function hapus(){
            echo"<script>
                    alert('Hapus berhasil');
                    window.location ='menu-admin-pesawat.php';
                </script>";
        }
        public function hapusk(){
            echo"<script>
                    alert('Hapus berhasil');
                    window.location ='menu-admin-kereta.php';
                </script>";
        }
        public function hapuskbus(){
            echo"<script>
                    alert('Hapus berhasil');
                    window.location ='menu-admin-bus.php';
                </script>";
        }
        public function hapusk2(){
            echo"<script>
                    alert('Hapus berhasil');
                    window.location ='menu-admin-bus.php';
                </script>";
        }
        public function hapuski(){
            echo"<script>
                    alert('Hapus berhasil');
                    window.location ='menu-admin-info.php';
                </script>";
        }
        public function hapuskd(){
            echo"<script>
                    alert('Hapus berhasil');
                    window.location ='data-pemesanan-kereta.php';
                </script>";
        }
        public function hapus_boking(){
            echo"<script>
                    alert('Terpakai');
                    window.location ='menu-usser-tiket.php';
                </script>";
        }
        public function hapuskd3(){
            echo"<script>
                    alert('Hapus berhasil');
                    window.location ='data-pemesanan-kereta.php';
                </script>";
        }
        public function hapus3(){
            echo"<script>
                    alert('Hapus berhasil');
                    window.location ='tampil-pesawat.php';
                </script>";
        }
        public function hapus3m(){
            echo"<script>
                    alert('Hapus berhasil');
                    window.location ='menu-admin-pesawat.php';
                </script>";
        }
        public function hapus3k(){
            echo"<script>
                    alert('Hapus berhasil');
                    window.location ='tampil-kereta.php';
                </script>";
        }
        
         public function hapus2(){
            echo"<script>
                    alert('Hapus berhasil');
                    window.location ='menu-admin-info.php';
                </script>";
        } public function edit2(){
            echo"<script>
                    alert('edit berhasil');
                    window.location ='menu-admin-pesawat.php';
                </script>";
        }
        public function editker(){
            echo"<script>
                    alert('edit berhasil');
                    window.location ='menu-admin-kereta.php';
                </script>";
        }

        public function editbus(){
            echo"<script>
                    alert('edit berhasil');
                    window.location ='menu-admin-bus.php';
                </script>";
        }

        public function edit3(){
            echo "<script>
                    alert('edit berhasil');
                    window.location ='menu-admin-pesawat.php';
                </script>";
        }
        public function hapusx(){
            echo"<script>
                    alert('hapus berhasil');
                    window.location ='data-pemesanan-pesawat.php';
                </script>";
        }
        public function tambahx(){
            echo"<script>
                    alert('tambah berhasil');
                    window.location ='menu-admin-pesawat.php';
                </script>";
        }
        public function tambahz(){
            echo"<script>
                    alert('tambah berhasil');
                    window.location ='menu-admin-kereta.php';
                </script>";
        }
        public function tambahz2(){
            echo"<script>
                    alert('tambah berhasil');
                    window.location ='menu-admin-bus.php';
                </script>";
        }
        public function tambah2(){
            echo"<script>
                    alert('tambah berhasil');
                    window.location ='menu-admin-bus.php';
                </script>";
        }
        
        public function gagal(){
            echo"<script>
                    alert('nama bandara sudah terdaftar');
                    window.location ='menu-admin-pesawat.php';
                </script>";
        }
        
        public function gagal2(){
            echo"<script>
                    alert('nama stasiun sudah terdaftar');
                    window.location ='menu-admin-kereta.php';
                </script>";
        }
        public function gagal2x(){
            echo"<script>
                    alert('nama stasiun sudah terdaftar');
                    window.location ='menu-admin-bus.php';
                </script>";
        }
        public function gagal3(){
            echo"<script>
                    alert('nama terminal sudah terdaftar');
                    window.location ='menu-admin-bus.php';
                </script>";
        }
        
        public function tambahx2(){
            echo"<script>
                    alert('tambah berhasil');
                    window.location ='menu-admin-kereta.php';
                </script>";
        }
        public function tambahx23(){
            echo"<script>
                    alert('tambah berhasil');
                    window.location ='menu-admin-bus.php';
                </script>";
        }
}
