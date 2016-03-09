<?php 
	function listaProdutos($conexao) {
		$lstProduto = array();
		$resultado = mysqli_query($conexao, "select * from produtos");	
		
		while($produto = mysqli_fetch_assoc($resultado)) { 
			array_push($lstProduto, $produto);
		}	
		
		return $lstProduto;
	}
	
	function insereProduto($conexao, $nome, $preco, $descricao) {
		$sql = "insert into produtos (nome, preco, descricao) values ('{$nome}', {$preco}, '{$descricao}')";
		return mysqli_query($conexao, $sql);
	}
	
	function removeProduto($conexao, $id) {
		$sql = "delete from produtos where id = {$id}";
		return mysqli_query($conexao, $sql);
	}