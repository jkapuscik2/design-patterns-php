<?php

namespace App\Structural\Flyweight;

final readonly class DeviceType
{
    public function __construct(
        private string $location,
        private string $resolution,
        private string $producer,
        private string $operatingSystem
    )
    {
    }

    public function reportType(): string
    {
        return "Working on device in {$this->location} with resolution {$this->resolution} crated by {$this->producer} and running {$this->operatingSystem}";
    }
}
