<?php

namespace behavioral\observer;

use behavioral\state\Neutral;
use behavioral\state\Person;

require(__DIR__ . '/../../autoloader.php');

$jan = new Person(new Neutral(), "Jan");
$jan->getName();
$jan->insult();
$jan->getName();
$jan->hug();
$jan->getName();
$jan->hug();
$jan->getName();
