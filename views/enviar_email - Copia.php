<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
	
	$Mailer = new PHPMailer();
	
	//Define que será usado SMTP
	$Mailer->IsSMTP();
	
	//Enviar e-mail em HTML
	$Mailer->isHTML(true);
	
	//Aceitar carasteres especiais
	$Mailer->Charset = 'UTF-8';
	
	//Configurações
	$Mailer->SMTPAuth = true;
	$Mailer->SMTPSecure = 'ssl';
	
	//nome do servidor
	$Mailer->Host = 'br962.hostgator.com.br';
	//Porta de saida de e-mail 
	$Mailer->Port = 465;
	
	//Dados do e-mail de saida - autenticação
	$Mailer->Username = 'contato@pronorteimoveis.com.br';
	$Mailer->Password = '^D#$w59Ts=jS';
	
	//E-mail remetente (deve ser o mesmo de quem fez a autenticação)
	$Mailer->From = 'contato@pronorteimoveis.com.br';
	
	//Nome do Remetente
	$Mailer->FromName = 'Pronorte Imóveis';
	
	//Assunto da mensagem
	$Mailer->Subject = 'Titulo - Teste de envio de e-mail';
	
	//Corpo da Mensagem
	$Mailer->Body = 'Testando o envio de e-mail';
	
	//Corpo da mensagem em texto
	$Mailer->AltBody = 'Testando o envio de e-mail';
	
	//Destinatario 
	$Mailer->AddAddress('cwrsiqueira@msn.com');
	
	if($Mailer->Send()){
		echo "E-mail enviado com sucesso";
	}else{
		echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
	}
	
?>



