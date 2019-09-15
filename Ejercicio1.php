<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio1</title>
	<meta charset="utf-8">
</head>
<body>
	
	<?php
	$piso = 3;
	$puerta = 4;
	$letras = ["A","B","C","D","E"];
	for($i = 1; $i <= $piso; $i=$i+1){
		for($j=0; $j <=$puerta; $j=$j+1){

			echo "$i"."."."$letras[$j]"."\n";
		}
		echo "<br>";
	}

	?>

</body>
</html>