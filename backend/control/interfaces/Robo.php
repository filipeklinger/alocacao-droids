<?php

namespace Droids\backend\control\interfaces;

interface Robo
{
    const FORCA_DE_FABRICA = 1000;
    public function consertar();
    public function getTempoBateriaMinutos();
    public function setMinutosCarregamentoBateria($tempoCarregamento);
}
