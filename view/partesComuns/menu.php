<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="?r=inicio">Alocação Droids</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="?r=inicio">Home</a></li>
            <li><a href="?r=listar_droids">Ver Droids</a></li>
            <li><a href="?r=listar_planetas">Ver Planetas</a></li>
            <li><a href="#">Alocações</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Olá,<?= $_SESSION["usuario"] ?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Dados do usuário</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="./backend/?r=logout">Sair</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>