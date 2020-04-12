<?php

namespace Behavioral\Observer;

require(__DIR__ . '/../../vendor/autoload.php');

$testEmployees = [
    new Employee("Jonny", 'CEO'),
    new Employee("Donny", "software"),
    new Employee("Monny", 'hardware')
];

$hr = new HumanResources($testEmployees);
$hr->inform("Important news everyone");

$software = new Employee("Ben", "software");
$hr->employ($software);

$hr->inform("New employee: " . $software->name);

$hr->layOf($software);
$hr->inform("New employee laid off: " . $software->name);
