<?php
$nohari = $_POST['angka'];
if(is_numeric($nohari)) {
switch($nohari) {
 case 1 : echo "Hari ke-1 Minggu"; break;
 case 2 : echo "Hari ke-2 Senin"; break;
 case 3 : echo "Hari ke-3 Selasa"; break;
 case 4 : echo "Hari ke-4 Rabu"; break;
 case 5 : echo "Hari ke-5 Kamis"; break;
 case 6 : echo "Hari ke-6 Jum'at"; break;
 case 7 : echo "Hari ke-7 Sabtu"; break;
 default : echo "Tidak ada hari ke $nohari";
}
} else {
echo "Data yang diinputkan bukan angka";
}
?>