<?php
$username = $_POST['username'];
$password = $_POST['password'];
if($username == 'admin' && $password == '12345678') {
 echo "Anda berhasil login kedalam sistem";
} else {
 echo "Kombinasi username dan password anda salah";
}
?>