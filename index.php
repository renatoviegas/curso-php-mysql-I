<?php 
	require_once("cabecalho.php"); 
	require_once("logica-usuario.php");
?>
	
	<h1>Bem Vindo!</h1>
				
	<?php if (usuarioEstaLogado()) : ?>
		<p class="text-success">Você está logado como <?=usuarioLogado()?></p>
		<p><a href="logout.php">Deslogar</a></p>
	<?php else : ?>
		<h2>Login</h2>

		<form action="login.php" method="post">
			<table class="table">
				<tr>
					<td><label for="email">Email</label></td>
					<td><input class="form-control" type="email" name="email" placeholder="Entre com seu email"></td>
				</tr>
				
				<tr>
					<td><label for="password">Senha</label></td>
					<td><input class="form-control" type="password" name="senha"></td>
				</tr>
				
				<tr>
					<td><button type="submit" class="btn btn-primary">Login</button></td>
				</tr>
			</table>
		</form>
	<?php endif; ?>
	
<?php require_once("rodape.php"); ?>