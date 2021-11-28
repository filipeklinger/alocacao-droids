<?php

namespace Droids\backend\control\classes;

use Droids\backend\control\interfaces\Robo;

//Herança multipla não é permitida então foi criada uma classe humano e uma interface Robo
class Droid extends Humano implements Robo
{
    //private significa que somente a propria classe pode acessar
    //sendo necessarios metodos Getter e Setter para modificar e obter seus valores
    private $NrSerie;
    private $tempoBateria = 0;
    private $nome;

    public function __construct($nome, $nrSerie)
    {
        $this->nome = $nome;
        $this->NrSerie = $nrSerie;
        $this->idade = 0;
        $this->forcaMotor = Droid::FORCA_DE_FABRICA;
        $this->tempoBateria = Droid::CARGA_DE_FABRICA;
    }

    public function setCorOlhos($cor)
    {
        $this->corOlhos = $cor;
    }

    /**
     * A cada carga o Droid fica mais velho
     */
    public function setMinutosCarregamentoBateria($tempoCarregamento)
    {
        $energiaPorMinuto = 10;
        $this->tempoBateria = ($tempoCarregamento * $energiaPorMinuto);
        $this->ficarVelho();
    }

    private function ficarVelho()
    {
        $this->idade++;
        $this->perderForça();
    }

    private function perderForça()
    {
        $fatorDePerda = 2;
        $this->forcaMotor = ($this->forcaMotor - ($this->idade * $fatorDePerda));
    }

    public function getTempoBateriaMinutos()
    {
        return $this->tempoBateria;
    }

    public function getNome()
    {
        return "{$this->nome} N: {$this->NrSerie}";
    }

    public function getInformacoesDroid()
    {
        $informacoes = " Informações do Droid {$this->nome} <br/> ";
        $informacoes .= "Cor dos Olhos: {$this->corOlhos} <br/>";
        $informacoes .= "Numero de serie: {$this->NrSerie} <br/>";
        $informacoes .= "Idade: {$this->idade} <br/>";
        $informacoes .= "Força Motor: {$this->forcaMotor} <br/>";
        $informacoes .= "Tempo Bateria: {$this->tempoBateria} minutos <br/>";

        return $informacoes;
    }

    public function consertar()
    {
        $this->forcaMotor = Droid::FORCA_DE_FABRICA;
    }
}
