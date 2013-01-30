<?php
	if (isset($_POST["chave"])) {
		$chave = $_POST['chave'];
		$arquivo = fopen("arquivo.txt", "w");
		if($chave == "1"){
			fwrite($arquivo, "1");
		}else{
			fwrite($arquivo, "0");
		}		
		fclose($arquivo);
	}else{
		//$leitura = fopen("arquivo.txt", "r");
		$valor = file_get_contents("arquivo.txt");
		echo $valor;
	}

?>