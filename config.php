<?php

$host = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$DB = "usuarios";

$conexao = mysqli_connect($host, $dbuser, $dbpass, $DB) or die('Não foi possível conectar');
