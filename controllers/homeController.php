<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
</html>
<?php

class homeController extends controller {

	public function index() {
		$dados = array();

		if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])) {
			$sessao = $_SESSION['cLogin'];
			$u = new Usuarios();
			$usuario_atual = $u->getSessao($sessao);
			$dados['usuario_atual'] = $usuario_atual;
		}

		$this->loadTemplate('home', $dados);
	}

	public function email() {
		$dados = array();

		if (isset($_POST['email']) && !empty($_POST['email'])) {
			$email = addslashes($_POST['email']);
			$nome = addslashes($_POST['nome']);
			$msg = addslashes($_POST['msg']); 
			
			?><meta charset="utf-8"><?php
			
			$headers = "From: ".$email."\r\n".
			"Reply-To: pronorteimoveis@hotmail.com"."\r\n".
			"X-Mailer: PHP/".phpversion();

			mail('contato@pronorteimoveis.com.br', 'Solicitação de Informações', $msg, $headers);
			mail('pronorteimoveis@hotmail.com', 'Solicitação de Informações', $msg, $headers);


			$dados['nome'] = $nome;
			$dados['email'] = $email;
			$this->loadTemplate('home', $dados);
			$this->loadView('modalEmail', $dados);
			exit;
		}

		$this->loadTemplate('email', $dados);
	}
}