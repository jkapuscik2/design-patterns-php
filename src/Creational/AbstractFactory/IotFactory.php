<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

class IotFactory implements DeviceFactory
{
    public function makeIndoor(): IndoorProduct
    {
        return new IndoorIot();
    }

    public function makeOutdoor(): OutdoorProduct
    {
        return new OutdoorIot();
    }
}
