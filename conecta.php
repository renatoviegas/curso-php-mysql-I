<?php 
	require_once("config.php");
	
	if (isProduction()) {
    	$conexao = mysqli_connect('mysql.hostinger.com.br', 'u506854929_loja', 'lojaloja', 'u506854929_loja');		
	} else {
		$conexao = mysqli_connect('localhost', 'root', '', 'loja');
	}

	mysqli_set_charset($conexao, 'utf8');