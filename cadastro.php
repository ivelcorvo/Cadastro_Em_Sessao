<?php
	require_once('estados.php');
	
?>

<!DOCTYPE html>
<html lang = 'pt-br'>
	<head>
		<title>php</title>
		<link rel='stylesheet' type="text/css" href='_css/estilo.css'>
		<link rel='stylesheet' type="text/css" href='_css/cadastro_estilo.css'>
		<meta charset="utf-8">
	</head>
	<body>
		<div class='header'>
			<nav>		
				<ul class="menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="lista.php">Listar</a></li>
					<li><a href="cadastro.php">Cadastro</a></li>
				</ul>
			</nav>
		</div>

		<div class='conteiner'>
			<div class='principal'>
				<form method="post" action="salvar.php">

					<div class="cadastro">

						<div class="grup">

							<label for="name">Nome: </label>
							<input type="text" name="nome" id="nome" 
									class="input-nome" placeholder="nome da pessoa" 
									value="">

							<label for="idade">Idade: </label>
							<input type="text" name="idade" id="idade" 
									class="input-idade" placeholder="idade" 
									value="">

							<label for="cpf">CPF: </label>
							<input type="text" name="cpf" id="cpf" 
									class="input-cpf" placeholder="cpf" 
									value="">
						</div>

						<div class="grup">	


							<label for="telefone">Telefone: </label>
							<input type="text" name="telefone" id="telefone" 
									class="input-telefone" placeholder="telefone" 
									value="">
							
							<label for="email">E-mail:</label>
							<input type="text" name="email" id="email"
								   class="input-email" placeholder="email"
								   value="">													
						</div>
						<div class="grup">

							<label for="endereco">Endereço:</label>
							<input type="text" name="endereco" id="endereco"
								   class="input-endereco" placeholder="endereço"
								   value="">

							<label for="cidade">Cidade:</label>
							<input type="text" name="cidade" id="cidade"
								   class="input-cidade" placeholder="cidade"
								   value="">

							<label for="estado">Estado:</label>							
							<select name="estado" id="estado">
							<?php
								foreach($estados as $i => $uf){
									echo"<option value=\"$i\">$uf</option>";
								}
							?>
							</select>
						</div>
						</br>
						<div class="grup">
							<button type="submit" class="btn">Salvar</button>
							<button type="reset" class="btn">Limpar</button>
						</div>
					</div>
										
										
				</form>
				</br>

			</div>
		</div>
		<div class='footer'>
			<h2> </h2>
		</div>	
	</body>
</html>



<!-- 

					<table class="tb-cadastro" border="0">
						<tr>
							<td><label for="name">Nome: </label></td>
							<td><input type="text" name="nome" id="nome" 
									   class="input-text" placeholder="nome da pessoa" 
									   value=""> </td>
							<td><label for="telefone">Telefone: </label></td>
							<td><input type="text" nome="telefone" id="telefone"
									   class=".input-telefone" placeholder="telefone da pessoa" 
									   value=""></td>
						</tr>
						<tr>
							<td><label for="idade">Idade: </label></td>
							<td><input type="number" nome="idade" id="idade"
									   class="input-number" placeholder="idade" 
									   value="" ></td>	
							<td><label for="idade">Idade: </label></td>
							<td><input type="number" nome="idade" id="idade"
									   class="input-number" placeholder="idade" 
									   value="" ></td>										   					  	
						</tr>
					</table>


-->