<!DOCTYPE html>
<html>
<head>
	<title>for </title>
	<meta charset="utf-8">
</head>

<body>
	<?php

		$nomes= ['Diana','João','Júlia','Gilvânia','Apolo','João Alberto'];

		$tamanho = count($nomes);


		echo "<hr> LAÇO FOR <hr><br>";
		for ($i=0; $i < $tamanho; $i++) { 
			echo 'Membro'. $i .' : '.$nomes[$i].'<br>';
		}
		$i=0;
		echo "<hr>LAÇO WHILE <hr><br>";
		while ($i < $tamanho) {
			echo 'Membro'. $i .' : '.$nomes[$i].'<br>';
			$i++;
		}

		$i=0;
		echo "<hr>LAÇO DO WHILE <hr><br>";
		do{
			
			echo 'Membro'. $i .' : '.$nomes[$i].'<br>';
			$i++;
			
		}while ($i < $tamanho) ;

	?>

</body>
</html>