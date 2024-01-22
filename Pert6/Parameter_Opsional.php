<?php
function hitungharga($harga,$diskon=0){
	if($diskon==0){
		return$harga;
	}else{
		return $harga-($harga*($diskon/100));
	}
}
$Blazer = hitungharga(250000);
$Kaftan = hitungharga(300000,30);
$Jilbab = hitungharga(100000,25);

echo"Harga Blazer:".$Blazer;
echo"<br>";
echo"Harga Kaftan diskon 30% menjadi: ".$Kaftan;
echo"<br>";
echo"Harga Hijab diskon 25% menjadi: ".$Jilbab;

?>