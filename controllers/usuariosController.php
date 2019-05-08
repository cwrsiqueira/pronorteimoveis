<?php
class usuariosController extends controller {

	public function index() {
		$u = new Usuarios();

		if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])) {
			$sessao = $_SESSION['cLogin'];
			$u = new Usuarios();
			$usuario_atual = $u->getSessao($sessao);
			$dados['usuario_atual'] = $usuario_atual;
		} else {
		  header("location: ".BASE_URL);
		}

		$itens = array();
		if(isset($_POST['ordem']) && empty($_POST['ordem']) == false) {
			$ordem = addslashes($_POST['ordem']);
			$itens = $u->getUsuarios($ordem);
		} else {
			$ordem = 'nome';
			$itens = $u->getUsuarios($ordem);
		}

		$dados['ordem'] = $ordem;
		$dados['itens'] = $itens;

		$this->loadTemplate('usuarios', $dados);
	}

	public function cadastrar() {
		$dados = array();
		$u = new Usuarios();

		if (isset($_POST['nome']) && !empty($_POST['nome']) &&
			isset($_POST['email']) && !empty($_POST['email']) &&
			isset($_POST['login']) && !empty($_POST['login']) &&
			isset($_POST['senha']) && !empty($_POST['senha'])) {
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$login = addslashes($_POST['login']);
			$senha = addslashes($_POST['senha']);

			$id = $u->cadastrar($nome, $email, $login, $senha);

		}
		
		$this->loadTemplate('cadastro_de_usuario', $dados);
	}

	public function editar($id) {
		$info = array();
		$u = new Usuarios();

		$info = $u->getUsuariosId($id);

		if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])) {
			$sessao = $_SESSION['cLogin'];
			$u = new Usuarios();
			$usuario_atual = $u->getSessao($sessao);
			$dados['usuario_atual'] = $usuario_atual;
		} else {
		  header("location: ".BASE_URL);
		}

		$senha = '';
		
		if (isset($_POST['nome']) && !empty($_POST['nome']) &&
			isset($_POST['email']) && !empty($_POST['email']) &&
			isset($_POST['login']) && !empty($_POST['login']) &&
			isset($_POST['nivel']) && !empty($_POST['nivel'])) {
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$login = addslashes($_POST['login']);
			$senha = addslashes($_POST['senha']);
			$nivel = addslashes($_POST['nivel']);

			if ($info = $u->editar($nome, $email, $login, $senha, $nivel)) {
				echo "Usuário Alterado com Sucesso!";
			} else {
				echo "Usuário não alterado!";
			}		
		}

		$dados['info'] = $info;

		$this->loadTemplate('editar_usuario', $dados);
	}

	public function excluir($login) {

		$u = new Usuarios();

		if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])) {
			$sessao = $_SESSION['cLogin'];
			$u = new Usuarios();
			$usuario_atual = $u->getSessao($sessao);
			$dados['usuario_atual'] = $usuario_atual;
		} else {
		  header("location: ".BASE_URL);
		}

		if (!empty($login)) {
			$u->excluir($login);
		}

		header("Location: ".BASE_URL."usuarios");
	}





}