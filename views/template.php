<!DOCTYPE html>
<html>
	<head>
		<title>Direito na Mão</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/topo-style.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/rodape-syle.css" type="text/css" />
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/acao.js"></script>
	</head>
	<body>
	<header>
		<div class="navbar">
			<div class="logo"><a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/images/logo1.png"></a></div>
			<div class="btu">
				<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/btu-style.css" type="text/css" />

				<input id="hamburguer" type="checkbox" style="display: none;"/>
				<label for="hamburguer" >
					<div class="hamburguer active"></div>
				</label>
			</div>
			<ul class="menu">
				<li><a href="#">Outros</a></li>
				<li><a href="#">Constiruição</a></li>
				<li><a href="#">Códigos</a></li>
				<li><a href="#">Estatutos</a></li>
				<li><a href="#">Súmulas</a></li>
			</ul>
		</div>
	</header>
	<div class="col-sm-9"><?php $this->loadViewInTemplate($viewName, $viewData); ?></div>
	<footer>
		<div class="rodape">
			<div class="projeto">
				<h2>O Projeto</h1>
					<ul>
						<li><a href="<?php echo BASE_URL; ?>">Início</a></li>
						<li><a href="#">Vade Mecum Online</a></li>
					</ul>
			</div>
			<div class="donate">
				<h2>Gostou do projeto?</h3>
				<p>Ajude-nos com qualquer quantia</p>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_donations" />
				<input type="hidden" name="business" value="4QY2XNFV6G872" />
				<input type="hidden" name="item_name" value="Obrigado! " />
				<input type="hidden" name="currency_code" value="BRL" />
				<input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Faça doações com o botão do PayPal" />
				<img alt="" border="0" src="https://www.paypal.com/pt_BR/i/scr/pixel.gif" width="1" height="1" />
				</form>
			</div>
			<div class="sobre">
				<h2>Sobre nós</h2>
					<ul>
						<li><a href="#">Quem somos</a></li>
						<li><a href="#">Política de Privacidade</a></li>
					</ul>
			</div>
		</div>
		<div class="cop">
			<p>Copyright © 2020 Projeto Vade Mecum. Todos os direitos reservados.</p>
		</div>
	</footer>
	</body>
</html>