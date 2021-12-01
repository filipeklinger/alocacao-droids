<?php
require '../bibliotecas/autoloadPsr4/autoload.php';

use Droids\backend\control\PlanetaControl;
use Droids\backend\control\UsuarioControl;

define('INVALIDO', '-1');

//TODO inserir router para chamar classes de controle (control)
$rota = isset($_GET['r']) ? $_GET['r'] : INVALIDO;
switch ($rota) {
    case 'cadastro_usuario':
        $usuarioControl = new UsuarioControl();
        $usuarioControl->CriarUsuario();
        break;
    case 'login':
        $usuarioControl = new UsuarioControl();
        $usuarioControl->FazerLogin();
        break;
    case 'logout':
        $usuarioControl = new UsuarioControl();
        $usuarioControl->SairDoSistema();
        break;

    case 'cadastro_planeta':
        $usuarioControl = new PlanetaControl();
        $usuarioControl->Cadastrar();
        break;
    case 'atualiza_planeta':
        $usuarioControl = new PlanetaControl();
        $usuarioControl->Atualizar();
        break;
    case 'excluir_planeta':
        $usuarioControl = new PlanetaControl();
        $usuarioControl->Excluir();
        break;

    default:
        echo "<h2>Rota invalida selecionada</h2>";
        break;
}
