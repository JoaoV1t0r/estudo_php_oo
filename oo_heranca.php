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


		class Veiculo{
			public $placa = null;
			public $cor = null;

			function acelerar(){
				echo "Acelerar";
			}

			function freiar(){
				echo "Freiar";
			}
		}

		class Carro extends Veiculo{
			public $teto_solar = true;

			function __construct($placa,$cor){
				$this->placa = $placa;
				$this->cor = $cor;
			}

			function abrirTetoSolar(){
				if ($teto_solar) {
					echo "Abrir Teto Solar";
				}else{
					echo "Não existe teto solar";
				}
			}

			function alterarPosicaoVolante(){
				echo "Alterar Posição volante";
			}
		}


		class Moto extends Veiculo{
			public $guidao = true;

			function __construct($placa,$cor){
				$this->placa = $placa;
				$this->cor = $cor;
			}

			function empinar(){
				echo "Empinar";
			}
		}

		$carro = new Carro('ABC1234','Azul');

		$moto = new Moto('DEF5678','Preta');

		print_r($carro);
		print_r($moto);

	?>
	

</body>
</html>