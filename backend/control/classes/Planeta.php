<?php

namespace Droids\backend\control\classes;

class Planeta
{
    private $id;
    private $nome;
    private $tamanho;
    private $distancia;

    public function __construct()
    {
    }

    public function SetId($id)
    {
        $this->id = $id;
    }
    public function GetId()
    {
        return $this->id;
    }

    public function GetNome()
    {
        return $this->nome;
    }
    public function SetNome($nome)
    {
        $this->nome = $nome;
    }

    public function GetTamanho()
    {
        return $this->tamanho . " Milhoes Km²";
    }
    public function GetTamanhoNumero()
    {
        return $this->tamanho;
    }
    public function SetTamanho($tamanho)
    {
        $this->tamanho = $tamanho;
    }

    public function GetDistancia()
    {
        return $this->distancia . " Anos Luz da Terra";
    }
    public function GetDistanciaNumero()
    {
        return $this->distancia;
    }
    public function SetDistancia($distancia)
    {
        $this->distancia = $distancia;
    }
}
