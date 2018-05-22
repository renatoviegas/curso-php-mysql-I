<?php 
	require_once("cabecalho.php");
	require_once("banco-produto.php");
	
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$categoria_id = $_POST['categoria_id'];
	
	if (array_key_exists('usado', $_POST) && ($_POST['usado'] == true) ) {
		$usado = "true";
	} else {
		$usado = "false";
	}
	
	if (alteraProduto($conexao, $id, $nome, $preco, $descricao, $usado, $categoria_id)) {
		$_SESSION["success"] = "Produto alterado {$nome} com sucesso!";
		header("location: produto-lista.php");
	} else {
		$msgErro = mysqli_error($conexao);
		$_SESSION["danger"] = "Ocorreu um erro ao tentar alterar o produto. [Error: {$msgErro}]";
		header("location: " . $_SERVER['HTTP_REFERER']);
	}
	
	die();