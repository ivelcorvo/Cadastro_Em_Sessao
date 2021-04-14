<?php			
	session_start();
	//session_destroy();
	// var_dump($_SESSION["cadastropessoal"]);

	require_once("estados.php");

	$pessoas=[];

	if(isset($_SESSION["cadastropessoal"])){
		$pessoas = $_SESSION["cadastropessoal"];
	}	
?>

<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<meta charset="utf-8">
        <meta name="author" content="Levi Alves">
        <meta name="description" content="Lista">
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
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Listar</a></li>
					<li><a href="cadastro.php">Cadastro</a></li>
				</ul>
				<!-- menu para aparelhos moveis -->
				<label class="lbl-menu" for="check">&#8801;</label>
				<input type="checkbox" id="check">
				<ul class="menu-movel">
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Listar</a></li>
					<li><a href="cadastro.php">Cadastro</a></li>
				</ul>
			</nav>
		</header>

		<section class="principal conteiner">
			<table border="1">
				<thead>
					<tr>
						<th>#</th>
						<th>Nome</th>
						<th>Cpf</th>
						<th>Idade</th>
						<th>Telefone</th>
						<th>Email</th>
						<th>Cidade</th>
						<th>Estado</th>
						<th>Ações</th>	
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($pessoas as $i => $p){
						$uf = $estados[$p["estado"]];
						echo"<tr>";
							echo"<td>".$i."</td>";
							echo"<td>".$p["nome"]."</td>";							 
							echo"<td>".$p["cpf"]."</td>";
							echo"<td>".$p["idade"]."</td>";
							echo"<td>".$p["telefone"]."</td>";
							echo"<td>".$p["email"]."</td>";
							echo"<td>".$p["cidade"]."</td>";
							echo"<td>".$uf."</td>";
							echo"<td>";
								echo"<a class='btn2' href='apagar.php?id=".$i."'><img src='_icon/cancelar.png' class='img-responsivo'></a>";
								echo"<a class='btn2' href='cadastro.php?id=".$i."'><img src='_icon/exclamacao.png' class='img-responsivo'></a>";
							echo"</td>";
						echo"</tr>";
					}
					?>
				</tbody>
			</table>
		</section>

		<footer>			
		</footer>
	</body>
</html>