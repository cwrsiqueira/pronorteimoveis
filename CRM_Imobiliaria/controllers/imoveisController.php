<?php 

class imoveisController extends controller {

	private $usuario;
	private $empresa;

	public function __construct() {
		$u = new Usuarios();
		if (!$u->isLogged()) {
			header('Location: '.BASE_URL.'login');
		}
		$id_usuario = $_SESSION['isLogged'];
		$this->usuario = $u->getUsuario($id_usuario);
		$this->empresa = $u->getEmpresa($id_usuario);
	}

	public function index() {
		$dados = array();

		$dados['usuario'] = $this->usuario;
		$dados['empresa'] = $this->empresa;

		$this->loadTemplate('imoveis', $dados);
	}

	public function consulta($id) {
		$dados = array();
		$dados['usuario'] = $this->usuario;
		$dados['empresa'] = $this->empresa;

		$i = new Imoveis();
		$dados['imovel'] = $i->consultaImovelPorId($id, $this->empresa['id_empresa']);

		$this->loadTemplate('imovel_consulta', $dados);
	}

	public function editar($id) {
		$dados = array();
		$dados['usuario'] = $this->usuario;
		$dados['empresa'] = $this->empresa;

		$i = new Imoveis();
		$dados['imovel'] = $i->consultaImovelPorId($id, $this->empresa['id_empresa']);

		$this->loadTemplate('imovel_editar', $dados);
	}
}