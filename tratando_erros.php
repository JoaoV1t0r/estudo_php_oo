<?php

	try{
		echo "<h3>**Try**</h3>";

		//$sql = 'Select * from clientes';
		//mysql_query($sql); //ERRO
		if(!file_exists('require_arquivo.php')){
			throw new Exception('O arquivo deveria estar disponível as '. date('d/m/Y H:i:s') . 'horas, mas não estava então vamos seguir');

		}

	}catch(Error $e){
		echo "<h3>**Catch Erro**</h3>";
		echo '<p style="color: red">'. $e . '</p>';
	}catch(Exception $e){
		echo "<h3>**Catch Exception**</h3>";
		echo '<p style="color: red">'. $e . '</p>';
	}finally{
		echo "<h3>**Finally**</h3>";
	}

	
	
?>
<title>PHP</title>
<style type="text/css">
	body{
    	font-family: Arial, Helvetica, sans-serif;
	}
</style>