<hr style="background-color: green;">
<div class="container container-loged">
	<h1>Enviar E-mail</h1>
	<form method="POST">
		<div class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" class="form-control" />
		</div>
		<div class="form-group">
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email" class="form-control" />
		</div>
		<div class="form-group">
			<label for="msg">Mensagem:</label>
			<textarea name="msg" rows="5" id="msg" class="form-control" placeholder="Tire suas dúvidas, ou nos informe o melhor horário e telefone que entraremos em contato com você!"></textarea>
		</div>
		<input class="btn btn-success" type="submit" value="Enviar" class="btn btn-default" />
	</form>
</div>