<?php

namespace Creational\FactoryMethod;


require(__DIR__ . '/../../vendor/autoload.php');

$img = new FileItem("image", "kawa");
$video = new FileItem("video", "kawa");
$audio = new FileItem("audio", "kawa");
var_dump(BoxFactory::createBox($img)->getHtml());
var_dump(BoxFactory::createBox($video)->getHtml());
var_dump(BoxFactory::createBox($audio)->getHtml());
