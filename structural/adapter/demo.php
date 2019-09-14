<?php

namespace structural\adapter;

require(__DIR__ . '/../../autoloader.php');

$azure = new AzureFileStorage();
$azure->save("demo.jpg");
$azure->get("demo.jpg");