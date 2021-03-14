<?php
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

?>