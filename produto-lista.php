<?php 
	include("cabecalho.php"); 
	include("conecta.php");
	include("banco-produto.php");

	if (array_key_exists('removido', $_GET) && ($_GET['removido']==true)) {
	?>
	
	<p class="alert-success">Produto apagado com sucesso.</p>

	<?php
		}
	
	$lstProdutos = listaProdutos($conexao);
?>
	
	<table class="table table-striped table-bordered">
	
	<?php
		foreach($lstProdutos as $produto) :
	?>
		<tr>
			<td><?=$produto['nome']?></td>
			<td><?=$produto['preco']?></td>
			<td><a href="remove-produto.php?id=<?=$produto['id']?>" class='btn btn-danger'>remover</a>
		</tr>
	
	<?php
		endforeach
	?>
	
	</table>

<?php include("rodape.php"); ?>