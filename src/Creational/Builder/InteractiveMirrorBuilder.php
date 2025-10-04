<?php
declare(strict_types=1);

namespace App\Creational\Builder;

readonly class InteractiveMirrorBuilder implements DeviceBuilder
{
    public function __construct(
        public InteractiveMirror $device = new InteractiveMirror()
    ) {
    }

    public function setHardware(): self
    {
        $components = ['display', 'glass', 'PC', 'frame'];

        foreach ($components as $component) {
            $this->device->attachHardware($component);
        }

        return $this;
    }

    public function setSoftware(): self
    {
        $this->device->setSoftware('Mirror software');

        return $this;
    }

    public function setSLA(): self
    {
        $this->device->setSLA('Mirror SLA V2');

        return $this;
    }

    public function getDevice(): Device
    {
        return $this->device;
    }
}
