<?php

namespace Structural\Facade;

require(__DIR__ . '/../../vendor/autoload.php');

$image = new Image();
$image->thumbnail("demo.jpg", 100, 100);