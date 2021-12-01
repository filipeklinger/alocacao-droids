<?php

namespace Droids\backend\model;

use Droids\backend\control\classes\Planeta;

class PlanetaBanco
{
    private $banco;

    public function __construct()
    {
        $this->banco = new AcessoBanco();
    }

    /**
     * @param Planeta $planeta
     */
    public function Salvar($planeta)
    {
        //criando query de insercao no banco
        $insert = "INSERT INTO `planeta` 
        (`nome`, `tamanho`, `distancia`) 
        VALUES
        ('{$planeta->GetNome()}', '{$planeta->GetTamanhoNumero()}', '{$planeta->GetDistanciaNumero()}')";

        $resultado = $this->banco->Executa($insert);

        if ($resultado == false) {
            echo "Erro em: " . $insert . "<br>" . $this->banco->GetErro() . "<br><br>";
        }

        return $resultado;
    }

    public function Buscar($planeta)
    {
        $select = "SELECT * FROM `planeta` WHERE id='{$planeta->GetId()}' ";
        $resultado = $this->banco->Executa($select);

        //verificando se foram retornados dados na consulta
        if (isset($resultado) && $resultado != false) {
            //como queremos apenas 1 buscado recuperamos somente a primeira linha
            $atributos = mysqli_fetch_assoc($resultado);
            return $this->CriaObjetoPlanetaDe($atributos);
        }
    }

    public function Listar()
    {
        $select = "SELECT * FROM `planeta`";
        $resultado = $this->banco->Executa($select);
        $droidVetor = [];

        //verificando se foram retornados dados na consulta
        if (isset($resultado) && $resultado != false) {
            //enquanto houver uma linha não lida adicionar ao vetor
            while ($linha = mysqli_fetch_assoc($resultado)) {
                $droidVetor[] = $this->CriaObjetoPlanetaDe($linha);
            }
        }
        return $droidVetor;
    }

    private function CriaObjetoPlanetaDe($atributos)
    {
        $planeta = new Planeta();
        $planeta->SetId($atributos['id']);
        $planeta->SetNome($atributos['nome']);
        $planeta->SetTamanho($atributos['tamanho']);
        $planeta->SetDistancia($atributos['distancia']);
        return $planeta;
    }
}
