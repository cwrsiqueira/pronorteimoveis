<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        <meta property="og:image" content="<?php echo BASE_URL; ?>assets/images/projeto62m.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/FAVICON.png" />
        <title>Pronorte</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
	</head>
	<body>
        <?php if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
            <p id="logado_alerta" style="background-color: red; font-size: 12px; font-family: Arial; text-align: center; color: #FFFFFF;">Ambiente Institucional - Uso exclusivo de funcionários cadastrados</p>
        <?php endif ?>
        <div class="container">
            <div class="row">
                <div id="logo" class="col-sm-4">
                    <a href="<?php echo BASE_URL; ?>">
                        <img id="logo_img" style="height: 150px; padding: 10px;" src="<?php echo BASE_URL; ?>assets/images/logopronorte.jpg">
                    </a>
                </div>

                <div class="col-sm-8" id="cabecalho2">

                    <nav class="navbar navbar-expand-sm" id="menu_geral">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#imoveisavenda">Imóveis a Venda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#financiamentos">Simulações de Financiamento</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#localizacao">Nossa Localização</a>
                            </li>
                        </ul>
                    </nav>

                    <div class="row d-flex flex-row-reverse" style="padding-right: 10px;" id="menu_phone">  
                        <div class="p-2">
                            <a href="http://wa.me/5596991100451" target="_blank">
                                <h4 id="menu_phone_item">(96) 99110-0451</h4>
                            </a>
                        </div>
                        <div class="p-2" id="icone_contatos">
                            <a href="http://wa.me/5596991100451" target="_blank"><img src="<?php echo BASE_URL; ?>assets/images/whatsapp-logo.png"></a>
                        </div>
                        <div class="p-2" id="icone_contatos2">
                            <img src="<?php echo BASE_URL; ?>assets/images/contato.png">
                        </div>  
                    </div>
                    <div class="row" style="justify-content: flex-end; font-weight: normal; font-size: 12px; margin-right: 5px;">
                        <div style="padding-bottom: 10px;" id="email_contato">
                            <a href="<?php echo BASE_URL; ?>home/email">contato@pronorteimoveis.com.br</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/js/jquery.mask.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
    <hr style="background-color: green;">
    <footer style="text-align: center; font-size: 12px; font-family: Arial;">
        <div>
            <p>CWRS Development +55 (96) 99110-0451 - <a href="<?php echo BASE_URL; ?>">Pronorte Inc. Com. e Imóveis Ltda.</a> - Todos os direitos reservados</p>
        </div>
        <div>Icons made by <a href="https://www.flaticon.com/authors/simpleicon" title="SimpleIcon">SimpleIcon</a> from <a href="https://www.flaticon.com/"                 title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"              title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
        <div>
            <p>Este site é melhor visualizado no Google Chrome</p>
        </div>
    </footer>
</html>