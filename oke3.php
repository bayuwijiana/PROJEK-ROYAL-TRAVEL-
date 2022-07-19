<?php	
                                session_start();
                                include 'read_home.php';

                                $id_kereta=$_POST['id_kereta'];
                                $ussername_pemesan =$_SESSION['ussername_usser'];
                                $nama_stasiun=$_POST['nama_stasiun'];
                                $nama_kereta=$_POST['nama_kereta'];
                                $tanggal_berangkat_kereta=$_POST['tanggal_berangkat_kereta'];
                                $jumlah_penumpang=$_POST['jumlah_penumpang'];
                                $kota_tujuan_kereta=$_POST['kota_tujuan_kereta'];
                                $jam_berangkat_kereta=$_POST['jam_berangkat_kereta'];
                                $kelas_kereta=$_POST['kelas_kereta'];
                                $harga=$_POST['harga'];
                                
                                
                                
                                $g=new pesan();

                                $g->tambah2(
                                          $id_kereta,
                                          $ussername_pemesan,
                                          $nama_stasiun,
                                          $nama_kereta,
                                          $tanggal_berangkat_kereta,
                                          $jumlah_penumpang,
                                          $kota_tujuan_kereta,
                                          $jam_berangkat_kereta,
                                          $kelas_kereta,
                                          $harga
                                        );
                            
                        


?>