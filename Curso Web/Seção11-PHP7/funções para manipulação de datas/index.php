<!DOCTYPE html>
<html>
<head>
	<title>funções para manipulação de datas</title>
	<meta charset="utf-8">
</head>
<body>

	<?php 

		//recuperação da data atual /data corrente
		//echo date('d');
		//echo date('D') ;
		//echo date('W');

		/*
		echo date('d/m/Y H:i:') . "<br>";

		echo date_default_timezone_get() . "<br>";
		date_default_timezone_set('America/Sao_Paulo');

		echo date_default_timezone_get() . "<br>";
		*/

		$data_inicial = '2018-04-24';
		$data_final = '2018-05-15';

		//timestamp
		// inicio da era unix   01/01/1097 -- 2018-04-24
		$time_inicial = strtotime($data_inicial);
		$time_final = strtotime($data_final);
		echo $data_inicial . ' - ' . $time_inicial;
		echo "<br>";
		echo $time_final . ' - ' . $time_final;

		$diferenca_times = abs($time_inicial - $time_final );

		echo '<br>';
		echo "a diferença de segundos entre a data inicial e final é : $diferenca_times";

		$segundos_dia = 24 * 60 *60;
		echo "um dia possui $segundos_dia segundos";
		echo '<br>';

		$diferenca = $diferenca_times /$segundos_dia;
		echo '<br>';
		echo "a diferencaem dias é $diferenca ";

	?>

</body>
</html>