<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<meta charset="utf-8">
        <meta name="author" content="Levi Alves">
        <meta name="description" content="Página Inicial">
        <meta name="robots" content="index, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Cad - Home</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="shortcut icon" type="imagem/png" href="icon/cadastro.png">
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
				<!-- menu mobile -->
				<label class="lbl-mobile" for="check">&#8801;</label>
                <input type="checkbox" id="check">
				<ul class="menu-mobile">
					<li><a href="#">Home</a></li>
					<li><a href="lista.php">Listar</a></li>
					<li><a href="cadastro.php">Cadastro</a></li>
				</ul>
			</nav>
		</header>
		
		<main>
			<section class="principal conteiner">
				<blockquote class="aviso-usuario">
					<spam class="titulo">IMPORTATE</spam><br><br>
					<ul>
						<li>O objetivo desse site de cadastro é aprender a manipular dados em sessão.</li>
						<li>Em "Cadastro" o usuário pode adicionar alguns dados.</li>
						<li>Em "Listar" o usuário pode modificar ou apagar um cadastro feito anteriormente.</li>
						<li>Os dados ficam salvos em sessão. Não foi utilizado banco de dados, ainda. Ou seja, ao final da sessão todos os dados serão apagados.</li>				
					</ul>		
				</blockquote>
			</section>
		</main>
						
		<footer>			
		</footer>		
	</body>
</html>