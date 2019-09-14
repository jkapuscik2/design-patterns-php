<?php

namespace structural\decorator;

require(__DIR__ . '/../../autoloader.php');

$shirt = new Shirt(10, "Blue shirt BLD220");
$tv = new TV(500, "LG 42'");

echo($shirt->getName() . PHP_EOL);
echo($tv->getName()) . PHP_EOL;

$winterShirt = new WinterSale($shirt);
$winterTv = new WinterSale($tv);

echo($winterShirt->getName() . PHP_EOL);
echo($winterTv->getName() . PHP_EOL);

$summerShirt = new SummerSale($shirt);
$summerTv = new SummerSale($tv);

echo($summerShirt->getName() . PHP_EOL);
echo($summerTv->getName() . PHP_EOL);
