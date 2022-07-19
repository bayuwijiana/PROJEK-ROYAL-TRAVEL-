<?php	
            include "database/database.php";
                class a extends database{

                    function tampil_pesawat(){
                              $v=random_int(1,10);
                              $data=mysqli_query($this->connect,"SELECT * FROM tb_pesawat LIMIT $v,4");
                        return $data;
                    }
                    
                    function tampil_kereta(){
                              $v=random_int(1,10);
                              $data=mysqli_query($this->connect,"SELECT * FROM tb_kereta LIMIT $v,4");
                        return $data;
                    }
                    
                }
                  
          ?>