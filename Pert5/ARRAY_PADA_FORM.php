<html>
<head>
        <title>Array Form</title>
</head>
    <body>
        <form action="foreach.php" method="POST">
 
        <?php for($i = 1; $i<=5; $i++) { ?>
            <label>Nama Barang ke <?php echo $i ?></label>
            <input type="text" name="barang[]" >
            <br>
        <?php } ?>
         <button type="submit">Proses</button>
        </form>
    </body>
</html>
