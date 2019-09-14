<?php

namespace structural\bridge;

require(__DIR__ . '/../../autoloader.php');

$vid = new Video("demo.mp4");
$img = new Image("demo.png");

$displayVid = new Standard($vid);
$blurredDisplayVid = new Blurred($vid);

$displayImg = new Standard($img);
$blurredDisplayImg = new Blurred($img);

echo($displayVid->render() . PHP_EOL);
echo($blurredDisplayVid->render() . PHP_EOL);

echo($displayImg->render() . PHP_EOL);
echo($blurredDisplayImg->render() . PHP_EOL);
