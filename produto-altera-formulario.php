
<?php 
	include("cabecalho.php");
	include("conecta.php");
	include("banco-produto.php");
	include("banco-categoria.php");
	
	$categorias = listaCategorias($conexao);
	$id = $_GET['id'];
	
	$produto = buscaProduto($conexao, $id);	
	$usado_checked = $produto['usado'] ? "checked" : "";
	 
?>

	<h1>Alterando o Produto</h1>
	<form action="altera-produto.php" method="post">
		<input name="id" type="hidden" value=<?=$id?>>
		<table class="table form-cadastro">
			<tr>
				<td><label for="nome">Nome:</label></td>
				<td><input name="nome" type="text" class="form-control" autofocus value=<?=$produto['nome']?>></td>
			</tr>
		
			<tr>
				<td><label for="preco">Preço:</label></td>
				<td><input name="preco" type="number" class="form-control" value=<?=$produto['preco']?>></td>
			</tr>
			
			<tr>
				<td><label for="descricao">Descrição:</label></td>
				<td><textarea name="descricao" class="form-control"><?=$produto['descricao']?></textarea></td>
			</tr>

			<tr>
				<td></td>
				<td><input name="usado" type="checkbox" value="true" <?=$usado_checked?>>Usado</td>
			</tr>
			<tr>
				 <td><label for="categoria_id">Categoria:</label></td>
				 <td>
					<select name="categoria_id" class="form-control">
						<?php foreach($categorias as $categoria) : 
							$selected = ($categoria['id'] == $produto['categoria_id']) ? "selected" : ""; 
						?>	
							<option value="<?=$categoria['id']?>" <?=$selected?>/><?=$categoria['nome']?></option>			
						<?php endforeach ?>
					</select>
				</td>
			</tr>
			
			<tr>
				<td><button class="btn btn-primary" type="submit">Alterar</button></td>
			</tr>
		</table>

	</form>
	
<?php include("rodape.php"); ?>