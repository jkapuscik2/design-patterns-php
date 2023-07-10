<?php

namespace App\Creational\Builder;

interface Device
{
    public function attachHardware(string $hardware): void;

    public function setSoftware(string $software): void;

    public function setSLA(string $SLA): void;
}
