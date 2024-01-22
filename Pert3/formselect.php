<html>
<head>
 <title>Form Select</title>
</head>
<body>
    <form action="prosesselect.php" method="post">
         <label>Nama</label><br>
            <input type="text" name="nama" required><br>
        <label>Jenis Kelamin</label><br>
            <select name="jeniskelamin">
                <option value="">Pilih...</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
            <br>
        <button type="submit">Proses</button>
    </form>
</body>
</html>