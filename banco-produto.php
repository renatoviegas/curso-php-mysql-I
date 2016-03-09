<?php 
	function listaProdutos($conexao) {
		$lstProduto = array();
		$resultado = mysqli_query($conexao, "select * from produtos");	
		
		while($produto = mysqli_fetch_assoc($resultado)) { 
			array_push($lstProduto, $produto);
		}	
		
		return $lstProduto;
	}
	
	function insereProduto($conexao, $nome, $preco) {
		$sql = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
		return mysqli_query($conexao, $sql);
	}
	
	function removeProduto($conexao, $id) {
		$sql = "delete from produtos where id = {$id}";
		return mysqli_query($conexao, $sql);
	}