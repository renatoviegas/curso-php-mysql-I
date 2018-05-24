<?php
	require_once("conecta.php");
	
	function listaProdutos($conexao) {
		$lstProduto = array();
		$resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome 
											   from produtos p left join categorias c
											     on c.id = p.categoria_id 
											 order by p.id");	
											 
	    $json_array = array();
		
		while($produto = mysqli_fetch_assoc($resultado)) { 
			$json_array[] = $produto;
			array_push($lstProduto, $produto);
		}	
		
		//echo json_encode($json_array);

		return $lstProduto;
	}
	
	function buscaProduto($conexao, $id) {
		$resultado = mysqli_query($conexao, "select * from produtos where id = {$id}");	
		
		return mysqli_fetch_assoc($resultado);		
	}
	
	function insereProduto($conexao, $nome, $preco, $descricao, $usado, $categoria_id) {
		
		$nome = mysqli_real_escape_string($conexao, $nome);
		$preco = mysqli_real_escape_string($conexao, $preco);
		$descricao = mysqli_real_escape_string($conexao, $descricao);
		$usado = mysqli_real_escape_string($conexao, $usado);
		$categoria_id = mysqli_real_escape_string($conexao, $categoria_id);
		
		$sql = "insert into produtos (nome, preco, descricao, usado, categoria_id) values ('{$nome}', {$preco}, '{$descricao}', {$usado}, {$categoria_id})";
		return mysqli_query($conexao, $sql);
	}
	
	function alteraProduto($conexao, $id, $nome, $preco, $descricao, $usado, $categoria_id) {
		
		$nome = mysqli_real_escape_string($conexao, $nome);
		$preco = mysqli_real_escape_string($conexao, $preco);
		$descricao = mysqli_real_escape_string($conexao, $descricao);
		$usado = mysqli_real_escape_string($conexao, $usado);
		$categoria_id = mysqli_real_escape_string($conexao, $categoria_id);
		
		$sql = "update produtos set nome = '{$nome}',
		                            descricao = '{$descricao}',
									preco = {$preco},
									usado = {$usado},
									categoria_id = {$categoria_id}
				 where id = {$id}"; 
		return mysqli_query($conexao, $sql);
	}
	
	function removeProduto($conexao, $id) {
		$sql = "delete from produtos where id = {$id}";
		return mysqli_query($conexao, $sql);
		//return true;
	}