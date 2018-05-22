<?php 
	require_once("cabecalho.php");
	require_once("banco-produto.php");
	require_once("logica-usuario.php");
	
	verificaUsuario();
	
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$categoria_id = $_POST['categoria_id'];
	
	if (array_key_exists('usado', $_POST) && ($_POST['usado'] == true) ) {
		$usado = "true";
	} else {
		$usado = "false";
	}
	
	if (insereProduto($conexao, $nome, $preco, $descricao, $usado, $categoria_id)) {
		$_SESSION["success"] = "Produto {$nome} adicionado com sucesso!";
		header("location: produto-lista.php");
	} else {
		$msgErro = mysqli_error($conexao);
		$_SESSION["danger"] = "Ocorreu um erro ao tentar adicionar o produto {$nome}. [Error: {$msgErro}]";
		header("location: produto-formulario.php");
	}
	
	die();