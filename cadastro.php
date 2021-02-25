<?php
	require_once('estados.php');
	
?>

<!DOCTYPE html>
<html lang = 'pt-br'>
	<head>
		<meta charset='utf-8'>
        <meta name='author' content='Levi Alves'>
        <meta name='description' name='Cadastro'>
        <meta name='robots' content='index, nofollow'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>        
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
		<title>php</title>
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
					<li><a href="cadastro.php">Cadastro</a></li>
				</ul>
				<!-- menu para aparelhos moveis -->
				<label class='lbl-menu' for='check'>&#8801;</label>
				<input type='checkbox' id='check'>
				<ul class="menu-movel">
					<li><a href="index.php">Home</a></li>
					<li><a href="lista.php">Listar</a></li>
					<li><a href="cadastro.php">Cadastro</a></li>
				</ul>
			</nav>
		</header>

		<div class='conteiner'>
			<section class='principal'>
				<form method="post" action="salvar.php">

					<div class="cadastro">

						<div class="grup">
							<div class='elementos'>
							<label for="name">Nome: </label>
							<input type="text" name="nome" id="nome" 
									class="input-nome" placeholder="nome da pessoa" 
									value="">
							</div>

							<div class='elementos'>
							<label for="idade">Idade: </label>
							<input type="number" name="idade" id="idade" 
									class="input-idade" placeholder="idade" 
									value="">
							</div>

							<div class='elementos'>			
							<label for="cpf">CPF: </label>
							<input type="text" name="cpf" id="cpf" 
									class="input-cpf" placeholder="cpf" 
									value="">
							</div>													
						</div>					
						<div class="grup">								
						    <div class='elementos'>
							<label for="telefone">Telefone: </label>
							<input type="text" name="telefone" id="telefone" 
									class="input-telefone" placeholder="telefone" 
									value="">
							</div>
							
							<div class='elementos'>
							<label for="email">E-mail:</label>
							<input type="text" name="email" id="email"
								   class="input-email" placeholder="email"
								   value="">
							</div>													
						</div>
						<div class="grup">							
							<div class='elementos'>
							<label for="endereco">Endereço:</label>
							<input type="text" name="endereco" id="endereco"
								   class="input-endereco" placeholder="endereço"
								   value="">
							</div>

							<div class='elementos'>
							<label for="cidade">Cidade:</label>
							<input type="text" name="cidade" id="cidade"
								   class="input-cidade" placeholder="cidade"
								   value="">
							</div>

							<div class='elementos'>
							<label for="estado">Estado:</label>							
							<select name="estado" id="estado">
								<?php
									foreach($estados as $i => $uf){
										echo"<option value=\"$i\">$uf</option>";
									}
								?>
							</select>
							</div>
						</div>
						</br>
						<div class="grup">
							<button type="submit" class="btn">Salvar</button>
							<button type="reset" class="btn">Limpar</button>
						</div>
					</div>
																				
				</form>
				</br>

			</section>
		</div>
		<footer>			
		<footer>	
	</body>
</html>

