<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio7</title>
	<meta charset="utf-8">
</head>
<body>

	<?php	

	function calculo ($numero){

		if ($numero % 2 == 0) {
			return $numero / 2;
		}

		else 
			return $numero * 3 + 1;

	}

	echo calculo(1);

	?>

</body>
</html>