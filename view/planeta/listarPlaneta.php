<?php

use Droids\backend\control\PlanetaControl;

$planetaControl = new PlanetaControl();
$lista = $planetaControl->ListaDePlanetas();

?>
<div class="container">
    <h1>Lista de Planetas Cadastrados</h1>
    <table class="table table-striped">
        <thead>
            <a href="?r=adicionar_planeta" class="btn btn-primary btn-xs pull-right"><b>+</b> Adicionar Planeta</a>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Tamanho</th>
                <th>Distancia</th>
                <th>Editar</th>
                <th>Apagar</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < sizeof($lista); $i++) {
                $planeta = $lista[$i];
            ?>
                <tr>
                    <td><?= $planeta->GetId() ?></td>
                    <td><?= $planeta->GetNome() ?></td>
                    <td><?= $planeta->GetTamanho() ?></td>
                    <td><?= $planeta->GetDistancia() ?></td>
                    <td>
                        <a href='./?r=' class="btn btn-primary">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                    </td>
                    <td>
                        <a href='./?r=' class="btn btn-warning">
                            <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>