<?php

$nama = $_POST['txtnama'];
$olahraga = $_POST['olahraga'];
if($nama == ""){
    header("location:11-pendaftaran-js.html?nama=kosong");
}else{
        echo "Nama anda adalah ". $nama. " dolahraga anda adalah ".$olahraga;
}


?>