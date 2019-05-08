<?php
class Usuarios extends model {

	public function getTotalUsuarios() {
		$sql = $this->db->query("SELECT COUNT(*) as c FROM usuarios");
		$row = $sql->fetch();

		return $row['c'];
	}

	public function cadastrar($nome, $email, $login, $senha) {
		$sql = $this->db->prepare("SELECT * FROM usuarios WHERE email = :email AND login = :login");
		$sql->bindValue(':email', $email);
		$sql->bindValue(':login', $login);
		$sql->execute();

		if($sql->rowCount() <= 0) {

			$sql = $this->db->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha, login = :login");
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':senha', md5($senha));
			$sql->bindValue(':login', $login);
			$sql->execute();

			return true;
		}
			return false;
	}

	public function login($login, $senha) {
		$sql = $this->db->prepare("SELECT * FROM usuarios WHERE login = :login AND senha = :senha");
		$sql->bindValue(":login", $login);
		$sql->bindValue(":senha", md5($senha));
		$sql->execute();

		if($sql->rowCount() > 0) {
			$dado = $sql->fetch();
			$_SESSION['cLogin'] = $dado['id'];
			return true;
		} else {
			return false;
		}

	}

	public function getSessao($sessao) {
		$sql = "SELECT * FROM usuarios WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $sessao);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$sessaoatual = $sql->fetch();

			return $sessaoatual;
		} else {
			return '';
		}
	}
}
?>