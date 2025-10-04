<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

interface DeviceFactory
{
    public function makeIndoor(): IndoorProduct;

    public function makeOutdoor(): OutdoorProduct;
}
