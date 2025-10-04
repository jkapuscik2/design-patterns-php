<?php
declare(strict_types=1);

namespace App\Creational\FactoryMethod;

require(__DIR__ . '/../../../vendor/autoload.php');

$img = new FileItem(FileType::Image, "image.png");
$video = new FileItem(FileType::Video, "video.mp4");
$audio = new FileItem(FileType::Audio, "audio.mp3");

echo BoxFactory::createBox($img)->getHtml() . PHP_EOL;
echo BoxFactory::createBox($video)->getHtml() . PHP_EOL;
echo BoxFactory::createBox($audio)->getHtml() . PHP_EOL;
