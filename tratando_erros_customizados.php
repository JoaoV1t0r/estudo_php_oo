<?php

	class MinhaExceptionCustomizada extends Exception{
		private $erro = '';

		public function __construct($erro){
			$this->erro = $erro;
		}
		public function exibirMensagemErroCustomizada(){
			//pode ser feita a customização do erro dando estilos a ele
			return $this->erro;
		}
	}

	try{
		throw new MinhaExceptionCustomizada('Erro de teste');

	}catch(MinhaExceptionCustomizada $e){
		echo $e->exibirMensagemErroCustomizada();
	}

?>
<title>PHP</title>
<style type="text/css">
	body{
    	font-family: Arial, Helvetica, sans-serif;
	}
</style>