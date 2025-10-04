<?php
declare(strict_types=1);

namespace App\Creational\Builder;

require(__DIR__ . '/../../../vendor/autoload.php');

$mirrorBuilder = new InteractiveMirrorBuilder();
$director = new Director();
$mirror = $director->buildDevice($mirrorBuilder);

var_dump($mirror);
