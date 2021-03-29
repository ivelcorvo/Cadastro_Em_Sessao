<?php
	session_start();
	//session_destroy();    
	//var_dump($_POST);

	if(isset($_POST) && $_POST["id"] != ""){ //verifica se está setado e possue uma possição que deve se atualizada 
		$id = $_POST["id"];
		$_SESSION["cadastropessoal"][$id]["nome"]     = $_POST["nome"];
		$_SESSION["cadastropessoal"][$id]["cpf"]      = $_POST["cpf"];
		$_SESSION["cadastropessoal"][$id]["idade"]    = $_POST["idade"];
		$_SESSION["cadastropessoal"][$id]["email"]    = $_POST["email"];
		$_SESSION["cadastropessoal"][$id]["telefone"] = $_POST["telefone"];
		$_SESSION["cadastropessoal"][$id]["endereco"] = $_POST["endereco"];
		$_SESSION["cadastropessoal"][$id]["cidade"]   = $_POST["cidade"];
		$_SESSION["cadastropessoal"][$id]["estado"]   = $_POST["estado"];
 	}else if(count($_POST)){ // verificar se post recebeu algo
		$_SESSION["cadastropessoal"][] = $_POST;	
	}else
		echo"não há registros";

	header("location: lista.php");  // FAZ O REDIRECIONAMENTO PARA OUTRA PÁGINA
?>