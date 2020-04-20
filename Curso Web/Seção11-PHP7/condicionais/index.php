<!DOCTYPE html>
<html>
<head>
	<title>condicionais</title>
	<meta charset="utf-8">
</head>
<body>
	<?php  
		//==	igual
		//===	identico
		//!=	diferente
		//<>	diferente
		//!==	não identico
		//<		menor
		//>		maior
		//<=	menor igual
		//>=	maior igual
	
		$idade1 =10;
		$idade2 =20;

		$nome1 = 'Diana';
		$nome2 = 'Joao';

		if ($idade1 == $idade2) {
			echo "$nome1 , você tem a mesma idade de $nome2 <br>";
		}else {
			echo "$nome1 , você não tem a mesma idade de $nome2 <br>";
		}

		if ($idade1 <> $idade2) {
			echo "$nome2 , você e $nome2 tem idades diferentes <br>";
		}else {
			echo "$nome2 , você e $nome2 tem idades iguais <br>";
		}

		if ($idade2 !== $nome2) {
			echo "tipos de variaveis diferentes<br>";
		}



	?>
</body>
</html>