<?php	
            include "database/database.php";
            include "notifikasi.php";


                class tiket3 extends database{
                    function hapus_boking2($y){

                            $data=mysqli_query($this->connect,"DELETE FROM tb_boking_kereta WHERE id_pemesanan_kereta ='$y' ");
                            
                            $data=mysqli_query($this->connect,"DELETE FROM tb_pemesanan_kereta WHERE id_pemesanan_kereta ='$y' ");
                            
                            $n=new notif_admin();
                            $n=$n->hapus_boking();
                    }

                    function hapus_boking3($y){
                            $data=mysqli_query($this->connect,"DELETE FROM tb_boking_bus WHERE id_pemesanan_bus='$y' ");
                            
                            $data=mysqli_query($this->connect,"DELETE FROM tb_pemesanan_bus WHERE id_pemesanan_bus ='$y' ");
                            
                             $n=new notif_admin();
                            $n=$n->hapus_boking();
                    }
                    
                }
                class tiket2 extends database{

                    function hapus_boking1($y){
                            $data=mysqli_query($this->connect,"DELETE FROM tb_boking_pesawat WHERE id_pemesanan_pesawat ='$y' ");
                            
                            $data=mysqli_query($this->connect,"DELETE FROM tb_pemesanan_pesawat WHERE id_pemesanan_pesawat ='$y' ");
                            
                             $n=new notif_admin();
                            $n=$n->hapus_boking();
                    }

                    

                    function tampil_tiket($y){
                              
                        $data=mysqli_query($this->connect,"SELECT * FROM tb_pemesanan_pesawat WHERE ussername_pemesan='$y' ");
                        return $data;
                    }
                    function tampil_boking($y){
                              
                        $data=mysqli_query($this->connect,"SELECT * FROM tb_boking_pesawat WHERE ussername_pemesan='$y' ");
                        return $data;
                    }
                    function tampil_boking2($y){
                              
                        $data=mysqli_query($this->connect,"SELECT * FROM tb_boking_kereta WHERE ussername_pemesan='$y' ");
                        return $data;
                    }
                    function tampil_boking3($y){
                              
                        $data=mysqli_query($this->connect,"SELECT * FROM tb_boking_bus WHERE ussername_pemesan='$y' ");
                        return $data;
                    }
                    
                    function tampil_tiket2($y){
                              
                        $data=mysqli_query($this->connect,"SELECT * FROM tb_pemesanan_kereta WHERE ussername_pemesan='$y' ");
                        return $data;
                    }

                    function tampil_tiket3($y){
                              
                        $data=mysqli_query($this->connect,"SELECT * FROM tb_pemesanan_bus WHERE ussername_pemesan='$y' ");
                        return $data;
                    }
                    
                    

                    function batal($y,$cek,$id,$jumlah){

                        if($cek=="pesawat"){
                            
                             $data=mysqli_query($this->connect,"SELECT * FROM tb_pesawat WHERE id_pesawat='$id'");
                             $data2=mysqli_fetch_array($data);
                            

                             $j=$data2['jumlah_kursi'];
                             $j=$j+ $jumlah;
                            

                             $data3=mysqli_query($this->connect,"UPDATE tb_pesawat SET jumlah_kursi='$j' WHERE id_pesawat='$id'");

                            $data4=mysqli_query($this->connect,"DELETE FROM tb_pemesanan_pesawat WHERE id_pemesanan_pesawat='$y' ");

                            $data5=mysqli_query($this->connect,"DELETE FROM tb_boking_pesawat WHERE id_pemesanan_pesawat='$y' ");


                        }elseif($cek=="kereta"){
                             $data=mysqli_query($this->connect,"SELECT * FROM tb_kereta WHERE id_kereta='$id'");

                             $data2=mysqli_fetch_array($data);
                            
                            
                             $j=$data2['jumlah_tiket'];
                             $j=$j+ $jumlah;

                             $data3=mysqli_query($this->connect,"UPDATE tb_kereta SET jumlah_tiket='$j' WHERE id_kereta='$id'");

                            $data4=mysqli_query($this->connect,"DELETE FROM tb_pemesanan_kereta WHERE id_pemesanan_kereta='$y' ");

                            $data5=mysqli_query($this->connect,"DELETE FROM tb_boking_kereta WHERE id_pemesanan_kereta='$y' ");
                        }elseif($cek=="bus"){
                             $data=mysqli_query($this->connect,"SELECT * FROM tb_bus WHERE id_bus='$id'");

                             $data2=mysqli_fetch_array($data);
                            
                            
                             $j=$data2['jumlah_tiket'];
                             $j=$j+ $jumlah;

                             $data3=mysqli_query($this->connect,"UPDATE tb_bus SET jumlah_tiket='$j' WHERE id_bus='$id'");

                            $data4=mysqli_query($this->connect,"DELETE FROM tb_pemesanan_bus WHERE id_pemesanan_bus='$y' ");

                            $data5=mysqli_query($this->connect,"DELETE FROM tb_boking_bus WHERE id_pemesanan_bus='$y' ");
                        }
                            echo"<script>
                                    alert('pembatalan berhasil');
                                    window.location='menu-usser-tiket.php';
                                </script>";
                        

                    }
                }

                class bayar extends database{

                    function bayar_pesawat($uang_bayar,$total_harga,$id_pemesanan,$pemesan){
                        if($uang_bayar-$total_harga<0){
                            echo"<script>
                                    alert('uang anda kurang');
                                    window.location='menu-usser-tiket.php';
                                </script>";
                        }else{

                            $data=mysqli_query($this->connect,"SELECT * FROM tb_usser WHERE ussername_usser='$pemesan'");
                            $data7=mysqli_fetch_array($data);
                            $saldo=$data7['saldo'];

                            if($uang_bayar-$total_harga>0){
                                $c=$uang_bayar-$total_harga;
                                $c=$c+$saldo;

                                mysqli_query($this->connect,"UPDATE tb_usser SET saldo ='$c' WHERE ussername_usser='$pemesan'");    
                            }


                            mysqli_query($this->connect,"UPDATE tb_pemesanan_pesawat SET status_pemesanan ='dibayar' WHERE id_pemesanan_pesawat='$id_pemesanan'");

                            $data=mysqli_query($this->connect,"SELECT * FROM tb_pemesanan_pesawat WHERE id_pemesanan_pesawat='$id_pemesanan' ");

                            while ($data2=mysqli_fetch_array($data) ){                            
                                    $nama=$data2['ussername_pemesan'];
                                    $pesawat=$data2['nama_pesawat'];
                                    $bandara=$data2['nama_bandara'];
                            }                
                                    $kode_boking="12";
                                    $data3=mysqli_query($this->connect,"INSERT INTO tb_boking_pesawat VALUES('','$kode_boking','$nama','$pesawat','$bandara','$id_pemesanan')") ;                


                            


                            echo"<script>
                                    alert('berhasil dibayarkan ');
                                    window.location='menu-usser-tiket.php';
                                </script>";
                        }


                    }




            function bayar_pesawat2($cek,$total_harga,$id_pemesanan,$pemesan){
                        
                        $f=$total_harga*20/100;
                        $total_harga=$total_harga-$f;
                        $data=mysqli_query($this->connect,"SELECT * FROM tb_usser WHERE ussername_usser='$pemesan' ");                        
                        $data2=mysqli_fetch_array($data);
                        $data7=$data2['saldo'];


                        if($data7-$total_harga<0){
                            echo"<script>
                                    alert('saldo anda kurang');
                                    window.location='menu-usser-tiket.php';
                                </script>";
                        }else{
                                $c=$data7-$total_harga;
                                mysqli_query($this->connect,"UPDATE tb_usser SET saldo ='$c' WHERE ussername_usser='$pemesan'");    
                            
                            if($cek=="pesawat"){

                                     $data=mysqli_query($this->connect,"SELECT * FROM tb_pemesanan_pesawat WHERE id_pemesanan_pesawat='$id_pemesanan' ");

                                        while ($data2=mysqli_fetch_array($data) ){
                                                
                                            $nama=$data2['ussername_pemesan'];
                                            $pesawat=$data2['nama_pesawat'];
                                            $bandara=$data2['nama_bandara'];
                                        }
                                        
                                        $kode_boking="12";
                                        $data3=mysqli_query($this->connect,"INSERT INTO tb_boking_pesawat VALUES('','$kode_boking','$nama','$pesawat','$bandara','$id_pemesanan')") ;
                                         mysqli_query($this->connect,"UPDATE tb_pemesanan_pesawat SET status_pemesanan ='dibayar' WHERE id_pemesanan_pesawat='$id_pemesanan'");
                        


                            }elseif($cek="kereta"){
                                
                                        $data=mysqli_query($this->connect,"SELECT * FROM tb_pemesanan_kereta WHERE id_pemesanan_kereta='$id_pemesanan' ");

                                                while ($data2=mysqli_fetch_array($data) ){
                                                        
                                                    $nama=$data2['ussername_pemesan'];
                                                    $kereta=$data2['nama_kereta'];
                                                    $stasiun=$data2['nama_stasiun'];

                                                }
                                                
                                        $kode_boking="12";
                                        $data3=mysqli_query($this->connect,"INSERT INTO tb_boking_kereta VALUES('','$kode_boking','$nama','$kereta','$stasiun','$id_pemesanan')") ;                

                                        mysqli_query($this->connect,"UPDATE tb_pemesanan_kereta SET status_pemesanan ='dibayar' WHERE id_pemesanan_kereta='$id_pemesanan'");

                            }
                             echo"<script>
                                    alert('berhasil dibayarkan ');
                                    window.location='menu-usser-tiket.php';
                                </script>";
                            
                            
                        }


            }

            function bayar_bus2x($total_harga,$id_pemesanan,$pemesan){
                        
                        $data=mysqli_query($this->connect,"SELECT * FROM tb_usser WHERE ussername_usser='$pemesan' ");
                        $data2=mysqli_fetch_array($data);
                        $data7=$data2['saldo'];                        
                        $f=$total_harga*20/100;
                        $total_harga=$total_harga-$f;

                        if($data7-$total_harga<0){
                            echo"<script>
                                    alert('saldo anda kurang');
                                    window.location='menu-usser-tiket.php';
                                </script>";
                        }else{

                            $data=mysqli_query($this->connect,"SELECT * FROM tb_pemesanan_bus WHERE id_pemesanan_bus='$id_pemesanan' ");

                            while ($data2=mysqli_fetch_array($data) ){                            
                                    $nama=$data2['ussername_pemesan'];
                                    $bus=$data2['nama_bus'];
                                    $terminal=$data2['nama_terminal'];
                            }                
                                    $kode_boking="12";
                                    $data3=mysqli_query($this->connect,"INSERT INTO tb_boking_bus VALUES('','$kode_boking','$nama','$bus','$terminal','$id_pemesanan')") ;                



                            $c=$data7-$total_harga;
                            mysqli_query($this->connect,"UPDATE tb_usser SET saldo ='$c' WHERE ussername_usser='$pemesan'");    
                            mysqli_query($this->connect,"UPDATE tb_pemesanan_bus SET status_pemesanan ='dibayar' WHERE id_pemesanan_bus='$id_pemesanan'");
                             echo"<script>
                                    alert('berhasil dibayarkan ');
                                    window.location='menu-usser-tiket.php';
                                </script>";
                            
                        }
            }
                    



                    function bayar_kereta($uang_bayar,$total_harga,$id_pemesanan,$pemesan){

                        if($uang_bayar-$total_harga<0){
                            echo"<script>
                                    alert('uang anda kurang');
                                    window.location='menu-usser-tiket.php';
                                </script>";
                        }else{
                                $data=mysqli_query($this->connect,"SELECT * FROM tb_usser WHERE ussername_usser='$pemesan'");

                                $data2=mysqli_fetch_array($data);
                                $saldo=$data2['saldo'];

                            if($uang_bayar-$total_harga>0){
                                $c=$uang_bayar-$total_harga;

                                $c=$c+$saldo;
                                mysqli_query($this->connect,"UPDATE tb_usser SET saldo ='$c' WHERE ussername_usser='$pemesan'");    
                            }
                            mysqli_query($this->connect,"UPDATE tb_pemesanan_kereta SET status_pemesanan ='dibayar' WHERE id_pemesanan_kereta='$id_pemesanan'");

                                $data=mysqli_query($this->connect,"SELECT * FROM tb_pemesanan_kereta WHERE id_pemesanan_kereta='$id_pemesanan' ");
                            
                            while ($data2=mysqli_fetch_array($data) ){                            
                                    $nama=$data2['ussername_pemesan'];
                                    $kereta=$data2['nama_kereta'];
                                    $stasiun=$data2['nama_stasiun'];
                            }                
                                    $kode_boking="12";
                                    $data3=mysqli_query($this->connect,"INSERT INTO tb_boking_kereta VALUES('','$kode_boking','$nama','$kereta','$stasiun','$id_pemesanan')") ;                

                            echo"<script>
                                    alert('berhasil dibayarkan ');
                                    window.location='menu-usser-tiket.php';
                                </script>";
                        
                        }

                    }
                    function bayar_bus($uang_bayar,$total_harga,$id_pemesanan,$pemesan){
                        
                        if($uang_bayar-$total_harga<0){
                            echo"<script>
                                    alert('uang anda kurang');
                                    window.location='menu-usser-tiket.php';
                                </script>";
                        }else{
                            $data=mysqli_query($this->connect,"SELECT * FROM tb_usser WHERE ussername_usser='$pemesan'");

                            $data2=mysqli_fetch_array($data);
                            $saldo=$data2['saldo'];

                            if($uang_bayar-$total_harga>0){

                                $c=$uang_bayar-$total_harga;
                                $c=$c+$saldo;
                                mysqli_query($this->connect,"UPDATE tb_usser SET saldo ='$c' WHERE ussername_usser='$pemesan'");    
                            }

                            mysqli_query($this->connect,"UPDATE tb_pemesanan_bus SET status_pemesanan ='dibayar' WHERE id_pemesanan_bus='$id_pemesanan'");

                            $data=mysqli_query($this->connect,"SELECT * FROM tb_pemesanan_bus WHERE id_pemesanan_bus='$id_pemesanan' ");

                            while ($data2=mysqli_fetch_array($data) ){                            
                                    $nama=$data2['ussername_pemesan'];
                                    $bus=$data2['nama_bus'];
                                    $terminal=$data2['nama_terminal'];
                            }                
                                    $kode_boking="12";
                                    $data3=mysqli_query($this->connect,"INSERT INTO tb_boking_bus VALUES('','$kode_boking','$nama','$bus','$terminal','$id_pemesanan')") ;                

                            echo"<script>
                                    alert('berhasil dibayarkan ');
                                    window.location='menu-usser-tiket.php';
                                </script>";
                        }


                    }
            
                }




                    class cek_daftar22 extends database{
                    
                    public function cek_daftar_usser($x){
                        
                        $result=mysqli_query($this->connect,"SELECT ussername_usser 
                        FROM tb_usser WHERE ussername_usser='$x'");
                        
                            if(mysqli_fetch_assoc($result)){ 
                                return 1;
                            }else{
                                return 0;
                            }                    
                    }
                    public function cek_password($x,$y){
                        if(password_verify($x,$y)){
                            return 0;
                        }else{
                            return 1;
                        }
                    }    


        }


class validasi22{
                    public function confirm_password($x,$y){
                        if($x==$y){
                            return 0;
                        }else{
                            return 1;
                        }
                    }
                    public function val_ussername1($x){
                        if($x=='1' ||$x=='2' ||$x=='3'||$x=='4' ||$x=='5'||$x=='6'||
                           $x=='7' ||$x=='8' ||$x=='9'||$x=='0' ||$x=='.'||$x=='_' ){
                            return 1;
                        }else{
                            return 0;
                        }
                    }
                    public function val_ussername2($ussername_usser){
                        $a=0;
                        $j=strlen($ussername_usser);
                            for($i=0;$i<$j;$i++){
                                if(!preg_match("/^[a-zA-Z0-9_]+/", $ussername_usser[$i])){
                                    $a++;
                                }
                            }
                            return $a;
                    }
        }



                class usser22 extends database{
                    
        public function create($ussername_usser,$password_usser,$password_usser2,$no_telepon){
                      
                        $f=strlen($no_telepon);
                        if($f!=13){

                                    echo"<script>
                                alert('No telepon lebih angka')
                                window.location='buat_akun.php';
                            </script>";
                        }

 
                        $cek_daf3 = new cek_daftar22();
                        $cek_daf3=$cek_daf3->cek_daftar_usser($ussername_usser);
                        
                            if($cek_daf3==1){
                                    $n=new notif();
                                    $n=$n->notif_daftar();
                                    return false;
                            }
                        $val=new validasi22();
                        $val=$val->confirm_password($password_usser,$password_usser2);
                        
                            if($val==1){
                                    $n=new notif();
                                    $n=$n->notif_confirm();                      
                                    return false;
                            }else{                       
                                    $x=$ussername_usser[0];
                                    $val2=new validasi22();
                                    $val2=$val2->val_ussername1($x);

                                        if($val2==1){                       
                                            $n=new notif();
                                            $n=$n->notif_val();                      
                                            return false;
                                        }else{
                                            $val3=new validasi22();
                                            $val3=$val3->val_ussername2($ussername_usser);

                                                        if($val3>0){
                                                            $n=new notif();
                                                            $n=$n->notif_val2();    
                                                            return false;
                                                        }
                                                       
                                        }
                                    //enskripsi
                                    $password_usser=password_hash($password_usser,PASSWORD_DEFAULT);
                                    $saldo=0;
                                    //insert
                                    mysqli_query($this->connect, "INSERT INTO tb_usser VALUES 
                                    ('','$ussername_usser','$password_usser','$no_telepon','foto.jpg','$saldo','','')");

                                    echo "<script>
                                            alert('oke');
                                            window.location:index.php';
                                        </script>";               
                            }
                    }            
       }


          ?>