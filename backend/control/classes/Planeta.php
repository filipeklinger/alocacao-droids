<?php

namespace Droids\backend\control\classes;

class Planeta
{
    private $nome;
    private $tamanho;
    private $distancia;

    public function __construct($nome, $tamanho, $distancia)
    {
        $this->nome = $nome;
        $this->tamanho = $tamanho;
        $this->distancia = $distancia;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getInformacoes()
    {
        $informacoes = "Planeta: {$this->nome}<br/>";
        $informacoes .= "Tamanho: {$this->tamanho}Milhoes Km²<br/>";
        $informacoes .= "Distancia: {$this->distancia} Ano(s) Luz da Terra<br/>";

        return $informacoes;
    }
}
