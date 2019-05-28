<div class="container">
	<h1>Consulta Imóvel</h1>

	<strong>Loteamento:</strong>
	<?php echo $imovel['loteamento_nome']; ?>

	<strong> - Quadra:</strong>
	<?php echo $imovel['quadra']; ?>

	<strong> - Lote:</strong>
	<?php echo $imovel['lote']; ?>

	<strong> - Registro C.R.I.:</strong><br>
	<?php echo $imovel['registro_cri']; ?><br>

	<strong>Controntações:</strong><br>
	Frente: <?php echo $imovel['frente']; ?> - Medida: <?php echo $imovel['medida_frente']; ?>
	 - Fundo: <?php echo $imovel['fundo']; ?> - Medida: <?php echo $imovel['medida_fundo']; ?>
	 - Lado Direito: <?php echo $imovel['lado_direito']; ?> - Medida: <?php echo $imovel['medida_lado_direito']; ?>
	 - Lado Esquerdo: <?php echo $imovel['lado_esquerdo']; ?> - Medida: <?php echo $imovel['medida_lado_esquerdo']; ?><br><br>

	<strong>Proprietário:</strong>
	<?php echo $imovel['cliente_nome']; ?>

	<strong> - Contrato:</strong>
	<?php echo $imovel['contrato_numero']; ?><br><br>

	<a href="<?php echo BASE_URL; ?>imoveis/editar/<?php echo $imovel['id']; ?>"><button class="btn btn-secondary btn-sm">Editar</button></a>
	<a href="<?php echo BASE_URL; ?>Registro"><button class="btn btn-secondary btn-sm">Voltar</button></a><br><br>

	<strong>Localização:</strong><br>
	<?php echo $imovel['url_localizacao']; ?><br><br>
</div>