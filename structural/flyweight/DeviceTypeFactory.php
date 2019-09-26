<?php

namespace structural\flyweight;

class DeviceTypeFactory {

    protected $deviceTypes = [];

    public function getType (
        string $location,
        string $resolution,
        string $producer,
        string $operatingSystem): DeviceType {

        $key = $this->getKey(
            $location,
            $resolution,
            $producer,
            $operatingSystem);

        if (!array_key_exists($key, $this->deviceTypes)) {
            $this->deviceTypes[$key] = new DeviceType(
                $location,
                $resolution,
                $producer,
                $operatingSystem
            );
        }

        return $this->deviceTypes[$key];
    }

    protected function getKey (
        string $location,
        string $resolution,
        string $producer,
        string $operatingSystem) {

        return md5(implode("_", func_get_args()));
    }
}