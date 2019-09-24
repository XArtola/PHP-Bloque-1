<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio6</title>
	<meta charset="utf-8">
</head>
<body>

	<?php

	$potencia = 5;
	$cantidad =500;

	for($i = 1; pow($i, $potencia) < $cantidad; $i++)
		echo "$i^$potencia = ".pow($i, $potencia)."<br>";
	?>

</body>
</html>