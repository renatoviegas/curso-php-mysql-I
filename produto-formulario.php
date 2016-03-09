<?php include("cabecalho.php"); ?>

	<h1>Formulário de Cadastro</h1>
	<form action="adiciona-produto.php" method="post">
		
		<table class="table">
			<tr>
				<td><label for="nome">Nome:</label></td>
				<td><input name="nome" type="text" class="form-control"></td>
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
				<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
			</tr>
	</form>
	
<?php include("rodape.php"); ?>