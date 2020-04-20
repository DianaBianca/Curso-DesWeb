<!DOCTYPE html>
<html>
<head>
	<title>casting de tipos</title>
</head>
<body>
	<?php  
		//gettype()
		$valor = 10;
		$valor2 = (float) $valor;

		$var = '22';
		$var2 = (int) $var;
		
		echo $valor . ' '  . gettype($valor);
		echo "<br>";
		echo $valor2 . ' '  . gettype($valor2);
		

		echo "<br>";
		echo $var . ' '  . gettype($var);
		echo "<br>";
		echo $var2 . ' '  . gettype($var2);




	?>

</body>
</html>