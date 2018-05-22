<?php 
	require_once("cabecalho.php");
	require_once("banco-produto.php");
	require_once("banco-categoria.php");
	
	$categorias = listaCategorias($conexao);
	$id = $_GET['id'];
	
	$produto = buscaProduto($conexao, $id);	
	$usado_checked = $produto['usado'] ? "checked" : "";
?>

	<h1>Alterando o Produto</h1>
	<form action="altera-produto.php" method="post">
		
		<input name="id" type="hidden" value=<?=$id?>>
		
		<?php require_once("produto-formulario-base.php"); ?>
			
			<tr>
				<td><button class="btn btn-primary" type="submit">Alterar</button></td>
			</tr>
		</table>
	</form>
	
<?php require_once("rodape.php"); ?>