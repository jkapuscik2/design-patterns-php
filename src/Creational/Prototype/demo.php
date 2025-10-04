<?php
declare(strict_types=1);

namespace App\Creational\Prototype;

require(__DIR__ . '/../../../vendor/autoload.php');

$greenGroup = new DeviceGroup("Green", "Warsaw");
$computer = new Computer($greenGroup);

$uuids = [
    "aaa",
    "bbb",
    "ccc",
    "ddd",
    "eee",
    "fff",
    "ggg"
];

foreach ($uuids as $uid) {
    $device = clone $computer;
    $device->setUuid($uid)->save();
}
