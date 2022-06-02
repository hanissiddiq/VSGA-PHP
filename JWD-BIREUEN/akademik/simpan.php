<?php
include 'koneksi.php';
// $_POST['nama'] diambil dari name yang ada di input form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// query sql untuk insert data
$query="INSERT INTO mahasiswa 
SET nim='$nim',
    nama='$nama',
    jurusan='$jurusan',
    jenis_kelamin='$jenis_kelamin',
    alamat='$alamat'";

mysqli_query($koneksi,$query);

//mengalihkan halaman ke index.php
header("location:index.php");

?>