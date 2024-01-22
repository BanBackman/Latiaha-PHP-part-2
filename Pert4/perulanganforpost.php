<html>
<head>
	<title>Perulangan FOR</title>
</head>
<body>
	<form action="" method="post">
		<label>Masukkan jumlah</label><br>
		<input type="numeric" name="jumlah" required><br>
	</form>
	<?php
	if (isset($_POST['jumlah'])) {
$jumlah = $_POST['jumlah'];
for($ulang = 1; $ulang <= $jumlah; $ulang++) {
	echo "Angka ke - $ulang";
	echo "<br>";
}
}
?>