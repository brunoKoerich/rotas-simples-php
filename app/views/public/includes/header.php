<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $this->data->title;?></title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="vendor/jquery/jquery-1.12.4.js"></script>
</head>
<body lang="pt-br">
	
	<!-- EXEMPLO SIMPLES DE MENU BOOTSTRAP -->
	<nav class="navbar center-block" style="background:#dddddd;">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<!-- CONFIGURE SEU ICONE MOBILE AQUI-->
					<span class="glyphicon glyphicon-plus"></span>
				</button>
				<a class="navbar-brand" href="#">WebSiteName</a>
			</div>
			<!-- ROTAS DAS PAGINAS -->
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="home">Home</a></li>
					<li><a href="empresa">Empresa</a></li>
					<li><a href="sobre">Sobre</a></li>
					<li><a href="showform">Formulário</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="login"><a href="principalAdm"><span class="glyphicon glyphicon-user"></span> Painel ADM</a></li>
				</ul>
			</div>
		</div>
	</nav>