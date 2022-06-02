<?php

//konfigurasi database
$host= "localhost";
$user= "root";
$password ="";
$database= "db_mhs";

//perintah php untuk akses ke database
$koneksi = mysqli_connect($host,$user,$password,$database);


if(mysqli_connect_errno()){
    echo "koneksi database gagal guys".mysql_connect_error();
}
?>