<!DOCTYPE html>
<html>
<head>
	<title>arrays</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		//sequenciais (numericos)
		//$lista_frutas = array('banana','maçã', 'morango', 'uva');
	    /*
	    $lista_frutas = ['banana','maçã', 'morango', 'uva'];
		$lista_frutas[] = 'abacate';

		
		echo '<pre>';
		var_dump($lista_frutas);
		echo '</pre>';
		echo '<hr>';
		echo '<pre>';
		print_r($lista_frutas);
		echo '</prev(array)>';
		

		echo $lista_frutas[2];
	*/
		// associativos

		$lista_frutas = [
			'a' =>'banana', 
			'b' =>'maçã', 
			'c' =>'morango', 
			'2' =>'uva'];

		$lista_frutas['w'] = 'jumbo';

		echo '<pre>';
		var_dump($lista_frutas);
		echo '</pre>';

		echo $lista_frutas['2'];
	?>

</body>
</html>