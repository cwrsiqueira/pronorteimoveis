<?php 

class Imoveis extends model {

	public function consultaImovelPorId($id, $id_empresa) {
		$dados = array();

		$sql = $this->db->prepare("
			SELECT *,
			(select nome from loteamentos where id = imoveis.id_loteamento)  as loteamento_nome,
			(select numero from contratos where id_imovel = imoveis.id) as contrato_numero,
			(select id_cliente from contratos where id_imovel = imoveis.id ) as cliente_id,
			(select nome from clientes where id = cliente_id) as cliente_nome
			FROM imoveis 
			WHERE id = :id AND id_empresa = :id_empresa");
		$sql->bindValue(':id', $id);
		$sql->bindValue(':id_empresa', $id_empresa);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$dados = $sql->fetch();
		}

		return $dados;
	}
}