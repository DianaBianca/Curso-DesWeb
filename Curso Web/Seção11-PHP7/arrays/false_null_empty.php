<!DOCTYPE html>
<html>
<head>
	<title>false null empty</title>
</head>
<body>
	<?php

		$funcionario1 = null;
		$funcionario2 = '';
		$funcionario3 = false;
 	
 	//valores null
		
		if (is_null($funcionario1)) {
			echo "sim a variavel é null";
		}else{
			echo "nao, a variavel nao é null";
		}

		echo "<br>";

		if (is_null($funcionario2)) {
			echo "sim a variavel é null";
		}else{
			echo "nao, a variavel nao é null";
		}

		echo "<hr>";
		//valores vazios

		if (empty($funcionario1)) {
			echo "sim a variavel é null";
		}else{
			echo "nao, a variavel nao é null";
		}

		echo "<br>";

		if (empty($funcionario2)) {
			echo "sim a variavel é vazia";
		}else{
			echo "nao, a variavel nao é vazia";
		}

		echo "<hr>";
		//valores vazios

		if (empty($funcionario3)) {
			echo "sim a variavel é null";
		}else{
			echo "nao, a variavel nao é null";
		}

		echo "<br>";

		if (empty($funcionario3)) {
			echo "sim a variavel é vazia";
		}else{
			echo "nao, a variavel nao é vazia";
		}

	?>

</body>
</html>