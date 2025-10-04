<?php
declare(strict_types=1);

namespace App\Creational\Builder;

interface Device
{
    public function attachHardware(string $hardware): void;

    public function setSoftware(string $software): void;

    public function setSLA(string $SLA): void;
}
