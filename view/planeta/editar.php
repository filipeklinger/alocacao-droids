<?php

use Droids\backend\control\PlanetaControl;

$id = $_GET['id'];
$planetaControl = new PlanetaControl();
$planeta = $planetaControl->Busca($id);
?>
<div class="container">
    <a href="?r=listar_planetas">Voltar</a>
    <form class="form-horizontal" method="POST" action="./backend/?r=atualiza_planeta">
        <fieldset>
            <input id="id" name="id" type="hidden" value="<?= $id ?>">
            <!-- Form Name -->
            <legend>Editar Planeta</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome</label>
                <div class="col-md-4">
                    <input id="nome" name="nome" type="text" minlength="3" placeholder="nome" class="form-control input-md" required="" value="<?= $planeta->GetNome() ?>">
                    <span class="help-block">mínimo 3 caracteres</span>
                </div>
            </div>

            <!-- Appended Input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="tamanho">Tamanho</label>
                <div class="col-md-4">
                    <div class="input-group">
                        <input id="tamanho" name="tamanho" class="form-control" type="number" min="0" max="999" required="" value="<?= $planeta->GetTamanhoNumero() ?>">
                        <span class="input-group-addon">Mi Km²</span>
                    </div>
                    <p class="help-block">em milhões de Km²</p>
                </div>
            </div>
            <!-- Appended Input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="distanci">Distância</label>
                <div class="col-md-4">
                    <div class="input-group">
                        <input id="distancia" name="distancia" class="form-control" type="number" min="0" max="999" required="" value="<?= $planeta->GetDistanciaNumero() ?>">
                        <span class="input-group-addon">Anos Luz</span>
                    </div>

                </div>
            </div>
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Atualizar"></label>
                <div class="col-md-4">
                    <button type="submit" id="Atualizar" name="Atualizar" class="btn btn-primary btn-block">Atualizar</button>
                </div>
            </div>

        </fieldset>
    </form>

</div>