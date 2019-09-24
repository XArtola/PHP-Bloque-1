<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio5</title>
	<meta charset="utf-8">
</head>
<body>

	<?php 
	$edad = 6;
	$altura = 100;
	$adulto = true;

	if($edad >= 10 or $altura >= 120)
		echo "Puede montar";
	elseif ($adulto and $edad >= 6)
		echo "Puede montar";
	
	else
		echo "No puede montar";

	?>

</body>
</html>