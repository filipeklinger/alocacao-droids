<?php

namespace Droids\backend\control;

use Droids\backend\control\classes\Planeta;
use Droids\backend\model\PlanetaBanco;

class PlanetaControl
{
    private $planetaBanco;

    public function __construct()
    {
        $this->planetaBanco = new PlanetaBanco();
    }

    /**
     * @return Array<Planeta>
     */
    public function ListaDePlanetas()
    {
        $vetor = $this->planetaBanco->Listar();
        return $vetor;
    }
}
