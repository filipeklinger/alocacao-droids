<?php

namespace Droids\backend\control\classes;

use Droids\backend\control\interfaces\Robo;

//Herança multipla não é permitida então foi criada uma classe humano e uma interface Robo
class Droid extends Humano implements Robo
{
    //private significa que somente a propria classe pode acessar
    //sendo necessarios metodos Getter e Setter para modificar e obter seus valores
    private $id;
    private $NrSerie;
    private $tempoBateria = 0;
    private $nome;
    private $forcaMotor;

    public function __construct($nome, $nrSerie)
    {
        $this->nome = $nome;
        $this->NrSerie = $nrSerie;

        //idade e corOlho são herdados da classe Humano
        $this->idade = Droid::IDADE_INICIAL;
        $this->corOlhos = Droid::OLHOS_COMUNS;

        //a forca e a carga de fabrica são herdadas da interface "Robo"
        $this->forcaMotor = Droid::FORCA_DE_FABRICA;
        $this->tempoBateria = Droid::CARGA_DE_FABRICA;
    }

    public function SetId($id)
    {
        $this->id = $id;
    }
    public function GetId()
    {
        return $this->id;
    }

    public function SetForcaMotor($forcaMotor)
    {
        $this->forcaMotor = $forcaMotor;
    }
    public function GetForcaMotor()
    {
        return $this->forcaMotor;
    }

    public function SetTempoBateria($tempoBateria)
    {
        $this->tempoBateria = $tempoBateria;
    }

    public function GetTempoBateria()
    {
        return $this->tempoBateria . " Minutos";
    }

    public function SetNome($nome)
    {
        $this->nome = $nome;
    }

    public function GetNome()
    {
        return $this->nome;
    }

    public function GetNrSerie()
    {
        return $this->NrSerie;
    }



    /**
     * A cada carga o Droid fica mais velho
     */
    public function setMinutosCarregamentoBateria($tempoCarregamento)
    {
        $energiaPorMinuto = 10;
        $this->tempoBateria = ($tempoCarregamento * $energiaPorMinuto);
    }

    public function consertar()
    {
        //$this->gastarBateria();
        $this->forcaMotor = Droid::FORCA_DE_FABRICA;
    }
}
