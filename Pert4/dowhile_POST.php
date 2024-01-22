<?php 
$jumlah = $_POST["jumlah"];
$ulang = 1;
do {
    echo "Angka ke - $ulang";
    echo "<br>";
    $ulang = $ulang + 1;
} while ($ulang <= $jumlah)
?>
