<!DOCTYPE html>
<html>
<head>
	<title>for </title>
	<meta charset="utf-8">
</head>

<body>
	<?php
		$num = 5;
		
		for ($i=0; $i <= 10 ; $i++) { 
			$result = $num * $i;
			echo $i.' X '.$num.' = '.$result.'<br>';
		}

	?>

</body>
</html>