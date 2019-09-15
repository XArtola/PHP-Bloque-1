<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio9</title>
	<meta charset="utf-8">
</head>
<body>

	<?php 

	$precio = 10000;

	if($precio < 10000)
		echo "La comisión es ". $precio * 1.05 . " euros";
	elseif ($precio <= 20000) {
		echo "La comisión es ". $precio * 1.08 . " euros";
	}
	elseif ($precio <= 40000) {
		echo "La comisión es ". $precio * 1.1 . " euros";
	}
	else
		echo "La comisión es ". $precio * 1.13 . " euros";

	?>

</body>
</html>