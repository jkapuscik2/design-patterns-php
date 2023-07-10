<?php

namespace App\Creational\AbstractFactory;

require(__DIR__ . '/../../../vendor/autoload.php');

$displayFactory = new DisplayFactory();
$indoorDisplay = $displayFactory->makeIndoor();
$outdoorDisplay = $displayFactory->makeOutdoor();

$indoorDisplay->testTouch();
$indoorDisplay->testSensors();
$outdoorDisplay->testForVandalism();
$outdoorDisplay->testForWeatherConditions();

$iotFactory = new IotFactory();
$indoorIot = $iotFactory->makeIndoor();
$outdoorIot = $iotFactory->makeOutdoor();

$indoorIot->testTouch();
$indoorIot->testSensors();
$outdoorIot->testForVandalism();
$outdoorIot->testForWeatherConditions();
