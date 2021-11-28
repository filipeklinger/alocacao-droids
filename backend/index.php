<?php
require '../bibliotecas/autoloadPsr4/autoload.php';

use Droids\backend\control\classes\Droid;
use Droids\backend\control\classes\Planeta;

define('INVALIDO', '-1');

//TODO inserir router para chamar classes de controle (control)
$rota = isset($_GET['r']) ? $_GET['r'] : INVALIDO;
switch ($rota) {
    case 'criar_droid':
        CriarClassesPerifericas();
        break;

    default:
        # code...
        break;
}

function CriarClassesPerifericas()
{
    echo "<h3>Planetas</h3>";
    $p = new Planeta('Alderaan', '700', '20000');
    echo ($p->getInformacoes());
    echo "<br/>===========<br/>";
    $p = new Planeta("Dantooine", '500', '150000');
    echo ($p->getInformacoes());

    echo "<h3>Droids</h3>";
    $d = new Droid('C-3PO', 'ABCD');
    echo ($d->getInformacoesDroid());
    echo "<br/>===========<br/>";
    $d1 = new Droid('R2-D2', 'EFGH');
    echo ($d1->getInformacoesDroid());
}
