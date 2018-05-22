<?php 
	require_once("banco-produto.php");
	
	$id = $_POST['id'];
		
	if (removeProduto($conexao, $id)) {
		session_start();
		$_SESSION["success"] = "Produto removido com sucesso!";
		header("location: produto-lista.php");
		die();
	}