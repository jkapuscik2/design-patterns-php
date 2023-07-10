<?php

namespace App\Creational\FactoryMethod;

require(__DIR__ . '/../../../vendor/autoload.php');

$img = new FileItem("image", "image.png");
$video = new FileItem("video", "video.mp4");
$audio = new FileItem("audio", "audio.mp3");

echo BoxFactory::createBox($img)->getHtml() . PHP_EOL;
echo BoxFactory::createBox($video)->getHtml() . PHP_EOL;
echo BoxFactory::createBox($audio)->getHtml() . PHP_EOL;
