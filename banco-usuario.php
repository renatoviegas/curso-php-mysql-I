<?php 
	require_once("conecta.php");

	function buscaUsuario($conexao, $email, $senha) {
		
		$senhaMD5 = md5($senha);
		$email = mysqli_real_escape_string($conexao, $email);
		$resultado = mysqli_query($conexao, "select * from usuarios where email = '{$email}' and senha = '{$senhaMD5}'");	
		
		return mysqli_fetch_assoc($resultado);		
	}