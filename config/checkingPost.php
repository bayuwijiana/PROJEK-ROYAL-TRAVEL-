<?php 
    include "proses_config.php";
    $cek = $_POST['cek'];
    $act = $_POST['act'];
    
    if($cek == 'usser'){
        if($act == 'create'){
            $data = new usser();
            $data->create();
        }
        // else if($act == 'update'){
        //     $data = new usser();
        //     $id_karyawan = $_POST['id_usser'];
        //     $data->update($id_karyawan);
        // }

    }else if($cek =='login'){
            $data = new login();
            $data->cek();
    }
    
?>