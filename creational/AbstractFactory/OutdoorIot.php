<?php

namespace Creational\AbstractFactory;


class OutdoorIot implements OutdoorProduct {

    public function testForWeatherConditions (): void {
        echo "Testing weather conditions in OutdoorIot" . PHP_EOL;
    }

    public function testForVandalism (): void {
        echo "Testing vandals in OutdoorIot" . PHP_EOL;
    }

}