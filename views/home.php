	<!-- Ícone das redes sociais e e-mail -->
	<div id="social_icone" class="whatsapp">
		<img src="<?php echo BASE_URL; ?>assets/images/whatsapp-banner-shadow.png"/>
		<a href="http://wa.me/5596991100451" target="_blank">
			<img style="margin-right: -48px;margin-top: -3px;" src="<?php echo BASE_URL; ?>assets/images/whatsapp-banner.png"/>
		</a>
	</div>
	<div id="social_icone" class="facebook">
		<img src="<?php echo BASE_URL; ?>assets/images/facebook-logo-shadow.png"/>
		<a href="https://web.facebook.com/pronorteimoveis/" target="_blank">
			<img style="margin-right: -48px;margin-top: -3px;" src="<?php echo BASE_URL; ?>assets/images/facebook-logo.png"/>
		</a>
	</div>
	<div id="social_icone" class="email">
		<img src="<?php echo BASE_URL; ?>assets/images/email_sombra.png"/>
		<a href="<?php echo BASE_URL; ?>home/email">
			<img style="margin-right: -48px;margin-top: -3px;" src="<?php echo BASE_URL; ?>assets/images/email.png"/>
		</a>
	</div>

	<!-- Imagem Principal do Site -->
	<div>
	    <img style="width: 100%;" src="<?php echo BASE_URL; ?>assets/images/condominio.jpeg">
	</div>
	
	<!-- Links para Simulações de Financiamentos no Bancos -->
	<div id="financiamentos" class="container">
		<label style="font-size: 18px; font-family: Arial; font-weight: bold; color: #FFFFFF; text-shadow: 1px 1px black;">Simulação de Financiamento <a href="#"><text style="font-size: 12px;">Voltar ao Início</text></a></label>
		<div class="row" style="background-color: #FFFFFF;font-size: 10px;padding: 10px;margin-left: 10px;margin-right: 10px;border-radius: 5px; font-weight: bold; text-decoration: underline;">
			<div class="col-sm" id="logo_financeiras">
				Simulador Caixa Econômica Federal<br>
				<a href="http://www8.caixa.gov.br/" target="_blank"><img src="<?php echo BASE_URL; ?>assets/images/simulador_caixa.jpg"></a>
			</div>
			<div class="col-sm" id="logo_financeiras">
				Simulador Banco do Brasil<br>
				<a href="https://www42.bb.com.br/portalbb/imobiliario/creditoimobiliario/simular,802,2250,2250.bbx" target="_blank"><img src="<?php echo BASE_URL; ?>assets/images/simulador_bb.jpg"></a>
			</div>
			<div class="col-sm" id="logo_financeiras">
				Simulador Santander<br>
				<a href="https://www.webcasas.com.br/" target="_blank"><img src="<?php echo BASE_URL; ?>assets/images/simulador_santander.jpg"></a>
			</div>
			<div class="col-sm" id="logo_financeiras">
				Simulador Bradesco<br>
				<a href="https://banco.bradesco/html/classic/produtos-servicos/emprestimo-e-financiamento/encontre-seu-credito/simuladores-imoveis.shtm" target="_blank"><img src="<?php echo BASE_URL; ?>assets/images/simulador_bradesco.jpg"></a>
			</div>
		</div><br>
	</div>

	<!-- Container de Imóveis a Venda -->
	<div id="imoveisavenda" class="container" style="text-align: center;">
		<h3 class="titulo" style="font-weight: bold;">IMÓVEIS A VENDA <a href="#"><text style="font-size: 12px;">Voltar ao Início</text></a></h3>
		<hr style="background-color: green;">
		<div class="row" >
			<div class="col-sm">
				<div class="card">
					<img style="height: 160px;" class="card-img-top" src="<?php echo BASE_URL; ?>assets/images/condominio.jpeg" alt="Card image"><span class="badge badge-danger">Lançamento</span>
					<div class="card-body">
						<h4 class="card-title">Residencial Brisa Sul <br> - Condomínio Fechado -</h4>
						<p style="text-align: left;" class="card-text">Casas de 64m² com:
						<ul style="text-align: left;">
							<li>2 quartos</li>
							<li>sala/cozinha/banheiro</li>
							<li>garagem</li>
							<li>área de serviço</li>
							<li>Pré-cadastro Aberto</li>
						</ul>
						<p id="texto_info" style="text-align: justify;">Residencial com acesso exclusivo a moradores, academia ao ar livre, parque infantil e área gourmet com churrasqueiras.<br>Localizado no Loteamento Conjunto Fazendinha Alfaville, na Zona Sul de Macapá, Rodovia do Polo, ao lado do Parque de Exposições (Expofeira).</p></p>
						<h5 style="text-decoration: underline; color: red; font-weight: bold;">Prestações a partir de R$ 800,00<br>Entrada Facilitada!<br>Use seu FGTS</h5>
						<a href="<?php echo BASE_URL; ?>home/email" class="btn btn-success">Solicite Contato</a>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="card">
					<img style="height: 160px;" class="card-img-top" src="<?php echo BASE_URL; ?>assets/images/fotoaereaalfaville.png" alt="Card image"><span class="badge badge-danger">Lotes em Promoção</span>
					<div class="card-body">
						<h4 class="card-title">Loteamento<br> Conjunto Fazendinha Alfaville <br>- Lotes -</h4>
						<p style="text-align: left; margin-top: 68px;" class="card-text">Lotes de 300m²:
						<ul style="text-align: left;">
							<li>Urbanizados</li>
							<li>Pronta Entrega</li>
							<li>10m x 30m</li>
						</ul>
						<p id="texto_info" style="text-align: justify;">Loteamento Conjunto Fazendinha Alfaville, na Zona Sul de Macapá, ao lado do Parque de Exposições (Expofeira).</p></p>
						<h5 style="text-decoration: underline; color: red; font-weight: bold; margin-top: 68px;"> De <text style="text-decoration: line-through;">R$ 75.000,00</text> por <br>R$ 60.000,00 à vista, ou<br>Financiamento com construção</h5>
						<a href="<?php echo BASE_URL; ?>home/email" class="btn btn-success">Solicite Contato</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="container" id="localizacao" style="text-align: center;">
		<h3>Localização do Loteamento Conjunto Fazendinha Alfaville</h3>
		<h5>Nosso escritório fica na entrada do loteamento, na rotatória do Distrito de Fazendinha</h5>
		<a href="#"><text style="font-size: 12px;">Voltar ao Início</text></a>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15959.270075812274!2d-51.10628325!3d-0.03631474999999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6398c0b48671b866!2sPronorte+Im%C3%B3veis+Ltda.!5e0!3m2!1spt-BR!2sbr!4v1557353507291!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>