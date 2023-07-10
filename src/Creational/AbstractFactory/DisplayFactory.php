<?php

namespace App\Creational\AbstractFactory;

class DisplayFactory implements DeviceFactory
{
    public function makeIndoor(): IndoorProduct
    {
        return new IndoorDisplay();
    }

    public function makeOutdoor(): OutdoorProduct
    {
        return new OutdoorDisplay();
    }
}
