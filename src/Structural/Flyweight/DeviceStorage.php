<?php
declare(strict_types=1);

namespace App\Structural\Flyweight;

final class DeviceStorage
{
    /**
     * @var $devices Device[]
     */
    public array $devices = [];
    public DeviceTypeFactory $deviceFactory;

    public function __construct()
    {
        $this->deviceFactory = new DeviceTypeFactory();
    }

    public function addDevice(
        string $uuid,
        string $location,
        string $resolution,
        string $producer,
        string $operatingSystem,
        string $ip
    ): void
    {
        $type = $this->deviceFactory->getType(
            $location,
            $resolution,
            $producer,
            $operatingSystem
        );

        $this->devices[] = new Device($uuid, $ip, $type);
    }

    public function checkDevicesHealth(): void
    {
        foreach ($this->devices as $device) {
            $device->ping();
        }
    }

}
