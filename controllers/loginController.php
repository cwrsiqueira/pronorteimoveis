<meta charset="utf-8">
<?php

class loginController extends controller {

	public function index() {
			$dados = array();
		
			$u = new Usuarios();

			$login = '';
			$senha = '';

			if(isset($_POST['login']) && !empty($_POST['login'])) {
				$login = addslashes($_POST['login']);
				$senha = addslashes($_POST['senha']);

				if($u->login($login, $senha)) {
					header("Location: ".BASE_URL);
				} else {
					$this->loadTemplate('login', $dados);
					?>
					<div class="container">
						<div class="alert alert-danger alert-dismissible">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Falha!</strong> Login e/ou Senha não cadastrados.
						</div>
					</div>
					<?php
					exit;
				}
			}

			$dados['login'] = $login;
			$dados['senha'] = $senha;

			$this->loadTemplate('login', $dados);
			
	}

	public function sair() {

		session_start();
		unset($_SESSION['cLogin']);
		header("Location: ".BASE_URL);
	}
}
?>