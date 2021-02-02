<?php
ini_set("display_errors", 0);
header("Content-Type: text/html; charset=utf-8");
session_start();
$usuario = $_SESSION['usuario'];
include('config.php');

?>
<!doctype html>
<html>

<head>
  <title>Controle</title>
</head>
<meta charset="utf-8">
<meta http-equiv="Content-Language" content="pt-br">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<div class="topnav">

  <a href="painel.php">Voltar</a>
  <a href="sair.php">Sair</a>
  <a href="lista.php"></a>

</div>
<center>
  <h1 class="register-title"><img src="./imagens/estoque.png" width="196" height="29" alt="" /></h1>
</center>
<style>
  * {
    box-sizing: border-box;
  }

  body {
    margin: 0;
  }

  .header {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
  }

  .topnav {
    overflow: hidden;
    background-color: #4682B4;
  }

  .topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 16px 16px;
    text-decoration: none;
  }

  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }

  .bluetex {
    color: #E6E6FA;

  }
</style>

<body>

  <body id="page-top">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/freelancer.css" rel="stylesheet">

    <?php


    $usuario = $_SESSION['usuario'];
    $pageid = 3;
    $sql = "SELECT a.lista_estoque_id FROM nivel_acesso AS a
                inner join usuario AS u on u.id = a.id_user
                WHERE u.usuario='{$usuario}'";


    // Receba o resultado e verifique o tipo de acesso.
    $result = mysqli_query($conexao, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
      //echo $row['estoque_id'];
    }

    foreach ($rows as $row) {
      $valida = $row['lista_estoque_id'];
    }
    if ($valida == $pageid) {
      //Recupera resultados

      $pesquisa = $_POST['busca'];
      $result = @mysqli_query($conexao, "SELECT* FROM  usuarios.produtos WHERE produto like'$pesquisa%'");

    ?>

      <br />

      <form method="POST">
        <table align="center">
          <tr>
            <td>
              <input type="text" name="busca" required placeholder="Buscar produto">

              <input type="Submit" value="busca">
            </td>
          </tr>
        </table>
      </form>

      <br />
      <br>
      <table class="table" class="70%">
        <tr>
          <th class="table-primary">Id</th>
          <th class="table-primary">Produto</th>
          <th class="table-primary">Patr.</th>
          <th class="table-primary">Desc.</th>
          <th class="table-primary">Valor</th>
          <th class="table-primary">Entrada</th>
          <th class="table-primary">Saida</th>
          <th class="table-primary">Produto</th>
          <th class="table-primary">Fabric.</th>
          <th class="table-primary"></th>

          </tbody>
        </tr>

        <?php
        while ($row = $result->fetch_array()) {
          $rows[] = $row;
        }

        foreach ($rows as $row)

          if ($row >= 0) {

            $id = $row['id_produto'];
            $produto = $row['produto'];
            $descricao = $row['descricao'];
            $fabricante = $row['fabricante'];
            $valor_aquisicao = $row['valor_aquisicao'];
            $codigo = $row['codigo'];
            $data_aquisicao = $row['data_entrada'];
            $data_saida = $row['data_saida'];

            echo "
  <tr>
  <td >$id</td>
  <td >$produto</td>
  <td >$descricao</td>
  <td >$patrimonio</td> 
  <td >$descricao</td>
  <td >$fabricante</td>
  <td >$valor_aquisicao</td>
  <td >$data_aquisicao</td>
  <td >$status_baixa</td>
  <td >$data_saida</td>";
          }
        echo "</table>";
      } else {
        ?>

        <div id="content" width="1000px" align="left">
          <h2 align="center" class="titulo_pagina">Desculpe! Voc&ecirc; n&atilde;o tem perfil para acessar esta p&aacute;gina!</h2>
          <p align="center"><a href="painel.php">Voltar ao In&iacute;cio</a></p>
        </div>

      <?php
        exit;
      }
      ?>
  </body>
  </table>

</html>