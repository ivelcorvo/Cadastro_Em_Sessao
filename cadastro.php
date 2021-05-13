<?php
	session_start();
	// var_dump($_GET["id"]);
	$id       = "";
	$nome     = "";
	$cpf      = "";
	$idade    = "";
	$email    = "";
	$telefone = "";
	$endereco = "";
	$cidade   = "";
	$estado   = "";

	if(isset($_GET["id"]) && $_GET["id"] != ""){	 
		$id       = $_GET["id"];
		$nome     = $_SESSION["cadastropessoal"][$id]["nome"];
		$cpf      = $_SESSION["cadastropessoal"][$id]["cpf"];
		$idade    = $_SESSION["cadastropessoal"][$id]["idade"];
		$email    = $_SESSION["cadastropessoal"][$id]["email"];
		$telefone = $_SESSION["cadastropessoal"][$id]["telefone"];
		$endereco = $_SESSION["cadastropessoal"][$id]["endereco"];
		$cidade   = $_SESSION["cadastropessoal"][$id]["cidade"];
		$estado   = $_SESSION["cadastropessoal"][$id]["estado"];
	}

	require_once("estados.php");
?>

<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<meta charset="utf-8">
        <meta name="author" content="Levi Alves">
        <meta name="description" content="Cadastro">
        <meta name="robots" content="index, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Cad - Cadastro</title>		
		<link rel="stylesheet" type="text/css" href="_css/estilo.css">
		<link rel="shortcut icon" type="imagem/png" href="_icon/cadastro.png">
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

		<main>
			<section class="principal conteiner">
				<form action="salvar.php" method="post">
					<fieldset>
						<input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- apenas para receber o id e utiliza em salvar.php para salvar as alterações -->
						<label for="nome">Nome: </label>
						<input type="text" name="nome" id="nome" class="campo" required autofocus value="<?php echo $nome; ?>"><br><br>
						<label for="cpf">CPF: </label>
						<input type="text" name="cpf" id="cpf" class="campo" required value="<?php echo $cpf; ?>"><br><br>					
						<label for="idade">Idade: </label>		
						<input type="number" name="idade" id="idade" class="campo" required value="<?php echo $idade; ?>">
					</fieldset>
					<fieldset>
						<label for="email">Email: </label>
						<input type="text" name="email" id="email" class="campo" required value="<?php echo $email; ?>"><br><br>										
						<label for="telefone">Telefone: </label>
						<input type="text" name="telefone" id="telefone" class="campo" required value="<?php echo $telefone; ?>">
					</fieldset>
					<fieldset>						
						<label for="endereco">Endereço: </label>
						<input type="text" name="endereco" id="endereco" class="campo" required value="<?php echo $endereco; ?>"><br><br>
						<label for="cidade">Cidade: </label>
						<input type="text" name="cidade" id="cidade" class="campo" required value="<?php echo $cidade; ?>"><br><br>
						<label for="estado">Estado: </label>
						<select name="estado" id="estado" class="campo">
						<?php
						$uf_select = $estados[0];
						if($estado != ""){
							$uf_select = $estado;
						}
						foreach($estados as $i => $uf){
							if($i == $uf_select){
								echo"<option value='$i' selected>$uf</option>";
							}else{
								echo"<option value='$i'>$uf</option>";
							}
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
		</main>		

		<footer>
		</footer>								
	</body>
</html>

