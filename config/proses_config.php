<?php 
    session_start();
    include "../database/database.php";
    include "../notifikasi.php";
    
    
        class validasi{
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

        class cek_daftar extends database{
                    
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

        class usser extends database{
                    
            

            public function tampil(){
                $result=mysqli_query($this->connect,"SELECT *FROM tb_pesawat");
                return $result;
            }
                    public function create($ussername_usser,$password_usser,$password_usser2,$no_telepon){
                        $f=strlen($no_telepon);
                        if($f!=12){

                                    echo"<script>
                                alert('No telepon lebih angka')
                                window.location='../buat_akun.php';
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
                                    ('','$ussername_usser','$password_usser','$no_telepon','foto.jpg','$saldo','','')");

                                   
                            }
                    }            
       }



        
       class login extends database{
                
                public function cek(){
                    $ussername_login = $_POST['ussername_login'];
                    $password_login = $_POST['password_login'];
                $data=mysqli_query($this->connect,"SELECT * FROM tb_admin WHERE ussername_admin='$ussername_login'");

                        if (mysqli_num_rows($data)==1){      
                                $row = mysqli_fetch_assoc($data);
                                $cek_pass=new cek_daftar();
                                $cek_pass=$cek_pass->cek_password($password_login,$row["password_admin"]);

                                if($cek_pass==0){

                                        if($row['status']=="admin_manager" ){
                                            
                                            $_SESSION["login-admin-manager"]="true";
                                            $_SESSION["ussername_admin-pesawat"]="$ussername_login";
                                            $_SESSION["ussername_admin-kereta"]="$ussername_login";
                                            $_SESSION["ussername_admin-bus"]="$ussername_login";
                                            $_SESSION["ussername_admin-info"]="$ussername_login";
                                            
                                            

                                            $_SESSION["login-admin"]="true";
                                            header("location:../ADMIN/menu-admin-manager.php");

                                        }elseif($row['status']=="admin_pesawat" ||$row['status']=="admin_manager" ){
                                            
                                        
                                        $_SESSION["ussername_admin-pesawat"]="$ussername_login";

                                            
                                            header("location:../ADMIN/menu-admin-pesawat.php");

                                            
                                        }elseif($row['status']=="admin_kereta" ||$row['status']=="admin_manager" ){
                                            
                                       
                                        $_SESSION["ussername_admin-kereta"]="$ussername_login";


                                              header("location:../ADMIN/menu-admin-kereta.php");
                                        }elseif($row['status']=="admin_bus" ||$row['status']=="admin_manager" ){
                                            
                                        $_SESSION["login-admin-manager"]="true";
                                       $_SESSION["ussername_admin-bus"]="$ussername_login";


                                            header("location:../ADMIN/menu-admin-bus.php");


                                        }elseif($row['status']=="admin_info" ||$row['status']=="admin_manager" ){
                                            
                                       
                                        $_SESSION["ussername_admin-info"]="$ussername_login";

                                            
                                            header("location:../ADMIN/menu-admin-info.php");
                                        }
                                }else{
                                        $n=new notif();
                                        $n=$n->notif_pass();                      
                                } 
                        }else{
                            //ngecek usser
                            $data2=mysqli_query($this->connect,"SELECT * FROM tb_usser WHERE ussername_usser='$ussername_login'");

                            if (mysqli_num_rows($data2)===1){
                                //cek password 
                                $row2 = mysqli_fetch_assoc($data2);
                                $cek_pass=new cek_daftar();
                                $cek_pass=$cek_pass->cek_password($password_login,$row2["password_usser"]);

                                    if($cek_pass==0){
                                            $_SESSION["login-usser"]="true";
                                            $_SESSION["ussername_usser"]= $row2['ussername_usser'];  
                                            header("location:../menu-usser.php");
                                    }else{
                                            $n=new notif();
                                            $n=$n->notif_pass();                      
                                    }   
                            }else{
                                $n=new notif();
                                $n=$n->notif_daf2();
                            }   
                        }
                }
    
  
       }
       


?>