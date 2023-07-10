<?php

namespace App\Creational\Builder;

final class Director
{
    public function buildDevice(DeviceBuilder $builder): Device
    {
        return $builder->setHardware()
            ->setSoftware()
            ->setSLA()
            ->getDevice();
    }
}
