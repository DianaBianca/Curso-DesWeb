<!DOCTYPE html>
<html>
<head>
	<title>variaveis pratica</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		//string
		$nome = 'diana bianca';

		//int
		$idade = 20;

		//float
		$peso = 80.5;

		//boolean
		$fuma = false; 


		#alterando o valor das variaveis

		//string
		$nome = 'Suellen Campos';

		//int
		$idade = 40;

		//float
		$peso = 50.5;

		//boolean
		$fuma = true;

	?>

	<h1>Ficha Cadastral</h1>
	<br>
	<p>Nome : <?= $nome ?></p>
	<p>Idade : <?= $idade ?></p>
	<p>Peso : <?= $peso ?></p>
	<p>Fumante : <?= $fuma ?></p>
	
</body>
</html>