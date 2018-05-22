<?php 
	require_once("conecta.php");
	
	function listaCategorias($conexao) {
		$lstCategoria = array();
		$resultado = mysqli_query($conexao, "select * from categorias");	
		
		while($categoria = mysqli_fetch_assoc($resultado)) { 
			array_push($lstCategoria, $categoria);
		}	
		
		return $lstCategoria;
	}