<!DOCTYPE html>
<html>
<head>
	<title>for each</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 

		$nomes = [
			array('nome' => 'Diana', 'salario' => 3000 , 'aniversário' => '15/03'),
			array('nome' => 'João','salario' =>3100),
			array('nome' => 'Júlia','salario' =>2400),
			array('nome' => 'Gilvânia','salario' =>2400),
			array('nome' => 'Apolo','salario' =>3200),
			array('nome' => 'João Alberto','salario' =>4200, 'aniversário' => '11/09')
		];

		echo "<pre>";
		print_r($nomes);
		echo "</pre>";

		foreach ($nomes as $i => $nome ) {
			foreach ($nome as $j => $valor) {
				echo "$j - $valor <br>";
			}
			echo "<hr>";
		}

	?>

</body>
</html>