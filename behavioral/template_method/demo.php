<?php

namespace behavioral\template_method;

require(__DIR__ . '/../../autoloader.php');

$actionMovie = new ActionMovie("Great action");
$actionMovie->publish();

$comedyMovie = new ComedyMovie("Comedy 2");
$comedyMovie->publish();