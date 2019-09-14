<?php

namespace structural\flyweight;

require(__DIR__ . '/../../autoloader.php');

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
// 2189456
// 4194304 RAM USED true

// 3427248 RAM USED
// 4194304 RAM USED

echo memory_get_usage() /1024/1024 . " RAM USED";