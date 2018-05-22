<?php 
	require_once("cabecalho.php");
?>
	<h1>Contato</h1>
	
	<form action="envia-contato.php" method="post">
			
		<table class="table form-cadastro">
			<tr>
				<td><label for="nome">Nome:</label></td>
				<td><input name="nome" type="text" class="form-control" autofocus></td>
			</tr>
		
			<tr>
				<td><label for="email">Email:</label></td>
				<td><input name="email" type="email" class="form-control"></td>
			</tr>
			
			<tr>
				<td><label for="mensagem">Mensagem:</label></td>
				<td><textarea name="mensagem" class="form-control"></textarea></td>
			</tr>

			<tr>
				<td><button class="btn btn-primary" type="submit">Enviar</button></td>
			</tr>
		</table>
	</form>
	
<?php require_once("rodape.php"); ?>