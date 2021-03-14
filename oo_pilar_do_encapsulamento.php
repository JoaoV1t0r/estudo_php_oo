<?php

class Pai {
	private $nome;
	protected $sobrenome = 'Silva';
	public $humor = 'Frio e Calculista';

	public function __get($value){
		return $this->$value;
	}

	public function __set($value,$newValue){
		if(strlen($newValue >= 3)){
			$this->$value = $newValue;
		}else{
			echo "Nome inválido";
		}
	}
/*
	private function __construct($nome,$sobrenome,$humor){
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->humor = $humor;

	}
*/
	private function executarMania(){
		echo "Executa mania Pai";
	}

	protected function responder(){
		echo "Rensponde Pai";
	}

	public function executarAcao(){
		$this->executarMania();
		echo "<br>";
		$this->responder();
	} 
}

class Filho extends Pai{
	private $nome = 'João';

	public function __construct(){
		echo "<pre>";
		print_r(get_class_methods($this));
		echo "</pre>";
	}

	public function __get($value){
		return $this->$value;
	}

	public function __set($value,$newValue){
		if(strlen($newValue >= 3)){
			$this->$value = $newValue;
		}else{
			echo "Nome inválido";
		}
	}
}

$filho = new Filho();

echo "<pre>";
print_r($filho);
echo "</pre>";

$filho->nome = 'Vitor';
echo $filho->executarAcao();




/*
$pai = new Pai('João','Silva','Frio e Calculista');

echo "<pre>";
print_r($pai);
echo "</pre>";
echo $pai->nome;
//echo "<br>";
$pai->nome = 'Vitor';
echo'<br>';
echo $pai->nome;
echo'<br>';
$pai->executarAcao();
*/

?>