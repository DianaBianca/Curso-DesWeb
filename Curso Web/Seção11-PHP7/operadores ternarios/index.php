<!DOCTYPE html>
<html>
<head>
	<title>operador ternario</title>
	<meta charset="utf-8">
</head>
<body>
	<?php  

		$usuario_possui_cartao_loja = true;
		$valor_compra = 450;
		$valor_frete = 50;
		$recebeu_desconto_frete = true;

		$valor_frete_auxiliar = $usuario_possui_cartao_loja &&  $valor_compra >= 400 ? 0 : ($usuario_possui_cartao_loja &&  $valor_compra >= 300 ? 10 : ($usuario_possui_cartao_loja &&  $valor_compra >= 100 ? 25 : ($valor_frete)));
		$recebeu_desconto_frete = $valor_frete != $valor_frete_auxiliar ? true : false;

		$valor_frete = $valor_frete_auxiliar;

/*
		if ($usuario_possui_cartao_loja &&  $valor_compra >= 400) {
			$valor_frete = 0;

		}else if ($usuario_possui_cartao_loja &&  $valor_compra >= 300) {
			$valor_frete = 10;

		}else if ($usuario_possui_cartao_loja &&  $valor_compra >= 100) {
			$valor_frete = 25;
			
		}else {
			echo 'compre mais para ganhar frete grátis :)' ;
			$recebeu_desconto_frete = false;
		}
		*/
	?>

	<h1>Detalhes do pedido</h1>
	<p> Possui cartao da loja ? <br>
		
		<?= $usuario_possui_cartao_loja ? 'SIM' :  'NÃO'; ?>		

	</p>

	<p>Valor da compra: <?= $valor_compra ?></p>

	<p>Recebeu desconto no frete ? <br>

		<?= $teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO' ?>			
	</p>

	<p>Valor do frete: <?= $valor_frete ?></p>

</body>
</html>