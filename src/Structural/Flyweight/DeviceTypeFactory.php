<?php
declare(strict_types=1);

namespace App\Structural\Flyweight;

final class DeviceTypeFactory
{
    protected array $deviceTypes = [];

    public function getType(
        string $location,
        string $resolution,
        string $producer,
        string $operatingSystem
    ): DeviceType
    {
        $key = $this->getKey(
            $location,
            $resolution,
            $producer,
            $operatingSystem
        );

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

    protected function getKey(
        string $location,
        string $resolution,
        string $producer,
        string $operatingSystem
    ): string
    {
        return md5(implode("_", func_get_args()));
    }
}
