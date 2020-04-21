<!DOCTYPE html>
<html>
<head>
	<title>arrays multidimensionais</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

		$lista_coisas = [];
		$lista_coisas['frutas'] = [1=>'banana', 2=>'pessego',3=>'uva'];
		$lista_coisas['pessoas'] = [1=> 'jão', 2=> 'josé', 3=> 'maria', 4=> 'ana'];

		echo '<pre>';
		print_r($lista_coisas);
		echo '</pre>';

		echo "<hr>";
		echo $lista_coisas['frutas'][3];

		echo "<hr>";
		echo $lista_coisas['pessoas'][4];

	?>
</body>
</html>