<?php 
	include("cabecalho.php"); 
	include("conecta.php");
	include("banco-produto.php");

	if (array_key_exists('removido', $_GET) && ($_GET['removido']==true)) :
?>	
	<p class="alert-success">Produto apagado com sucesso.</p>
<?php
	endif;
	$lstProdutos = listaProdutos($conexao);
?>
	
	<table class="table table-striped table-bordered">
	
	<?php
		foreach($lstProdutos as $produto) :
	?>
		<tr>
			<td><?=$produto['nome']?></td>
			<td><?=$produto['preco']?></td>
			<td><?=subStr($produto['descricao'], 0, 40)?></td>
			<td><?=$produto['categoria_nome']?></td>
			<td><a href="produto-altera-formulario.php?id=<?=$produto['id']?>" class="btn btn-primary">alterar</a></td>
			<td>
				<form action="remove-produto.php" method="post">
					<input name="id" type="hidden" value=<?=$produto['id']?>>
					<button class='btn btn-danger'>remover</button>
				</form>
			</td>
		</tr>
	
	<?php
		endforeach
	?>
	
	</table>

<?php include("rodape.php"); ?>