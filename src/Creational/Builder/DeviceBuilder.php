<?php
declare(strict_types=1);

namespace App\Creational\Builder;

interface DeviceBuilder
{
    public function setHardware(): self;

    public function setSoftware(): self;

    public function setSLA(): self;

    public function getDevice(): Device;
}
