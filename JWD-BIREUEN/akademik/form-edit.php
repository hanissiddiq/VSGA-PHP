<?php
include 'koneksi.php';
$id         = $_GET['id_mhs'];
$mahasiswa  = mysqli_query($koneksi, "SELECT * FROM mahasiswa where id_mhs='$id'");
$row        = mysqli_fetch_array($mahasiswa);

// membuat data jurusan menjadi dinamis dalam bentuk array
$jurusan    = array('TEKNIK INFORMATIKA','TEKNIK MESIN','TEKNIK ELEKTRO','TEKNIK KIMIA','TEKNIK LINGKUNGAN');

function active_radio_button($value,$input){

    $result = $value==$input?'checked':'';
    return $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form method="post" action="update.php">
    <input type="hidden" value="<?php echo $row['id_mhs'];?>" name="id_mhs">
<table>
    <tr>
        <td>NIM</td><td><input type="text" name="nim" value="<?php echo $row['nim'];?>"></td>
    </tr>
    <tr>
        <td>NAMA</td><td><input type="text" name="nama" value="<?php echo $row['nama'];?>"></td>
    </tr>
    <tr>
        <td>JENIS KELAMIN</td>
        <td>
            <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L",$row['jenis_kelamin'])?>> Laki - Laki
            <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P",$row['jenis_kelamin'])?>> Perempuan
        </td>
    </tr>
    <tr>
        <td>JURUSAN</td>
        <td>
            <select name="jurusan" <?php echo $row['jurusan'];?>>
                <?php
                foreach($jurusan as $j){
                    echo "<option value = '$j' ";
                    echo $row['jurusan']==$j?'selected="selected"':'';
                    echo ">$j </option>";
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>ALAMAT</td><td><input type="text" name="alamat" value="<?php echo $row['alamat'];?>"></td>
    </tr>
    <tr>
        <td colspan="2"> 
            <button type="submit" value="simpan">SIMPAN</button>
            <a href="index.php">KEMBALI</a>        
        </td>
    </tr>
</table>

</form>    
</body>
</html>