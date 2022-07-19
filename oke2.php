<?php	
                                session_start();
                                include 'read_home.php';
                                $id_pesawat=$_POST['id_pesawat'];
                                $ussername_pemesan =$_SESSION['ussername_usser'];
                                $nama_bandara=$_POST['nama_bandara'];
                                $nama_pesawat=$_POST['nama_pesawat'];
                                $tanggal_berangkat_pesawat=$_POST['tanggal_berangkat_pesawat'];
                                $jumlah_penumpang=$_POST['jumlah_penumpang'];
                                $kota_tujuan_pesawat=$_POST['kota_tujuan_pesawat'];
                                $jam_berangkat_pesawat=$_POST['jam_berangkat_pesawat'];
                                $kelas_pesawat=$_POST['kelas_pesawat'];
                                $harga=$_POST['harga'];
                                
                                
                                
                                $f=new pesan();

                                $f->tambah(
                                          $id_pesawat,
                                          $ussername_pemesan,
                                          $nama_bandara,
                                          $nama_pesawat,
                                          $tanggal_berangkat_pesawat,
                                          $jumlah_penumpang,
                                          $kota_tujuan_pesawat,
                                          $jam_berangkat_pesawat,
                                          $kelas_pesawat,
                                          $harga
                                        );
                            

?>