<?php
declare(strict_types=1);

namespace App\Behavioral\Observer;

require(__DIR__ . '/../../../vendor/autoload.php');

$testEmployees = [
    new Employee("Jonny", 'jonny@gmail.com'),
    new Employee("Donny", "donny@gmail.com"),
    new Employee("Monny", 'monny@gmail.com')
];

$hr = new HumanResources(...$testEmployees);
$hr->inform("Some important news");

$software = new Employee("Ben", "ben@gmail.com");
$hr->inform("New employee: " . $software->getName());
$hr->employ($software);

$hr->layOff($software);
$hr->inform("Employee was laid off: " . $software->getName());
