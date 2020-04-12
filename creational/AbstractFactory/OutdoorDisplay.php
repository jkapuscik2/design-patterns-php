<?php

namespace Creational\AbstractFactory;


class OutdoorDisplay implements OutdoorProduct {

    public function testForWeatherConditions (): void {
        echo "Testing weather conditions in OutdoorDisplay" . PHP_EOL;
    }

    public function testForVandalism (): void {
        echo "Testing vandals in OutdoorDisplay" . PHP_EOL;
    }

}