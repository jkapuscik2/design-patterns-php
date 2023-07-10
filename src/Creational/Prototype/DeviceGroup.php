<?php

namespace App\Creational\Prototype;

final readonly class DeviceGroup
{
    public function __construct(
        private string $name,
        private string $location
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLocation(): string
    {
        return $this->location;
    }
}
