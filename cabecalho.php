<?php 
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	require_once("mostra-alerta.php");
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>Minha loja</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/loja.css" rel="stylesheet" />
</head>	

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Minha Loja</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="produto-formulario.php">Adiciona Produto</a></li>
					<li><a href="produto-lista.php">Produtos</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>
        </div> 
    </div>

    <div class="container">
        <div class="principal">
		
	<?php 
		mostraAlerta("success");
		mostraAlerta("danger");
	?>