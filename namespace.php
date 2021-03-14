<?php

	namespace ClienteA;

	interface CadastroInterface{
		public function salvar();
	}
	
	class Cliente implements CadastroInterface {
	    public $nome = 'João';

	    public function __get($value){
	    	return $this->$value;
	    }

	    public function salvar(){
	    	echo "Cliente Salvo";
	    }
	}

	namespace ClienteB;

	interface CadastroInterface{
		public function remover();
	}

	class Cliente implements CadastroInterface {
	    public $nome = 'Vitor';

	    public function __get($value){
	    	return $this->$value;
	    }

	    public function remover(){
	    	echo "Cliente removido";
	    }
	}

	$clientea = new \ClienteA\Cliente();
	$clientea->salvar();

	echo "<hr>";

	$clienteb = new \ClienteB\Cliente();
	$clienteb->remover();
	
	
?>
<title>PHP</title>
	<style type="text/css">
		body{
    		font-family: Arial, Helvetica, sans-serif;
		}
	</style>