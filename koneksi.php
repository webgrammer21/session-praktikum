<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "db_makanan";

    $konek = mysqli_connect($hostname, $username, $password, $database);
    
    if($konek->connect_error){
        die('Maaf koneksi gagal : '. $konek->connect_error);
    }
?>