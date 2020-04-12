<?php

namespace Creational\Prototype;


require(__DIR__ . '/../../vendor/autoload.php');

$greenGroup = new DevicesGroup("Green", "Warsaw");
$computer = new Computer($greenGroup);

$uids = [
    "aaa",
    "bbb",
    "ccc",
    "ddd",
    "eee",
    "fff",
    "ggg"
];

foreach ($uids as $uid) {
    $device = clone $computer;
    $device->setUid($uid);
    $device->save();
}