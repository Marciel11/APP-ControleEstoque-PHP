<?php
session_start();
include('config.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
} else {
	$usuario =	$_POST['usuario'];
	$senha = ($_POST['senha']);
}

$query = "select usuario from usuario where usuario = '$usuario' and senha = '$senha'";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if ($row == 1) {

	$row = mysqli_fetch_array($result);
	print_r($row);
	$_SESSION['usuario'] = $row[usuario];
	header('Location: painel.php');
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
