<?php
	session_start();
	//session_destroy();

	$pessoas=[];

	if(isset($_SESSION['cadastropessoal'])){
		$pessoas = $_SESSION['cadastropessoal'];
	}
?>

<!DOCTYPE html>
<html lang = 'pt-br'>
	<head>
		<meta charset='utf-8'>
        <meta name='author' content='Levi Alves'>
        <meta name='description' content='Lista'>
        <meta name='robots' content='index, nofollow'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>        
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>		
		<title>php</title>
		<link rel='stylesheet' type="text/css" href='_css/menu.css'>
		<link rel='stylesheet' type="text/css" href='_css/estilo.css'>
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
				<label class='lbl-menu' for='check'>&#8801;</label>
				<input type='checkbox' id='check'>
				<ul class="menu-movel">
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Listar</a></li>
					<li><a href="cadastro.php">Cadastro</a></li>
				</ul>
			</nav>
		</header>


		<section class='lista conteiner'>
			<table border="0">
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
							echo"<tr>";
							echo"<th>".$i."</th>";
							echo"<td>".$p['nome']."</td>";							 
							echo'<td>'.$p['cpf'].'</td>';
							echo"<td>".$p['idade']."</td>";
							echo'<td>'.$p['telefone'].'</td>';
							echo'<td>'.$p['email'].'</td>';
							echo'<td>'.$p['cidade'].'</td>';
							echo'<td>'.$p['estado'].'</td>';
							echo"</tr>";
					}
				?>
				</tbody>
		</section>

		<footer>			
		</footer>
	</body>
</html>