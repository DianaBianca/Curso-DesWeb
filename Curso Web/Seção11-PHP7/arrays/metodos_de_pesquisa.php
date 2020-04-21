<!DOCTYPE html>
<html>
<head>
	<title>metodos de pesquisas em arrays</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		//in_array()-> retorna true ou false para existencia do que está sendo procurado

		//array_search()-> retorna o indice do valor pesquisado caso ele exista;

		$lista_frutas = ['Banana','Maça','Abacate','mamão'];
		/*
		echo "<pre>";
		print_r($lista_frutas);
		echo "</pre>";

		$existe= array_search('Banana', $lista_frutas);

		if ($existe != null) {
			echo "sim, o valor pesquisado está no array";
		}else{
			echo "nao, o valor pesquisado nao se encontra no array";
		}

		
		$existe= in_array('mamão', $lista_frutas);
		//true -> texto = 1
		//false -> texto = vazio
		
		if ($existe) {
			echo "sim, o valor pesquisado está no array";
		}else{
			echo "nao, o valor pesquisado nao se encontra no array";
		}
		*/

		$lista_coisas = ['frutas' => $lista_frutas,'pessoas' => ['joao','maria']];



		echo "<pre>";
		print_r($lista_coisas);
		echo "</pre>";

		echo in_array('mamão', $lista_coisas['frutas']);




	?>
</body>
</html>