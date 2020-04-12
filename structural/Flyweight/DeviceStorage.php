<?php

namespace Structural\Flyweight;

class DeviceStorage {

    public $devices = [];
    public $deviceFactory;

    public function __construct () {
        $this->deviceFactory = new DeviceTypeFactory();
    }

    public function addDevice (
        string $uuid,
        string $location,
        string $resolution,
        string $producer,
        string $operatingSystem,
        string $ip
    ) {
        $type = $this->deviceFactory->getType(
            $location,
            $resolution,
            $producer,
            $operatingSystem
        );

        $this->devices[] = new Device($uuid, $ip, $type);
    }

    public function checkDevicesHealth () {
        foreach ($this->devices as $device) {
            $device->ping();
        }
    }

}