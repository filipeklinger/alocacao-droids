<?php

use Droids\backend\control\PlanetaControl;

$id = $_GET['id'];
$planetaControl = new PlanetaControl();
$planeta = $planetaControl->Busca($id);
?>
<div class="container">
    <a href="?r=listar_planetas">Voltar</a>
    <form class="form-horizontal" method="POST" action="./backend/?r=excluir_planeta">
        <fieldset>
            <input id="id" name="id" type="hidden" value="<?= $id ?>">
            <!-- Form Name -->
            <legend>Excluir Planeta</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome</label>
                <div class="col-md-4">
                    <input id="nome" name="nome" type="text" class="form-control input-md" required="" value="<?= $planeta->GetNome() ?>" readonly>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Deletar"></label>
                <div class="col-md-4">
                    <button type="submit" id="Deletar" name="Deletar" class="btn btn-danger btn-block">Deletar</button>
                </div>
            </div>

        </fieldset>
    </form>

</div>