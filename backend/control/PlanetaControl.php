<?php

namespace Droids\backend\control;

use Droids\backend\control\classes\Planeta;
use Droids\backend\model\PlanetaBanco;

class PlanetaControl
{
    private $planetaBanco;
    private $planeta;

    public function __construct()
    {
        $this->planetaBanco = new PlanetaBanco();
        $this->planeta = new Planeta();
    }

    /**
     * @return Array<Planeta>
     */
    public function ListaDePlanetas()
    {
        $vetor = $this->planetaBanco->Listar();
        return $vetor;
    }

    public function Cadastrar()
    {
        $this->PostPlaneta();
        $salvo = $this->planetaBanco->Salvar($this->planeta);
        if ($salvo) {
            echo "
            <h4>Planeta '{$this->planeta->GetNome()}' Adicionado com sucesso!</h4>
            <br/>
            <a href='../?r=listar_planetas'>Voltar para Lista</a>
            ";
        } else {
            echo "Erro ao salvar novo planeta <br/> <a href='../?r=listar_planetas'>Voltar</a>";
        }
    }

    private function PostPlaneta()
    {
        $this->planeta->SetNome($this->post('nome'));
        $this->planeta->SetDistancia($this->post('distancia'));
        $this->planeta->SetTamanho($this->post('tamanho'));
    }

    private function post($parametro)
    {
        //tenta obter um parametro por post se nao existir retorna string vazia
        return isset($_POST[$parametro]) ? $_POST[$parametro] : '';
    }
}
