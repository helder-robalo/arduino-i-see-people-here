<!DOCTYPE HTML>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Título da página</title>
		<meta name="description" content="Descrição do seu projeto."/>
		<link rel="stylesheet" type="text/css" media="screen" href="css/style.css"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.png">
		<script src="js/jquery-1.9.0.min.js"></script>
		<script src="js/functions.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<div class="logo"></div>
			<div class="introduce">
				<p>Is there anyone here?</p>
			</div>
			<span class="light" style="display: none;"></span>
			<span class="darkness"></span>
			<div class="footer">
				<p>Este projeto é um experimento com Arduino, Python, PHP e um PC ou MAC.</p>
				<p>O objetivo  é mostrar um objeto gráfico sinalizando que a luz está ligada em um ambiente usandoum sensor LDR.</p>
				<p>O sensor LDR envia através do arduino a quantidade de luz capturada, o arduino interpreta se o valor está no nível de aceitaçao mínima de luminosidade para ambiente de trabalho.</p>
				<p>A aplicação Python lê o valor enviado na porta serial e envia ao servidor web a informação de luz do ambiente.</p>
			</div>
		</div>
	</body>
</html>