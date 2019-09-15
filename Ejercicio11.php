<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio11</title>
</head>
<body>

	<?php 

	$potencia = 2;
	$cantidad = 200;

	for($i = 1; pow($i,$potencia) <= $cantidad; $i = $i +1)
		echo "$i - " . pow($i,$potencia) . "<br>";

	?>

</body>
</html>