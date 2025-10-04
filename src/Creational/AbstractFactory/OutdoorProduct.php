<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

interface OutdoorProduct
{
    public function testForWeatherConditions(): void;

    public function testForVandalism(): void;
}
