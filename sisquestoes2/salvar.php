<?php
	$servidor = "localhost";
	$username = "root";
	$password = "root";
	$database = "prova";

	$alternativa = $_POST['alternativa'];
	$alternativa_implode = implode(",", $_POST['alternativa']);

	$connection = mysqli_connect($servidor, $username, $password, $database);
	if (!$connection) {
		echo "Não conectado ";	
	}

	if(isset($_POST['alternativa'])){
		$sql = mysqli_query($connection, "INSERT INTO questoes(alternativa) VALUES ('$alternativa_implode')");

		header('location: index.html');
	}



?>