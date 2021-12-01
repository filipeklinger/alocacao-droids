<?php

namespace Droids\view;

class Rotas
{
    function obterConteudo()
    {
        if ($this->usuarioLogado()) {
            $this->rotasInternas();
        } else {
            $this->rotasExternas();
        }
    }

    public function usuarioLogado()
    {
        if (isset($_SESSION["usuario"]) && $_SESSION["usuario"] != '') {
            return true;
        } {
            return false;
        }
    }

    private function rotasExternas()
    {
        $rota = isset($_GET['r']) ? $_GET['r'] : '';
        switch ($rota) {
            case 'login':
                include_once('./view/usuario/login.html');
                break;
            case 'cadastro_usuario':
                include_once('./view/usuario/cadastro.html');
                break;
            default:
                include_once('./view/usuario/login.html');
                break;
        }
    }

    public function rotasInternas()
    {
        $rota = isset($_GET['r']) ? $_GET['r'] : '';
        //inclui menu em todas as rotas internas
        include_once('./view/partesComuns/menu.php');

        switch ($rota) {
            case 'inicio':
                include_once('./view/inicio.html');
                break;
            case 'listar_droids':
                include_once('./view/droid/listarDroids.php');
                break;
            case 'cadastro_usuario':
                include_once('./view/usuario/cadastro.html');
                break;

            default:
                include_once('./view/inicio.html');
                break;
        }
    }
}
