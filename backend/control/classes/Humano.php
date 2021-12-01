<?php

namespace Droids\backend\control\classes;

class Humano
{
    const OLHOS_COMUNS = "Preto";
    const IDADE_INICIAL = 0;
    //protected significa que as classes que herdam esta tem acesso a esses atributos
    protected $idade;
    protected $corOlhos;

    public function GetIdade()
    {
        return $this->idade . " Ano(s)";
    }

    public function SetIdade($idade)
    {
        $this->idade = $idade;
    }

    public function GetCorOlhos()
    {
        return $this->corOlhos;
    }

    public function SetCorOlhos($corOlhos)
    {
        $this->corOlhos = $corOlhos;
    }
}
