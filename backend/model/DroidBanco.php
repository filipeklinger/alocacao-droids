<?php

namespace Droids\backend\model;

use Droids\backend\control\classes\Droid;

class DroidBanco
{
    private $banco;

    public function __construct()
    {
        $this->banco = new AcessoBanco();
    }

    public function Listar()
    {
        $select = "SELECT * FROM `Droid`";
        $resultado = $this->banco->Executa($select);
        $droidVetor = [];

        //verificando se foram retornados dados na consulta
        if (isset($resultado) && $resultado != false) {
            //enquanto houver uma linha não lida adicionar ao vetor de locais
            while ($linha = mysqli_fetch_assoc($resultado)) {
                $droidVetor[] = $this->CriaObjetoDroidDe($linha);
            }
        }
        return $droidVetor;
    }

    private function CriaObjetoDroidDe($atributos)
    {
        //`id`,`nome`, `idade`, `cor_olhos`, `forca_motor`, `tempo_bateria`, `nr_serie`
        $droid = new Droid($atributos['nome'], $atributos['nr_serie']);
        $droid->SetId($atributos['id']);
        $droid->SetIdade($atributos['idade']);
        $droid->SetCorOlhos($atributos['cor_olhos']);
        $droid->SetForcaMotor($atributos['forca_motor']);
        $droid->SetTempoBateria($atributos['tempo_bateria']);
        return $droid;
    }
}
