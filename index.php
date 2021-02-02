<?php
session_start();
ini_set("display_errors", 0);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Control</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/freelancer.css" rel="stylesheet">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <br />
                    <h9 <a class="title has-text-grey">Faça seu login </a></h9>
                    <br />
                    <br />
                    <?php
                    if (isset($_SESSION['nao_autenticado'])) :
                    ?>
                        <div class="notification is-danger">
                            <p>Usuário ou senha inválidos.</p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                            <br>
                            <h7 class="text-muted">Desenvolvido por Marciel Sousa</h7>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </section>
</body>

</html>