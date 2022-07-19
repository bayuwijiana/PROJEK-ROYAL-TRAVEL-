<?php

class database{
    public $host ="localhost";
    public $username ="root";
    public $password ="";
    public $nama_db ="travel";
    public $connect;

    public function __construct()
    {
        $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->nama_db);
    }
}

    

?>