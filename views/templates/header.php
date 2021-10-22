<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.es.gov.br/fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/css.css" media="all">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bevan&display=swap" rel="stylesheet">
	<link data-minify="1" rel='stylesheet' id='piizalian-style-css' href='https://demothemedh.b-cdn.net/piizalian/wp-content/cache/min/1/piizalian/wp-content/themes/piizalian/style-7ab3f17b8cce53dfd4fa479615803770.css' media='all'>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<title>Pizzaria Irmãs Wilson</title>
</head>

<body class="body-menu">
	<header class="p-2" style="background-color: #000000;">
		<div class="container">
			<div class="cont">
				<div class="posMenu">
					<span class="fontHeader"> <i aria-hidden="true" class="piizalian-icon- piizalian-icon-delivery-2" style="font-size: 18px;"></i> Call and Order:</span>
					<a href="#" class="link"><b><span>+1 718-904-4450</span></b></a>
					<li class="dropdown">
						<a href="" style="color: #FFFFFF; text-decoration:none" id="dropdownLoc" class="fontHeader">New York <i class="fa fa-angle-down" aria-hidden="true"></i></a>
						<ui class="dropdown-menu" aria-labelledby="dropdownLoc">
							<a class="dropdown-item menuLoc" href="#">New York</a>
							<a class="dropdown-item menuLoc" href="#">Los Angeles</a>
							<a class="dropdown-item menuLoc" href="#">Chicago</a>
						</ui>
					</li>
				</div>
				<div class="posMenu">
					<span class="fontHeader"><i aria-hidden="true" class="piizalian-icon- piizalian-icon-location" style="font-size: 18px;"></i> Corso Itali Aa Naples, Az 85022</span>
				</div>
			</div>
			<hr style="color: #FFFFFF;">
			<header class="posMenuHeader">
				<a href="https://demo.leebrosus.com/piizalian/">
					<img src="assets/imagens/piizalian-logo.svg">
				</a>
				<div class="menuCenter">
					<?php
					if (isset($_SESSION['usuario'])) {
					?>
						<a href="?rota=Logout">
							<!-- <i aria-hidden="true" class="piizalian-icon piizalian-icon-user fontIcons22"></i> -->
							Logout
						</a>
					<?php
					}else{
					?>
					<a href="?rota=cadastroUsuario">
						<!-- <i aria-hidden="true" class="piizalian-icon piizalian-icon-user fontIcons22"></i> -->
						Cadastro
					</a>
					<a href="?rota=Login">
						<!-- <i aria-hidden="true" class="piizalian-icon piizalian-icon-user fontIcons22"></i> -->
						Login
					</a>
					<?php
					}
					?>
					
					<div class="fontIcons22">
						<div class="site-header-wishlist woosw-check">
						</div>
					</div>
				</div>
				<div class="menuCenter">
					<a href="cart.html" title="View your shopping cart" class="box">
						<i aria-hidden="true" class="piizalian-icon- piizalian-icon-cart" style="color: #000000; font-size:23px; align-self: center;"></i>
						<span class="font16600">0 itens: $0.00</span>
					</a>
				</div>
			</header>
		</div>
	</header>