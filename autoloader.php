<?php
require(__DIR__ . '/vendor/autoload.php');

spl_autoload_register(function ($class) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . str_replace("\\", DIRECTORY_SEPARATOR, $class) . '.php';
});
