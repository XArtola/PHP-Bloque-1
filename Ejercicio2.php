<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio2</title>
</head>
<body>

	<?php

	$num1 = 1;
	$num2 = 2;
	$num3 = 3;
	
	if($num1 > $num2){
		if($num1 > $num3){
			echo "$num1 es el mayor";
		}

		else{
			echo "$num3 es el mayor";
		}
	}

	elseif($num2 > $num1){
		if($num2 > $num3){
			echo "$num2 es el mayor";

		}

		else{
			echo "$num3 es el mayor";

		}
	}

	?>

</body>
</html>