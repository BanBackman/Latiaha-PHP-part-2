<?php
	echo "<h3>Pre Increment</h3>";
	$a = 5;

	echo "\$a = 5";
	echo "<br>";
	echo "Dengan ++\$a menjadi 6 : ".++$a;
	echo "<br>";
	echo "Tetap 6 : ". $a;
	echo "<h3>Post Increment</h3>";
	
	$a = 5;
	
	echo "\$a = 5";
	echo "<br>";
	echo "Dengan \$a++ tetap 5 : ".$a++;
	echo "<br>";
	echo "Kemudian menjadi : ". $a;
?>
