<?php
require '../bibliotecas/autoloadPsr4/autoload.php';

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

    default:
        # code...
        break;
}
