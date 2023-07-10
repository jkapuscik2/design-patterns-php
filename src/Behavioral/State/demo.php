<?php

namespace App\Behavioral\State;

require(__DIR__ . '/../../../vendor/autoload.php');

$jan = new Person(new Neutral(), "Jan");
$jan->getName();
$jan->insult();
$jan->getName();
$jan->hug();
$jan->getName();
$jan->hug();
$jan->getName();
