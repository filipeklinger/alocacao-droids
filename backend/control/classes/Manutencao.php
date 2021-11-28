<?php

namespace Droids\control\classes;

class Manutencao
{
    private $TipoServico;
    private $Tempo;

    public function __construct($tipoServico, $tempoEmMinutos)
    {
        $this->TipoServico = $tipoServico;
        $this->Tempo = $tempoEmMinutos;
    }

    public function getInformacoes()
    {
        $informacoes = "Tipo do Serviço: {$this->TipoServico}, tempo: {$this->Tempo} minutos";
        return $informacoes;
    }
}
