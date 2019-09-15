<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio8</title>
	<meta charset="utf-8">
</head>
<body>

	<?php 

	$base = 11;

	if($base % 2 != 0 and $base > 0){

		$centro = floor($base/2);
	
		for ($i = 1; $i <= $base; $i = $i + 2){

			for ($j = 1; $j <= $centro; $j = $j + 1)

				echo "_";

			for ($j = 1; $j <= $i; $j = $j + 1)

				echo "*";

			echo "<br>";
			$centro = $centro -1;

		}

	}

	else
		echo "Base inapropiada introduce otra";

	?>

</body>
</html>