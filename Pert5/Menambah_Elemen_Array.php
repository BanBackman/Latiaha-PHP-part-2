<?php 
	
	$interpreter = ["PHP","Python","JavaScript"];
	$interpreter[3] = "JavaScript";
	$interpreter[4]	= "C++";
	$interpreter[5]	= "Pascal";

		for($i = 0; $i < count($interpreter); $i++) {
			echo $interpreter[$i]."<br>";
}
			echo "<br>";
		foreach($interpreter as $value) {
			echo $value."<br>";
}
?>