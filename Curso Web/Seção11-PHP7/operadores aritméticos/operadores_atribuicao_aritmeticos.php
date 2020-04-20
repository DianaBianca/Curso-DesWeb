<!DOCTYPE html>
<html>
<head>
	<title>operadores de atribuição aritméticos</title>
	<meta charset="utf-8">

</head>
<body>
	<?php 
		
		$x = 10;
		$y = 8;

		/*$x = $x + 5;*/
		$x += 5;
		$x -= $y;
		$x *= $y;
		$x %= $y;
		$x /= $y;

		echo $x;

	?>

</body>
</html>