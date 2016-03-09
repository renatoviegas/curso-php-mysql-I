<?php 
	include("cabecalho.php");
	include("banco-produto.php");
	include("conecta.php");
	
	$nome = $_GET['nome'];
	$preco = $_GET['preco'];
	
	if (insereProduto($conexao, $nome, $preco)) {
	?>
		<p class="alert-success">Produto <?= $nome ?>, <?= $preco ?> adicionado com sucesso!</p>
	<?php
	} else {
		$msgErro = mysqli_error($conexao);
	?>
		<p class="alert-danger">Ocorreu um erro ao tentar adicionar o produto <? = $nome ?>.</p>
		<p class="text-danger">Error: <?= $msgErro ?></p>
	<?php
	}

	include("rodape.php"); 
?>