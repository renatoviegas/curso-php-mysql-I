<?php 
	include("cabecalho.php"); 
	include("conecta.php");
	
	$resultado = mysqli_query($conexao, "select * from produtos");
	
	while($produto = mysqli_fetch_assoc($resultado)) { 
		echo $produto['nome'] . ""; 
	}
	include("rodape.php"); 
?>