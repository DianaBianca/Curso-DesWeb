<!DOCTYPE html>
<html>
<head>
	<title>Incremento e decrmento</title>
</head>
<body>
	<h3>Pós incremento</h3>
	<?php  
		$a = 7;

		echo "oo valor contido em $a é <br>";
		echo 'oo valor contido a após o incremento é ' . $a++ . '<br>';
		echo "o valor contido em a é $a";	
	?>
	
	<h3>Pré incremento</h3>

	<?php  
		$a = 7;

		echo "oo valor contido em $a é <br>";
		echo 'oo valor contido a pré incremento é ' . ++$a . '<br>';
		echo "o valor contido em a é $a";

	?>

	<h3>Pós decremento</h3>

	<?php  
		$a = 7;

		echo "oo valor contido em $a é <br>";
		echo 'oo valor contido a pós decremento é ' . $a-- . '<br>';
		echo "o valor contido em a é $a";

	?>

	<h3>Pré decremento</h3>

	<?php  
		$a = 7;

		echo "oo valor contido em $a é <br>";
		echo 'oo valor contido a pré decremento é ' . --$a . '<br>';
		echo "o valor contido em a é $a";

	?>


</body>
</html>