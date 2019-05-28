<div class="container">
	<h1>Editar Imóvel</h1>

	<strong>Loteamento:</strong>
	<?php echo $imovel['loteamento_nome']; ?>

	<strong> - Quadra:</strong>
	<?php echo $imovel['quadra']; ?>

	<strong> - Lote:</strong>
	<?php echo $imovel['lote']; ?>

	<strong> - Proprietário:</strong>
	<?php echo $imovel['cliente_nome']; ?>

	<strong> - Contrato:</strong>
	<?php echo $imovel['contrato_numero']; ?><br><br>

	<form method="POST">
		<div class="form-group">
			<label for="registro_cri"><strong>Registro C.R.I.</strong></label>
			<input class="form-control" name="registro_cri" value="<?php echo $imovel['registro_cri']; ?>">

			<label><strong>Confrontações:</strong></label><br>
			<label for="frente">Frente:</label>
			<input class="form-control" name="frente" value="<?php echo $imovel['frente']; ?>">
			<label for="medida_frente">Medida Frente:</label>
			<input class="form-control" name="medida_frente" value="<?php echo $imovel['medida_frente']; ?>">

			<label for="fundo">Fundo:</label>
			<input class="form-control" name="fundo" value="<?php echo $imovel['fundo']; ?>">
			<label for="medida_fundo">Medida Fundo:</label>
			<input class="form-control" name="medida_fundo" value="<?php echo $imovel['medida_fundo']; ?>">

			<label for="lado_direito">Lado Direito:</label>
			<input class="form-control" name="lado_direito" value="<?php echo $imovel['lado_direito']; ?>">
			<label for="medida_lado_direito">Medida Lado Direito:</label>
			<input class="form-control" name="medida_lado_direito" value="<?php echo $imovel['medida_lado_direito']; ?>">

			<label for="lado_esquerdo">Lado Esquerdo:</label>
			<input class="form-control" name="lado_esquerdo" value="<?php echo $imovel['lado_esquerdo']; ?>">
			<label for="medida_lado_esquerdo">Medida Lado Esquerdo:</label>
			<input class="form-control" name="medida_lado_esquerdo" value="<?php echo $imovel['medida_lado_esquerdo']; ?>">

			<label for="url_localizacao">Localização:</label>
			<input class="form-control" name="url_localizacao"><br>

			<input class="form-control btn btn-secondary btn-sm" type="submit" value="Salvar Edição">

		</div>
	</form>

	<a href="<?php echo BASE_URL; ?>imoveis/consulta/<?php echo $imovel['id']; ?>"><button class="btn btn-secondary btn-sm">Voltar</button></a><br><br>
</div>