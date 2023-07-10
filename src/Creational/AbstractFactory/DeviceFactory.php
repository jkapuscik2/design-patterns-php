<?php

namespace App\Creational\AbstractFactory;

interface DeviceFactory
{
    public function makeIndoor(): IndoorProduct;

    public function makeOutdoor(): OutdoorProduct;
}
