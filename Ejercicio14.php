<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio14</title>
	<meta charset="utf-8">
</head>
<body>

	<?php

	$aleatorios = array();

	for ($i = 0; $i < 20; $i = $i +1)

		$aleatorios[$i] = random_int(0, 100);

	echo "<h1 style='color:blue'> El numero mas pequeño es " . min($aleatorios) . "</h1><br>";
	echo "<h1 style='color:green'> El numero mas pequeño es " . max($aleatorios) . "</h1><br>";
	echo "<h1 style='color:red'> La suma es " . array_sum($aleatorios)." y la media ". (float) array_sum($aleatorios)/count($aleatorios) . "</h1><br>";
	?>

</body>
</html>