<?php	
           
            include "database/database.php";
           
            
                class a extends database{

                    function tampil_pesawat(){
                              $v=random_int(1,10);
                              $data=mysqli_query($this->connect,"SELECT * FROM tb_pesawat LIMIT $v,4");
                        return $data;
                    }
                    function saldo($a){
                              $data=mysqli_query($this->connect,"SELECT * FROM tb_usser WHERE ussername_usser='$a' ");
                           
                            
                        return $data;
                    }
                    
                    function tampil_kereta(){
                              $v=random_int(1,10);
                              $data=mysqli_query($this->connect,"SELECT * FROM tb_kereta LIMIT $v,4");
                        return $data;
                    }
                    function tampil_bus(){
                              $v=random_int(1,10);
                              $data=mysqli_query($this->connect,"SELECT * FROM tb_bus LIMIT $v,4");
                        return $data;
                    }

                    function tampil_kereta2(){
                              $v=random_int(1,10);
                              $data=mysqli_query($this->connect,"SELECT * FROM tb_kereta");
                        return $data;
                    }
                    function tampil_kereta3($x){
                              
                              $data=mysqli_query($this->connect,"SELECT * FROM tb_kereta  WHERE nama_stasiun LIKE '$x%' GROUP BY nama_stasiun");
                        return $data;
                    }
                    function tampil_bus3($x){
                              
                              $data=mysqli_query($this->connect,"SELECT * FROM tb_bus  WHERE nama_terminal LIKE '$x%' GROUP BY nama_terminal");
                        return $data;
                    }
                    function tampil_kereta4($v){
                              
                              $data=mysqli_query($this->connect,"SELECT * FROM tb_kereta  WHERE nama_stasiun='$v'");
                        return $data;
                    }
                    function tampil_bus4($v){
                              
                              $data=mysqli_query($this->connect,"SELECT * FROM tb_bus WHERE nama_terminal='$v'");
                        return $data;
                    }
                    
                    
                    
                }
                class b extends database{
                     function tampil_pesawat2($x){
                              $data=mysqli_query($this->connect,"SELECT * FROM tb_pesawat WHERE nama_bandara LIKE '$x%' || kota_asal_pesawat LIKE '$x%' GROUP BY nama_bandara ");
                        return $data;
                    }
                     function tampil_pesawat3(){
                              $data=mysqli_query($this->connect,"SELECT * FROM tb_pesawat where nama_bandara='soekarno hatta' limit 0,1 ");
                        return $data;
                    }
                    function tampil_pesawat4($x){
                              $data=mysqli_query($this->connect,"SELECT * FROM tb_pesawat where nama_bandara='$x' ");
                        return $data;
                    } 
                }
                class pesan extends database{

                    function tampil_pesawat5($x){
                              $data=mysqli_query($this->connect,"SELECT * FROM tb_pesawat where id_pesawat='$x' ");
                        return $data;
                    }

                    function tampil_kereta5($x){
                              $data=mysqli_query($this->connect,"SELECT * FROM tb_kereta where id_kereta='$x' ");
                        return $data;
                    }
                    function tampil_bus5($x){
                              $data=mysqli_query($this->connect,"SELECT * FROM tb_bus where id_bus='$x' ");
                        return $data;
                    }
                    
                    
                    

                    function cek_jumlah($x,$y){
                        
                        $data=mysqli_query($this->connect,"SELECT * FROM tb_pesawat where id_pesawat='$x' ");

                        $data2=mysqli_fetch_array($data);

                        if($data2['jumlah_kursi']-$y<0){
                             echo  "<script>
                                        alert('kursi tidak tersedia kurangi jumlah penumpang!');
                                       window.location='menu-usser.php';
                                </script>";

                        }else{
                            $a=$data2['jumlah_kursi'];
                            $a=$a-$y;
                            return $a;
                        }

                    }

                    


                    function cek_jumlah_tiket_kereta($x,$y){
                        
                        $data=mysqli_query($this->connect,"SELECT * FROM tb_kereta where id_kereta='$x' ");

                        $data2=mysqli_fetch_array($data);
                        $j=$data2['jumlah_tiket'];

                        if($j-$y<0){
                             echo  "<script>
                                        alert('kursi tidak tersedia kurangi jumlah penumpang !!');
                                       window.location='menu-usser-kereta.php';
                                </script>";

                        }else{
                            $a=$data2['jumlah_tiket'];
                            $a=$a-$y;
                            return $a;
                        }
                        


                    }
                     function cek_jumlah_tiket_bus($x,$y){
                        
                        $data=mysqli_query($this->connect,"SELECT * FROM tb_bus where id_bus='$x' ");

                        $data2=mysqli_fetch_array($data);
                        $j=$data2['jumlah_tiket'];

                        if($j-$y<0){
                             echo  "<script>
                                        alert('tidak tidak tersedia kurangi jumlah penumpang !!');
                                       window.location='menu-usser-bus.php';
                                </script>";

                        }else{
                            $a=$data2['jumlah_tiket'];
                            $a=$a-$y;
                            return $a;
                        }
                        


                    }
                    
                
                    function tambah($id_pesawat,$a, $b, $c,$d,$e,$f,$g,$h,$i){
                                

                                $a=$this->cek_jumlah($id_pesawat,$e);


                                mysqli_query($this->connect,"UPDATE tb_pesawat SET jumlah_kursi='$a' where id_pesawat='$id_pesawat' ");

                                $total_harga=$i*$e;

                          
                              $data=mysqli_query($this->connect,"INSERT INTO tb_pemesanan_pesawat (id_pesawat,ussername_pemesan,nama_bandara,nama_pesawat,tanggal_berangkat_pesawat,jumlah_penumpang, kota_tujuan_pesawat,jam_berangkat_pesawat,kelas_pesawat,total_harga) VALUES
                              ('$id_pesawat','".$_SESSION['ussername_usser']."','$b','$c','$d','$e','$f','$g','$h','$total_harga')");
                              echo  "<script>
                                        alert('data berhasil ditambahkan');
                                       window.location='menu-usser.php';
                                </script>";

                        
                    }
                
                    function tambah2($id_kereta,$a, $b, $c,$d,$e,$f,$g,$h,$i){
                             
                        
                        $a=$this->cek_jumlah_tiket_kereta($id_kereta,$e);

                           
    

                                mysqli_query($this->connect,"UPDATE tb_kereta SET jumlah_tiket='$a' where id_kereta='$id_kereta' ");

                                $total_harga=$i*$e;

                      
                              $data=mysqli_query($this->connect,"INSERT INTO tb_pemesanan_kereta (id_kereta,ussername_pemesan,nama_stasiun,nama_kereta,tanggal_berangkat_kereta,jumlah_penumpang, kota_tujuan_kereta,jam_berangkat_kereta,kelas_kereta,total_harga) VALUES
                              ('$id_kereta','".$_SESSION['ussername_usser']."','$b','$c','$d','$e','$f','$g','$h','$total_harga')");
                              echo  "<script>
                                        alert('data berhasil ditambahkan');
                                        window.location='menu-usser-kereta.php';
                                </script>";
                        
                    }

                                                         
                    function tambah3($id_bus,$a, $b, $c,$d,$e,$f,$g,$h){
                             
                        
                        $x=$this->cek_jumlah_tiket_bus($id_bus,$e);

                           
    

                                mysqli_query($this->connect,"UPDATE tb_bus SET jumlah_tiket='$x' where id_bus='$id_bus' ");

                                
                                
                                $data=mysqli_query($this->connect,"SELECT * FROM tb_bus where id_bus='$id_bus' ");
                                $data2=mysqli_fetch_array($data);

                                $j=$data2['harga'];
                                $total_harga=$e*$j;



                             
                              $data=mysqli_query($this->connect,"INSERT INTO tb_pemesanan_bus (id_bus,ussername_pemesan,nama_terminal,nama_bus,tanggal_berangkat_bus,jumlah_penumpang, kota_tujuan_bus,jam_berangkat_bus,total_harga) VALUES
                              ('$id_bus','".$_SESSION['ussername_usser']."','$b','$c','$d','$e','$f','$g','$total_harga')");
                              echo  "<script>
                                        alert('data berhasil ditambahkan');
                                        window.location='menu-usser-bus.php';
                                </script>";
                        
                    }
 

                    
                                     
                } 
                class PESAN2 extends database{
                    function tampil_pesan(){
                        $d=mysqli_query($this->connect," SELECT * FROM tb_pesan");
                        return $d;
                    }
                }
          ?>