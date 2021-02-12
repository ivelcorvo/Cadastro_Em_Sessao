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
		<title>php</title>
		<link rel='stylesheet' type="text/css" href='_css/estilo.css'>
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
				<table border="0">
					<thead>
						<tr>
							<th>#</th>
							<th>Nome</th>
							<th>Idade</th>
							<th>Cpf</th>
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
							 echo"<td>".$p['idade']."</td>";
							 echo'<td>'.$p['cpf'].'</td>';
							 echo'<td>'.$p['telefone'].'</td>';
							 echo'<td>'.$p['email'].'</td>';
							 echo'<td>'.$p['cidade'].'</td>';
							 echo'<td>'.$p['estado'].'</td>';
							 echo"</tr>";
						}
					?>
					</tbody>
		</div>
		<div class='footer'>
			<h2> </h2>
		</div>	
	</body>
</html>