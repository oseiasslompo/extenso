<?php

require_once __DIR__ . '/vendor/autoload.php';

use Oseias\Extenso;

?>
<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<title>Extenso</title>
</head>

<body>
	<form action="#" method="post">
		<h1>Conversão de Número por Extenso</h1>
		<label for="vlr_ext">Digite o Valor:</label>
		<input type="text" id="vlr_ext" name="vlr_ext" autofocus>
		<input type="radio" id="real" name="moe_ext" value="BRL" checked>
		<label for="real">R$</label>
		<input type="radio" id="dolar" name="moe_ext" value="USD">
		<label for="dolar">U$</label><br><br>
		<input type="submit" name="submeter_frm" value="Converter">
		<input type="reset" name="limpar_frm" value="Limpar"><br><br>
	</form>
	<?php
	$submeter_click = filter_input(INPUT_POST, 'submeter_frm', FILTER_SANITIZE_STRING);
	$vlr_ext = filter_input(INPUT_POST, 'vlr_ext', FILTER_SANITIZE_STRING);
	$moe_ext = filter_input(INPUT_POST, 'moe_ext', FILTER_SANITIZE_STRING);
	if ($submeter_click) {

		$extenso = new Extenso;
		try {
			$extenso->setValue($vlr_ext);
			$extenso->setCurrency($moe_ext);
			$resExtenso = $extenso->getInFull($extenso);

			echo "$moe_ext $vlr_ext<br>";
			echo "$resExtenso<br>";

			var_dump($extenso);
		} catch (\Throwable $e) {
			echo "Mensagem: {$e->getMessage()}<br>";
			echo "Erro Nº: {$e->getCode()}<br>";
		}
	}
	?>
</body>

</html>