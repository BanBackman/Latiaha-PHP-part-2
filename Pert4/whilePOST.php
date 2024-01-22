<?php 
	$jumlah = $_POST["jumlah"];
	$ulang = 1;
		while($ulang <= $jumlah) {
			echo "Angka ke $ulang";
			echo "<br>";
	$ulang = $ulang + 1;
}
?>