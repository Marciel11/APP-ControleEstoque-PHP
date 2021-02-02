<?php

ini_set("display_errors", 0);
require 'config.php';
session_start();
$acao = $_REQUEST["acao"];

$usuario = $_SESSION['usuario'];
$pageid = 1;
$sql = "SELECT a.estoque_id FROM nivel_acesso AS a
inner join usuario AS u on u.id = a.id_user
WHERE u.usuario='{$usuario}'";


// Receba o resultado e verifique o tipo de acesso.
$result = mysqli_query($conexao, $sql);
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
  //echo $row['estoque_id'];
}

foreach ($rows as $row) {
  $valida = $row['estoque_id'];
}
if ($valida == $pageid) {

?>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
    }

    /* Style the header */
    .header {
      background-color: #f1f1f1;
      padding: 20px;
      text-align: center;
    }

    /* Style the top navigation bar */
    .topnav {
      overflow: hidden;
      background-color: #4682B4;
    }

    /* Style the topnav links */
    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 18px 16px;
      text-decoration: none;
    }

    /* Change color on hover */
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }
  </style>


  <!DOCTYPE html>
  <html lang="pt-br">

  <head>
    <title>Cadastro</title>
  </head>

  <meta charset="utf-8">
  <meta http-equiv="Content-Language" content="pt-br">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <center>
    <table border='0' width='90%'>
      <div class="topnav">
        <a href="painel.php">Voltar</a>
        <a href="sair.php">Sair</a>
      </div>

      <body>

        <!-- BOTOES-->
        <header class="masthead bg-grey text-white text-center form-group">
          <div class="container-fluid col-md-12">
            <div class="well">
        </header>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/freelancer.css" rel="stylesheet">
        <center>
          <h1 class="register-title"><img src="./imagens/estoque.png" width="196" height="29" alt="" /></h1>
        </center>
        <br>
        <center>
          <font color="red">
            <h6><?php echo $acao ?> </h6>
        </center>
        </div>
        <br />
        <br />

        <!-- BOTOES-->
        <header class="masthead bg-grey text-white text-center form-group">
          <div class="container-fluid col-md-12">
            <div class="well">

              <form enctype="multipart/form-data" action="insere.php" method="post">

                <tr>
                  <div>
                    <td><input type="text" name="produto" size="40" placeholder="produto" required /></td>
                    <td><input type="text" name="descricao" size="15" placeholder="Descricao" /></td>
                    <td><input type="text" name="fabricante" size="15" placeholder="Fabricante" /></td>
                    <td><input type="text" name="valor_aquisicao" size="15" placeholder="Valor aquisicao" /></td>
                    <td><input type="text" name="codigo" size="15" placeholder="codigo" /></td>
                    <td><input type="text" name="data_entrada" size="15" placeholder="Data entrada" /></td>
                    <td><input type="text" name="data_saida" size="15" placeholder="Data saida" /></td>

                </tr>
    </table>
    <br>

    <div align="center"><button type='submit' class='btn btn-primary' value='Cadastrar'>Cadastrar</button></div>



    </form>

    <!-- UPLOAD DE FOTO -->
    <br />
    <br />

    <center>
      <div class="copyright py-4 text-center text-white fixed-bottom">
        <div class="container">
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />


          <!--  <h3 <small><font color="black">Copyright &copy; MarcielSousa 2019</font></small></h3>-->
        </div>
    </center>
    <? }else {
   ?>

    <div id="content" width="1000px" align="left">
      <h2 align="center" class="titulo_pagina">Desculpe! Voc&ecirc; n&atilde;o tem perfil para acessar esta p&aacute;gina!</h2>
      <p align="center"><a href="painel.php">Voltar ao In&iacute;cio</a></p>
    </div>

  <?php
  exit;
} ?>
  </body>
  </head>
  </tr>
  </html>