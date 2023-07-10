<?php

namespace App\Behavioral\Strategy;

require(__DIR__ . '/../../../vendor/autoload.php');

$exampleData = [
    "name" => "Johny",
    "surname" => "Marony",
    "company" => "Company Name",
    "position" => "Senior Doorkeeper"
];

$jsonContext = new Context('json');
echo $jsonContext->formatData($exampleData) . PHP_EOL;

$stringContext = new Context('string');
echo $stringContext->formatData($exampleData) . PHP_EOL;

$xmlContext = new Context('xml');
echo $xmlContext->formatData($exampleData) . PHP_EOL;
