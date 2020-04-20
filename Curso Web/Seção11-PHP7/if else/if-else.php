<!DOCTYPE html>
<html>
<head>
	<title>if else praticando mais um pouco</title>
	<meta charset="utf-8">
</head>
<body>
	<?php  

		$usuario_possui_cartao_loja = true;
		$valor_compra = 225;
		$valor_frete = 50;
		$recebeu_desconto_frete = false;

		if ($usuario_possui_cartao_loja ||  $valor_compra >= 100) {
			$valor_frete = 0;
			$recebeu_desconto_frete = true;
		}
	?>

	<h1>Detalhes do pedido</h1>
	<p> Possui cartao da loja ? <br>
		<?php
			if ($usuario_possui_cartao_loja) {
				echo 'SIM';
			}else {
				echo 'NÃO';
			}
		?>

	</p>

	<p>Valor da compra: <?= $valor_compra ?></p>

	<p>Recebeu desconto no frete ? <br>

		<?php
			if ($recebeu_desconto_frete) {
				echo 'SIM';
			}else {
				echo 'NÃO';
			}
		?>
	</p>

	<p>Valor do frete: <?= $valor_frete ?></p>

</body>
</html>