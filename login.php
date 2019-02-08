<?php 

include "connection.php";

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	if((isset($_POST['login']) && isset($_POST['senha']))){


	$sql = "SELECT login,senha FROM usuario WHERE login='$login' AND senha='$senha'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	if($row){

		session_start();
		$_SESSION['login'] = $login;
		die("SUCCESS");

	
	}else{

		echo "<script> alert('Este usuario não existe, tente novamente');window.location='index.php';  </script>";		
	}

	}else{

		echo "<script> alert('Todos os campos precisam ser preenchidos');window.location='index.php';</script>";
	}
?>