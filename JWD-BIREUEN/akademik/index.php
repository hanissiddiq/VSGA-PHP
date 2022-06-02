<h2>List Mahasiswa</h2>
<a href="form-input.php">Tambah Data</a>
<table border=1>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>GENDER</th>
        <th>JURUSAN</th>
        <th colspan=2>AKSI</th>
    </tr>

<?php
include 'koneksi.php';
$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
$no=1;
foreach ($mahasiswa as $m){
    $jenis_kelamin = $m['jenis_kelamin']=='P'?'Perempuan':'Laki laki';
    echo "<tr>
            <td>$no</td>
            <td>".$m['nim']."</td>
            <td>".$m['nama']."</td>
            <td>".$jenis_kelamin."</td>
            <td>".$m['jurusan']."</td>
            <td> 
            <a href='form-edit.php?id_mhs=$m[id_mhs]'>EDIT</a>
            <a href='delete.php?id_mhs=$m[id_mhs]'>HAPUS</a>
            </td>
          </tr>";
          $no++;
}

?>

</table>
