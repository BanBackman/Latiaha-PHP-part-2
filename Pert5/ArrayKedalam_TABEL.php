<html>
<head>
 <title>Array To Tabel</title>
    </head>
        <body>

        <?php include("DATANILAI.php") ?>
        <table border="1">
     <tr>
 <td>Nama</td>
 <td>Pemrograman web2</td>
 <td>PSSI</td>
 <td>JKD</td>
    </tr>

         <?php foreach($nilai as $key => $value) { ?>
    <tr>
 <td><?php echo $key ?></td>
 <td><?php echo $value["Pemrograman web2"] ?></td>
 <td><?php echo $value["PSSI"] ?></td>
 <td><?php echo $value["JKD"] ?></td>
    </tr>
        <?php } ?>
</table>
</body>
</html>