<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<meta charset="utf-8">
        <meta name="author" content="Levi Alves">
        <meta name="description" content="Página Inicial">
        <meta name="robots" content="index, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>php</title>
		<link rel="stylesheet" type="text/css" href="_css/menu.css">
		<link rel="stylesheet" type="text/css" href="_css/estilo.css">
		<meta charset="utf-8">
	</head>
	<body>
		<header>
			<nav>		
				<!-- menu desktop -->
				<ul class="menu">
					<li><a href="#">Home</a></li>
					<li><a href="lista.php">Listar</a></li>
					<li><a href="cadastro.php">Cadastro</a></li>
				</ul>
				<!-- menu para aparelhos moveis -->
				<label class="lbl-menu" for="check">&#8801;</label>
				<input type="checkbox" id="check">
				<ul class="menu-movel">
					<li><a href="#">Home</a></li>
					<li><a href="lista.php">Listar</a></li>
					<li><a href="cadastro.php">Cadastro</a></li>
				</ul>
			</nav>
		</header>
		
		<section class="principal conteiner">
			<spam class="titulo">IMPORTATE</spam><br><br>
			<ul class="aviso-usuario">
				<li>O objetivo desse site de cadastro é aprender a manipular dados em sessão.</li>
				<li>Em "Cadatro" o úsuario pode adicionar alguns dados.</li>
				<li>Em "Listar" o úsuario pode modificar ou apagar um cdastro feito anteriormente.</li>
				<li>Os dados ficam salvos em sessão. Não foi utilizado banco de dados, ainda. Ou seja, ao final da sessão todos os dados serão apagados.</li>				
			</ul>		
		</section>
						
		<footer>			
		<footer>	
	</body>
</html>