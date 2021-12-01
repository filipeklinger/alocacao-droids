<?php
// A "session_start" deve ser a primeira coisa em seu documento. Antes de qualquer tag HTML.
session_start();
require './bibliotecas/autoloadPsr4/autoload.php';

use Droids\view\Rotas;

$rota = new Rotas();
?>
<!doctype html>

<html lang="pt-Br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alocação de Droids</title>

    <link rel="stylesheet" href="./bibliotecas/bootstrap-3.3.7/css/bootstrap.min.css?v=1.0">
    <script src="./bibliotecas/jquery/jquery-3.4.1.min.js"></script>
    <script src="./bibliotecas/bootstrap-3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    <?php $rota->obterConteudo(); ?>
</body>

</html>