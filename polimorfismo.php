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

		function trocarMarcha(){
			echo "Desengatar embreagem com o pé e engatar marcha com a mão";
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

		function trocarMarcha(){
			echo "Desengatar embreagem com am mão e engatar marcha com o pé		";
		}

	}

	$carro = new Carro('ABC1234','Azul');

	$moto = new Moto('DEF5678','Preta');
	
	$carro->trocarMarcha();
	echo "<br>";
	$moto->trocarMarcha();

?>