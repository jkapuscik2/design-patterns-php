<?php

namespace App\Structural\Flyweight;

final readonly class Device
{
    public function __construct(
        private string     $uuid,
        private string     $ip,
        private DeviceType $type
    )
    {
    }

    public function ping(): void
    {
        echo "Checking if device {$this->uuid} is active" . PHP_EOL;
        echo $this->type->reportType() . PHP_EOL;
        echo "Calling it on ip {$this->ip}" . PHP_EOL;
    }
}
