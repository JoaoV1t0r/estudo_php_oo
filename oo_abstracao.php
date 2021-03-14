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

		class Funcionario{
			//atributos
			public $nome = null;
			public $telefone = null;
			public $numFilhos = null;
			public $cargo = null;
			public $salario = null;

			//getters e setters
			function __set($atributo, $valor){
				$this->$atributo = $valor;
			}
			function __get($atributo){
				return $this->$atributo;
			}

			//metodos
			function resumoCadFunc(){
				return $this->__get('nome') ." possui" . $this->__get('numFilhos') . " filho(s) e seu número de telefone é " . $this->__get('telefone');
			}
			function modificarNumFilhos($novoNumFilhos){
				$this->numFilhos = $novoNumFilhos;
			}
		}

		$funcionario = new Funcionario();
		$funcionario->__set('nome','João');
		$funcionario->__set('numFilhos','0');
		$funcionario->__set('telefone','(85) 98526-3097');
		echo $funcionario->resumoCadFunc();
		echo "<br>";
		

	?>
	

</body>
</html>
