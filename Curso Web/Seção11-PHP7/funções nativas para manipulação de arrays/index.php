<!DOCTYPE html>
<html>
<head>
	<title>Funções para manipular arrays</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		/*
		$array = 'string';
		$array1 = array(1,22);
		$retorno = is_array($array);

		if ($retorno) {
			echo "sim é um array";
		}else{
			echo "não é um array";
		}
		
		ARRAY KEYS
		$array = [1 => 'a', 7 => 'b', 18=> 'c'];
		echo "<pre>";
		print_r($array);
		echo "</pre>";

		$chaves_array = array_keys($array);
		echo "<pre>";
		print_r($chaves_array);
		echo "</pre>";
		

		SORT

		$array = ['mouse','cabo hdmi','monitor', 'teclado', 'fone'];
		echo "<pre>";
		print_r($array);
		echo "</pre>";

		echo sort($array);//true ou false

		echo "<pre>";
		print_r($array);
		echo "</pre>";

		
		ASORT()
		$array = ['mouse','cabo hdmi','monitor', 'teclado', 'fone'];
		echo "<pre>";
		print_r($array);
		echo "</pre>";

		echo asort($array);//true ou false

		echo "<pre>";
		print_r($array);
		echo "</pre>";
	
		COUNT
		$array = ['mouse','cabo hdmi','monitor', 'teclado', 'fone'];
		echo "<pre>";
		 print_r($array);
		 echo count($array);
		echo "</pre>";
		
		ARRAY MERGE
		$array1 = ['osx','windows'];
		$array2 = ['linux'];
		$array3 = ['solaris'];
		
		$novo = array_merge($array1,$array2,$array3);
		echo "<pre>";
		 print_r($novo);
		echo "</pre>";
	

		EXPLODE
		$string = '26/04/2020';

		$array = explode('/', $string);
		echo "<pre>";
		echo $string;
		 print_r($array);
		 echo $array[2].'-'.$array[1].'-'.$array[0];
		echo "</pre>";


		IMPLODE
	*/
		$array = ['s','b','a','x'];
		$retorno = implode(',', $array);
		echo $retorno;


	?>

</body>
</html>