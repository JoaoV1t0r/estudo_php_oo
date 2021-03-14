<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP</title>
	<style type="text/css">
		body{
    		font-family: Arial, Helvetica, sans-serif;
		}
	</style>
</head>
<body>

	<?php

		class Pessoa {
			public $nome = null;

			function __construct($nome){
				$this->nome = $nome;
				echo "Objeto iniciado";
			}

			function __destruct(){
				echo "Objeto removido";
			}

			function __get($atributo){
				return $this->$atributo;
			}

			function correr(){
				return $this->__get('nome') . ' está correndo';
			}

		}
		
		$pessoa = new Pessoa('João');
		echo "<br>";
		echo $pessoa->__get('nome');
		echo "<br>";
		echo $pessoa->correr();
		echo "<br>";

		//unset($pessoa);

	?>
	

</body>
</html>