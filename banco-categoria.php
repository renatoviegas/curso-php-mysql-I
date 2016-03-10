<?php 
	function listaCategorias($conexao) {
		$lstCategoria = array();
		$resultado = mysqli_query($conexao, "select * from categorias");	
		
		while($categoria = mysqli_fetch_assoc($resultado)) { 
			array_push($lstCategoria, $categoria);
		}	
		
		return $lstCategoria;
	}
	
/*	function insereProduto($conexao, $nome, $preco, $descricao) {
		$sql = "insert into produtos (nome, preco, descricao) values ('{$nome}', {$preco}, '{$descricao}')";
		return mysqli_query($conexao, $sql);
	}
	
	function removeProduto($conexao, $id) {
		$sql = "delete from produtos where id = {$id}";
		return mysqli_query($conexao, $sql);
	} */