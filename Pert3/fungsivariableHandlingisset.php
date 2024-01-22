<!DOCTYPE html>
<html lang="en">
<head>
 <title></title>
</head>
<body>
    <form action="" method="post">
    Masukan Angka : <br>
    <input type="number" name="angka" /><br>
    <input type="submit" name="button" value="proses" />
    </form>
 <br>
 <?php
 if(isset($_POST['button'])) { 
    $x = $_POST['angka'];
    if($x % 2 == 0) {
        echo $x." adalah bilangan genap";
    } else {
        echo $x." adalah bilangan ganjil";
 }
 }
 ?>
</body>
</html>