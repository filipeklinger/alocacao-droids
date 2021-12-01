<?php

use Droids\backend\control\DroidControl;

$droidControl = new DroidControl();
$lista = $droidControl->ListaDeDroids();

?>
<div class="container">
    <h1>Lista de Droids Cadastrados</h1>
    <table class="table table-striped">
        <thead>
            <button class="btn btn-primary btn-xs pull-right" disabled><b>+</b> Adicionar Droid</button>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Olhos</th>
                <th>Bateria</th>
                <th>Forca Motor</th>
                <th>N. Serie</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < sizeof($lista); $i++) {
                $droid = $lista[$i];
            ?>
                <tr>
                    <td><?= $droid->GetId() ?></td>
                    <td><?= $droid->GetNome() ?></td>
                    <td><?= $droid->GetIdade() ?></td>
                    <td><?= $droid->GetCorOlhos() ?></td>
                    <td><?= $droid->GetTempoBateria() ?></td>
                    <td><?= $droid->GetForcaMotor() ?></td>
                    <td><?= $droid->GetNrSerie() ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>