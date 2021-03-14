<?php

	require "./bibleotecas/lib1/lib1.php";
	require "./bibleotecas/lib2/lib2.php";

	use ClienteA\Cliente as ClienteA;
	use ClienteB\Cliente as ClienteB;



	$cliente = new ClienteA();
	echo $cliente->nome;
	
	
?>
<title>PHP</title>
<style type="text/css">
	body{
    	font-family: Arial, Helvetica, sans-serif;
	}
</style>