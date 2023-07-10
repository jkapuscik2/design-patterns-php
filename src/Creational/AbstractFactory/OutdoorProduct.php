<?php

namespace App\Creational\AbstractFactory;

interface OutdoorProduct
{
    public function testForWeatherConditions(): void;

    public function testForVandalism(): void;
}
