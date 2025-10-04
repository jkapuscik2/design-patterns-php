<?php
declare(strict_types=1);

namespace App\Structural\Facade;

require(__DIR__ . '/../../../vendor/autoload.php');

$image = new Image();
$image->thumbnail(__DIR__ . "/../../../demo.jpg", 100, 100);
