<?php
	session_start();
	require_once("phpmailer/PHPMailerAutoload.php");
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];
	
	// Configurações do Email
	$mail = new PHPMailer();
	$mail -> isSMTP();
	$mail -> SMTPDebug = 0;
	$mail -> Host = "ssl://smtp.gmail.com:587";
	//$mail -> Port = 587;
	//$mail -> SMTPSecure = "ssl";
	$mail -> SMTPAuth = true;
	$mail -> Username = "usuario";
	$mail -> Password = "senha";
	
	// Informando a Origem e o destinatário
	$mail -> setFrom("contato@loja.com.br", "Loja");
	$mail -> addAddress("loja@loja.com.br");
	$mail -> Subject = "Contato da Loja";
	$mail -> msgHTML("<html><body>De: {$nome} </br> Email: {$email} </br> Mensagem: {$mensagem}</body></html>");
	$mail -> AltBody = "De: {$nome} \n Email: {$email} \n Mensagem: {$mensagem}";
	
	if ($mail -> send()) {
		$_SESSION["danger"] = "Email enviado com sucesso!";
		header("Location: index.php");
	} else {
		$_SESSION["success"] = "Erro ao tentar enviar email de contato." . $mail -> ErrorInfo;
		header("Location: contato.php");
	}
	
	die();