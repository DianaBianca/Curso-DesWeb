<!DOCTYPE html>
<html>
<head>
	<title>operadores logicos</title>
	<meta charset="utf-8">
</head>
<body>
	<?php  
	
	
		if (5 == 3 && 10 > 3) { //falso
			echo 'verdadeiro<br>';
		}else{
			echo 'Falso <br>';
		}

		if (3 == 3 || 10 > 15) { //verdadeiro
			echo 'verdadeiro<br>';
		}else{
			echo 'Falso <br>';
		}

		if (3 == 3 XOR 10 > 15) { //verdadeiro
			echo 'verdadeiro<br>';
		}else{
			echo 'Falso <br>';
		}

		if (3 == 3 XOR 10 < 15) { //falso
			echo 'verdadeiro<br>';
		}else{
			echo 'Falso <br>';
		}

		if ( !(7 >= 4 XOR 10 < 15)) { //verdadeiro
			echo 'verdadeiro<br>';
		}else{
			echo 'Falso <br>';
		}

		if ( !(1 == 1)) { //false
			echo 'verdadeiro<br>';
		}else{
			echo 'Falso <br>';
		}




	?>
</body>
</html>