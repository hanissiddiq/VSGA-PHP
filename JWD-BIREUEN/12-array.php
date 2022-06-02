<?php
// membuat array
$barang = ["Buku tulis", "penghapus","spidol","hekter"];

for($i=0; $i<count($barang); $i++){
    echo $barang[$i]."<br>";
}

foreach($barang as $b){
    echo $b."<br>";
}

echo "<hr>";

$i=0;
while($i<count($barang)){
    echo $barang[$i]."<br>";
    $i++;
}

?>