<?php	
                                session_start();
                                include 'read_home.php';

                                $id_bus=$_POST['id_bus'];
                                $ussername_pemesan =$_SESSION['ussername_usser'];
                                $nama_terminal=$_POST['nama_terminal'];
                                $nama_bus=$_POST['nama_bus'];
                                $tanggal_berangkat_bus=$_POST['tanggal_berangkat_bus'];
                                $jumlah_penumpang=$_POST['jumlah_penumpang'];
                                $kota_tujuan_bus=$_POST['kota_tujuan_bus'];
                                $jam_berangkat_bus=$_POST['jam_berangkat_bus'];
                                $harga=$_POST['harga'];
                                
                                
                                
                                
                                $g=new pesan();

                                $g->tambah3(
                                          $id_bus,
                                          $ussername_pemesan,
                                          $nama_terminal,
                                          $nama_bus,
                                          $tanggal_berangkat_bus,
                                          $jumlah_penumpang,
                                          $kota_tujuan_bus,
                                          $jam_berangkat_bus,
                                          $harga
                                        );
                            
                        


?>