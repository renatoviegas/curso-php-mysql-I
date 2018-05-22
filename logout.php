<?php 
	require_once("logica-usuario.php");
	logout();
	$_SESSION["success"] = "Usuário deslogado com sucesso!";
	Header("Location: index.php");
	die();