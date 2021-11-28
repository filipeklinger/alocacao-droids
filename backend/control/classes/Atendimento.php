<?php

namespace Droids\control\classes;

use DateTime;

class Atendimento
{
    private $numero;
    private $data;

    public function __construct($numero)
    {
        $this->numero = $numero;
        $this->data = new DateTime();
    }
}
