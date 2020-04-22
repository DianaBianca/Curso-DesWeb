<!DOCTYPE html>
<html>
<head>
	<title>while</title>
	<meta charset="utf-8">
</head>

<body>
	<?php
		$num = 1;
		while ($num <= 10) {
			echo $num.'<br>';
			$num ++;
			
		}

		echo "até 99 <br>";
		$num = 1;
		while (true) {
			echo $num.'<br>';
			$num ++;
			if ($num == 100) {
				break;
			}
		}

	?>

</body>
</html>