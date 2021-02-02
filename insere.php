<?php

include('config.php');
ini_set("display_errors", 0);

$session_id = $_GET[$id];
$produto = $_POST["produto"];
$descricao = $_POST["descricao"];
$fabricante = $_POST["fabricante"];
$valor_aquisicao = $_POST["valor_aquisicao"];
$codigo = $_POST["codigo"];
$data_entrada = $_POST["data_entrada"];
$data_saida = $_POST["data_saida"];

$sql = "INSERT INTO produtos (produto, descricao, fabricante, valor_aquisicao, codigo, data_entrada, data_saida)
         VALUES ('$produto','$descricao','$fabricante','$valor_aquisicao','$codigo','$data_entrada','$data_saida')";

if (mysqli_query($conexao, $sql)) {
  $session_id = mysqli_insert_id($conexao);

  echo "New record created successfully. Last inserted ID is: " . $session_id;
  header('Location: cadastro.php?acao= Dados inserindos com sucesso!');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}
