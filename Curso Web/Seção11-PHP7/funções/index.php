<!DOCTYPE html>
<html>
<head>
	<title>funções</title>
	<meta charset="utf-8">
</head>
<body>
	<?php  
		//void
		function exibirBoasVindas(){
			echo 'Bem-vindo ao curso de PHP !!';
		}

		exibirBoasVindas();

		//return
		function calcularAreaTerreno($largura, $comprimmento){
			$area = $largura * $comprimmento;
			return 	$area;	

		}

		$resultado = calcularAreaTerreno(5,25);
		echo $resultado;

		echo "<br>";
		echo calcularAreaTerreno(15,125);
		
		

	?>

</body>
</html>