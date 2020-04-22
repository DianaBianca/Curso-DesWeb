<!DOCTYPE html>
<html>
<head>
	<title>for each</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 

		$nomes = ['Diana','João','Júlia','Gilvânia','Apolo','João Alberto'];
		echo "<pre>";
		print_r($nomes);
		echo "</pre>";

		foreach ($nomes as $nome ) {
			echo "$nome";

			if ($nome  == 'João Alberto') {
				echo " -> Este é seu namorado";
			}elseif ($nome  == 'João') {
				echo " -> Este é seu pai";
			}elseif ($nome  == 'Júlia') {
				echo " -> Esta é sua irmã";
			}elseif ($nome  == 'Gilvânia') {
				echo " -> Esta é sua mãe";
			}elseif ($nome  == 'Diana') {
				echo " -> Esta é você";
			}elseif ($nome  == 'Apolo') {
				echo " -> Este é seu irmão";
			}

			echo "<br>";
		}

	?>

</body>
</html>