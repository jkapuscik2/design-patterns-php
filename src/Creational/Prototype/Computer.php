<?php

namespace App\Creational\Prototype;

final class Computer implements Device
{
    private string $uuid;

    public function __construct(
        private readonly DeviceGroup $group
    ) {
    }

    public function setUuid(string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function save(): void
    {
        echo "Saving device with UID {$this->uuid} to group {$this->group->getName()} in {$this->group->getLocation()}" . PHP_EOL;
    }
}
