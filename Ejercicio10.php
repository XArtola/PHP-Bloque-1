<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio10</title>
	<meta charset="utf-8">
</head>
<body>

	<?php

	$total_compra = 80.58;
	$tipo_compra = "mascota";

	if($total_compra < 19){

		if($tipo_compra == "mascota")
			echo "No se puede realizar envio";
		else
			echo "Los gastos de envio son 9 euros. <br>Precio final ". $total_compra*1.21 + 9 ."euros";
	}
	elseif ($total_compra < 40) {
		echo "Los gastos de envio son 9 euros <br>";

		if($tipo_compra == "mascota")
			echo "Precio final ". $total_compra*1.10 + 9 ." euros";
		else
			echo "Precio final ". $total_compra*1.21 + 9 ." euros";
	}
	elseif ($total_compra > 80) {
		echo "Los gastos de envio son gratuitos <br>";

		if($tipo_compra == "mascota")
			echo "Precio final ". $total_compra*1.10 ." euros";
		else
			echo "Precio final ". $total_compra*1.21 ." euros";
	}

	?>
</body>
</html>