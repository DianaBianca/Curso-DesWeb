<!DOCTYPE html>
<html>
<head>
	<title>if else</title>
	<meta charset="utf-8">
</head>
<body>
	<?php  
		$idade1 =10;
		$idade2 =20;

		$nome1 = 'Diana';
		$nome2 = 'Joao';

		if ($idade1 < 18) {
			echo "$nome1 , você não pode dirigir <br>";
		}else {
			echo "$nome1 , você pode dirigir <br>";
		}

		if ($idade2 < 18) {
			echo "$nome2 , você não pode dirigir <br>";
		}else {
			echo "$nome2 , você pode dirigir <br";
		}



	?>
</body>
</html>