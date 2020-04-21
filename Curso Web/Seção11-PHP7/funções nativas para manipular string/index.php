<!DOCTYPE html>
<html>
<head>
	<title>Funções nativas para manipular string</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$texto = 'Curso completo de PHP';

		//string to lower
		echo 'string to lower <br>';
		echo $texto . '<br>';
		echo strtolower($texto);
		echo '<hr>';

		//string to upper
		echo 'string to upper <br>';
		echo $texto . '<br>';
		echo strtoupper($texto);
		echo '<hr>';

		//string  ucfirst- uppercase first
		echo 'string to ucfirst <br>';
		echo $texto . '<br>';
		echo ucfirst($texto);
		echo '<hr>';

		//string length
		echo 'string length<br>';
		echo $texto . '<br>';
		echo strlen($texto);
		echo '<hr>';

		//string replace
		echo 'string replace<br>';
		echo 'texo original :' . $texto . '<br>';
		echo str_replace('PHP', 'JavaScript', $texto);
		echo '<hr>';

		//string substring
		echo 'string substring<br>';
		echo $texto . '<br>';
		echo substr($texto, 5,8);
		echo '<hr>';








	 ?> 

</body>
</html>