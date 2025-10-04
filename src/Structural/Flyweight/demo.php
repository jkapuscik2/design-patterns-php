<?php
declare(strict_types=1);

namespace App\Structural\Flyweight;

require(__DIR__ . '/../../../vendor/autoload.php');

$csv = new Generator("demo.csv", 5000);
$csv->create();

$file = fopen('demo.csv', 'r');

$devicesDB = new DeviceStorage();

for ($i = 0; $row = fgetcsv($file); ++$i) {
    // Omitting file headers
    if ($i) {
        $devicesDB->addDevice(
            $row[1],
            $row[2],
            $row[3],
            $row[4],
            $row[5],
            $row[6]
        );
    }
}

fclose($file);

$devicesDB->checkDevicesHealth();

// 3.4 MB RAM USED
// 22.92 MB RAM USED

// 2.21 MB RAM USED
// 10.91 MB RAM USED

echo round(memory_get_usage() / 1024 / 1024, 2) . " MB RAM USED";
