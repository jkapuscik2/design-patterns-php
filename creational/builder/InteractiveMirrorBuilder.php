<?php

namespace creational\builder;

class InteractiveMirrorBuilder implements DeviceBuilder {

    private $device;

    public function setHardware () {
        $components = ['display', 'glass', 'PC', 'frame'];

        foreach ($components as $component) {
            $this->device->hardware[] = $component;
        }
    }

    public function setSoftware () {
        $this->device->software = 'Mirror software';
    }

    public function setupSLA () {
        $this->device->sla = 'Mirror SLA V2';
    }

    public function createDevice () {
        $this->device = new InteractiveMirror();
    }

    public function getDevice () {
        return $this->device;
    }
}