<?php

namespace Droids\backend\control\classes;

use DateTime;

class Alocacao
{
    private $Data;
    private $Droid;
    private $Planeta;

    public function __construct(Droid $Droid, Planeta $Planeta)
    {
        $this->Droid = $Droid;
        $this->Planeta = $Planeta;
        $this->Data = new DateTime('now');
    }

    public function getInformacoes()
    {
        $informacoes = "Droid: {$this->Droid->getNome()} <br/>";
        $informacoes .= "Planeta: {$this->Planeta->getNome()} <br/>";
        $informacoes .= "Data: {$this->Data->format('d-m-Y H:i:s')} <br/>";
        return $informacoes;
    }
}
