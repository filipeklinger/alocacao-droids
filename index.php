<?php
function obterConteudo()
{
    $rota = isset($_GET['r']) ? $_GET['r'] : '';
    switch ($rota) {
        case 'incluir_droid':
            include_once('./view/droid/incluir.html');
            break;

        default:
            include_once('./view/inicio.html');
            break;
    }
}
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
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="?r=inicio">Alocação Droids</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="?r=inicio">Home</a></li>
                <li><a href="?r=incluir_droid">Adicionar Droid</a></li>
                <li><a href="#">Ver Planetas</a></li>
                <li><a href="#">Alocações</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <?php obterConteudo(); ?>
    </div>

</body>

</html>