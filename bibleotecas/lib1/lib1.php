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


?>