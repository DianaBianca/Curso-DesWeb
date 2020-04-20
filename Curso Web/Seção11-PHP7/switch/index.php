<!DOCTYPE html>
<html>
<head>
	<title>Switch</title>
</head>
<body>
	<?php  
		$idade = 16;

		switch ($idade) {
			case '11':
				echo 'quinta-série';
				break;

			case '12':
				echo 'sexta-série';
				break;

			case '13':
				echo 'sétima-série';
				break;

			case '14':
				echo 'oitava-série';
				break;

			case '15':
				echo 'primeiro colegial';
				break;

			case '16':
				echo 'segundo colegial';
				break;

			case '17':
				echo 'terceiro colegial';
				break;

			default:
				echo 'formado';
				break;
		}
	?>

</body>
</html>