<?php
ini_set("display_errors", 0);
include('verifica_login.php');
session_start();
if ($_SESSION['usuario']) {
?>
  <!DOCTYPE html>
  <html lang="pt-br">

  <head>
    <title>Control</title>
  </head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <table>
    <div class="topnav">
      <link rel="icon" href="favicon.ico">
      <span>
        <p align=”Right”>
        <h6 class="bluetex"> Olá, <?php echo $_SESSION['usuario']; ?></h6>
      </span>
      <a class="btn" href="cadastro.php" role="button">Cadastra produto</a>
      <a class="btn" href="lista.php" role="button">Consulta produto</a>
      <a class="btn" href="sair.php">Sair</a>
    </div>
  </table>
  </script>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
    }

    .header {
      background-color: #cff;
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

      background-color: white;
      color: black;
    }

    .bluetex {
      color: white;
    }

    span {
      font-weight: bold;
    }
  </style>
  </head>

  <body>

    <head>
      <meta http-equiv="Content-Language" content="pt-br">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/freelancer.css" rel="stylesheet">
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/freelancer.css" rel="stylesheet">
    </head>
    <header class="masthead bg-grey text-white text-center form-group">
      <div class="container-fluid col-md-12">
        <div class="well">

          <?php
          session_start();
          include('conexao.php');

          if (!$conexao) {
            die("Connection failed: " . mysqli_connect_error());
          }

          echo "";
          ?>

          <br />

          <!DOCTYPE html>
          <html>

          <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <style>
              .mySlides {
                display: none;
              }
            </style>
          </head>

          <body>
            <div class="carousel-item">
              <img src="..." alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>...</h5>
                <p>...</p>
              </div>
            </div>

          </body>

          </html>
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />

  </html>
  </form>
<?php
} else {
  header('Location: index.php');
}
?>
<lef>
  <footer>
    <font color="silver">
      Desenvolvido por Marciel Sousa
  </footer>
  </h6>
  </font>
  </left>