<?php 
	include("cabecalho.php");
	include("conecta.php");
	include("banco-categoria.php");
	
	$categorias = listaCategorias($conexao);
?>

	<h1>Formulário de Cadastro</h1>
	<form action="adiciona-produto.php" method="post">
		<table class="table form-cadastro">
			<tr>
				<td><label for="nome">Nome:</label></td>
				<td><input name="nome" type="text" class="form-control" autofocus></td>
			</tr>
		
			<tr>
				<td><label for="preco">Preço:</label></td>
				<td><input name="preco" type="number" class="form-control"></td>
			</tr>
			
			<tr>
				<td><label for="descricao">Descrição:</label></td>
				<td><textarea name="descricao" class="form-control"></textarea></td>
			</tr>

			<tr>
				<td></td>
				<td><input name="usado" type="checkbox" value="true">Usado</td>
			</tr>
			<tr>
				 <td><label for="categoria_id">Categoria:</label></td>
				 <td>
					<select name="categoria_id" class="form-control">
						<?php foreach($categorias as $categoria) : ?>
							<option value="<?=$categoria['id']?>"/><?=$categoria['nome']?></option>			
						<?php endforeach ?>
					</select>
				</td>
			</tr>
			
			<tr>
				<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
			</tr>
		</table>

	</form>
	
<?php include("rodape.php"); ?>