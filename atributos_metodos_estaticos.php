<title>PHP</title>
<style type="text/css">
	body{
   		font-family: Arial, Helvetica, sans-serif;
	}
</style>
<?php

	class Exemplo {
		public static $atributo1 = 'Atributo estático';
		public $atributo2 = 'Atributo normal' ;

		public static function metodo1(){
			echo "Método estático";
		}

		public function metodo2(){
			echo "Método normal";
		}
	}

	//$x = new Exemplo();

	echo Exemplo::$atributo1;
	echo "<br>";
	Exemplo::metodo1();
	

?>