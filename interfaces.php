<title>PHP</title>
<style type="text/css">
	body{
   		font-family: Arial, Helvetica, sans-serif;
	}
</style>
<?php

	interface EquipamentoEletronicosInterface{
		public function ligar();

		public function desligar();
	}

	class Geladeira implements EquipamentoEletronicosInterface {
		public function ligar(){
			echo "Ligado";
		}

		public function desligar(){
			echo "Desligado";
		}

		public function abirPorta(){
			echo "Porta aberta";
		}
	}

	class Tv implements EquipamentoEletronicosInterface{
		public function ligar(){
			echo "Ligado";
		}

		public function desligar(){
			echo "Desligado";
		}

		public function trocarCanal(){
			echo "Trocar canal";
		}
	}	

	$geladeira = new Geladeira();
	$tv = new Tv();



?>