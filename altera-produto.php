<?php 
	include("cabecalho.php");
	include("banco-produto.php");
	include("conecta.php");
	
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
	?>
		<p class="alert-success">Produto <?= $nome ?>, <?= $preco ?> alterado com sucesso!</p>
	<?php
	} else {
		$msgErro = mysqli_error($conexao);
	?>
		<p class="alert-danger">Ocorreu um erro ao tentar alterar o produto <? = $nome ?>.</p>
		<p class="text-danger">Error: <?= $msgErro ?></p>
	<?php
	}

	include("rodape.php"); 
?>