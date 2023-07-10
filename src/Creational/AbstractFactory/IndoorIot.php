<?php

namespace App\Creational\AbstractFactory;

class IndoorIot implements IndoorProduct
{
    public function testTouch(): void
    {
        echo "Testing touch in IndoorIot" . PHP_EOL;
    }

    public function testSensors(): void
    {
        echo "Testing sensors in IndoorIot" . PHP_EOL;
    }
}
