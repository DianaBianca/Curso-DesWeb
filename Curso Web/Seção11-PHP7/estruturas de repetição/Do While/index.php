<!DOCTYPE html>
<html>
<head>
	<title>do while</title>
	<meta charset="utf-8">
</head>

<body>
	<?php
		$num = 1;
		do {
			echo $num.'<br>';
			$num ++;
			
		}while($num <= 10);

		echo "até 99 <br>";
		$num = 1;

		do {
			echo $num.'<br>';
			$num ++;
			if ($num == 100) {
				break;
			}
		}while(true);

	?>

</body>
</html>