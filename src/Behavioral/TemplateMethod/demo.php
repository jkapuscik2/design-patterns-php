<?php
declare(strict_types=1);

namespace App\Behavioral\TemplateMethod;

require(__DIR__ . '/../../../vendor/autoload.php');

$actionMovie = new ActionMovie("Great action");
$actionMovie->publish();

$comedyMovie = new ComedyMovie("Comedy 2");
$comedyMovie->publish();
