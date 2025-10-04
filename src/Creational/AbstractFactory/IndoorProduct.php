<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

interface IndoorProduct
{
    public function testTouch(): void;

    public function testSensors(): void;
}
