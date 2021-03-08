<?php
	require_once('estados.php');	
?>

<!DOCTYPE html>
<html lang = 'pt-br'>
	<head>
		<meta charset='utf-8'>
        <meta name='author' content='Levi Alves'>
        <meta name='description' content='Cadastro'>
        <meta name='robots' content='index, nofollow'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>        
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
		<title>php</title>
		<link rel='stylesheet' type="text/css" href='_css/menu.css'>
		<link rel='stylesheet' type="text/css" href='_css/estilo.css'>
		<link rel='stylesheet' type="text/css" href='_css/cadastro_estilo.css'>		
	</head>
	<body>
		<header>
			<nav>		
				<!-- menu desktop -->
				<ul class="menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="lista.php">Listar</a></li>
					<li><a href="#">Cadastro</a></li>
				</ul>
				<!-- menu para aparelhos moveis -->
				<label class='lbl-menu' for='check'>&#8801;</label>
				<input type='checkbox' id='check'>
				<ul class="menu-movel">
					<li><a href="index.php">Home</a></li>
					<li><a href="lista.php">Listar</a></li>
					<li><a href="#">Cadastro</a></li>
				</ul>
			</nav>
		</header>

		<section class="cadastro conteiner">
			<form action="salvar.php" method="post">
				<fieldset class="">
					<legend>DADOS PESSOAIS</legend>				
					<label for="nome">Nome: </label>
					<input type="text" name="nome" id="nome" class="campo" required autofocus><br><br>
					<label for="cpf">CPF: </label>
					<input type="text" name="cpf" id="cpf" class="campo" required><br><br>					
					<label for="idade">Idade: </label>		
					<input type="number" name="idade" id="idade" class="campo" required>
				</fieldset>
				<fieldset class="">
					<legend>CONTATO</legend>
					<label for="email">Email: </label>
					<input type="text" name="email" id="email" class="campo" required><br><br>										
					<label for="telefone">Telefone: </label>
					<input type="text" name="telefone" id="telefone" class="campo" required>
				</fieldset>
				<fieldset>
					<legend>ENDEREÇO</legend>
					<label for="endereco">Endereço: </label>
					<input type="text" name="endereco" id="endereco" class="campo" required><br><br>
					<label for="cidade">Cidade: </label>
					<input type="text" name="cidade" id="cidade" class="campo" required><br><br>
					<label for="estado">Estado: </label>
					<select name="estado" id="estado">
						<?php
							foreach($estados as $i => $uf){
								echo"<option value='$i'>$uf</option>";
							}
						?>
					</select>
				</fieldset>
				<fieldset>
					<button type="submit" class="btn">Enviar</button>
					<button type="reset" class="btn">Limpar</button>
				</fieldset>
			</form>
		</section>
		

		<footer>			
		<footer>	
	</body>
</html>

