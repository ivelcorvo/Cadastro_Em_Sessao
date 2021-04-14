<?php
	// var_dump($_GET["id"]);
	session_start();

	if(isset($_GET["id"]) && $_GET["id"] != ""){
		$i = $_GET["id"];
		array_splice($_SESSION["cadastropessoal"], $i, 1);
	}

	header("Location: lista.php")
?>