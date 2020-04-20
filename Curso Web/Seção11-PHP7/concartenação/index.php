<!DOCTYPE html>
<html>
<head>
	<title>Concatenação</title>
	<meta charset="utf-8">
</head>
<body>

	<?php  
		$nome = 'diana';
		$namorado = 'Joao' ;
		$idade = 20;

		//operador .

		echo 'olá '. $nome .', vi que sua cor preferida é verde. estou vendo que voce possui '. $idade .' anos e que namora o '. $namorado .'';
		//aspas duplas
		echo '<br>';

		echo " olá $nome ! voce tem $idade anos e namora o $namorado , né"
	?>

</body>
</html>