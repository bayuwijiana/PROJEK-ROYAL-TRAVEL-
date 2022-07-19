<?php	

include "../database/database.php";


class usser22 extends database{
                    
                    
        public function create($ussername_usser,$password_usser,$password_usser2,$no_telepon){
                      
                        $f=strlen($no_telepon);
                        if($f!=12){

                                    echo"<script>
                                alert('No telepon lebih angka')
                                window.location='buat_akun.php';
                            </script>";
                        }

 
                        $cek_daf3 = new cek_daftar();
                        $cek_daf3=$cek_daf3->cek_daftar_usser($ussername_usser);
                        
                            if($cek_daf3==1){
                                    $n=new notif();
                                    $n=$n->notif_daftar();
                                    return false;
                            }
                        $val=new validasi();
                        $val=$val->confirm_password($password_usser,$password_usser2);
                        
                            if($val==1){
                                    $n=new notif();
                                    $n=$n->notif_confirm();                      
                                    return false;
                            }else{                       
                                    $x=$ussername_usser[0];
                                    $val2=new validasi();
                                    $val2=$val2->val_ussername1($x);

                                        if($val2==1){                       
                                            $n=new notif();
                                            $n=$n->notif_val();                      
                                            return false;
                                        }else{
                                            $val3=new validasi();
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
                                    ('','$ussername_usser','$password_usser','$no_telepon','foto.jpg','$saldo')");

                                    header("location:index.php");               
                            }
                    }            
       }



?>

