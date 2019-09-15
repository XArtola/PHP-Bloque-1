<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio5</title>
	<meta charset="utf-8">
</head>
<body>

	<?php 

	$palabra = "somos";
	$aux = strrev($palabra);
	if($palabra == $aux)
		echo "La palabra $palabra es palindroma";
	else
		echo "La palabra $palabra no es palindroma";
	?>


</body>
</html>