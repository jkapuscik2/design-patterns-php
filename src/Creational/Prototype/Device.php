<?php
declare(strict_types=1);

namespace App\Creational\Prototype;

interface Device
{
    public function __construct(DeviceGroup $group);

    public function setUuid(string $uid): self;

    public function save(): void;
}
