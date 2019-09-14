<?php

namespace creational\builder;

require(__DIR__ . '/../../autoloader.php');

$mirrorBuilder = new InteractiveMirrorBuilder();
$director = new Director();
$mirror = $director->buildDevice($mirrorBuilder);

var_dump($mirror);