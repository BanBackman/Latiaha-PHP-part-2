<?php
	echo "<h3>Pre Decrement</h3>";
	$a = 5;
	echo "\$a = 5";
	echo "<br>";
	echo "Dengan --\$a menjadi 4 : ".--$a;
	echo "<br>";
	echo "Tetap 4 : ". $a;

	echo "<h3>Post Decrement</h3>";
	$a = 5;
	echo "\$a = 5";
	echo "<br>";
	echo "Dengan \$a-- tetap 5 : ".$a--;
	echo "<br>";
	echo "Kemudian menjadi:" .$a;

?>