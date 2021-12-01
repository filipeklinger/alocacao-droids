<?php

namespace Droids\backend\control;

use Droids\backend\control\classes\Droid;
use Droids\backend\model\DroidBanco;

class DroidControl
{
    private $droidBanco;

    public function __construct()
    {
        $this->droidBanco = new DroidBanco();
    }

    /**
     * @return Array<Droid>
     */
    public function ListaDeDroids()
    {
        $vetor = $this->droidBanco->Listar();
        return $vetor;
    }
}
