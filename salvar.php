<?php
	session_start();
	//session_destroy();

	if(count($_POST)){
		//var_dump($_POST);
		$_SESSION['cadastropessoal'][] = $_POST;	
	}else
		echo"não há registros";

	header('location: lista.php');  // FAZ O REDIRECIONAMENTO PARA OUTRA PÁGINA


?>