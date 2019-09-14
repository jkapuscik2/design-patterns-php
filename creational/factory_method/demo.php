<?php

namespace creational\factory_method;

require(__DIR__ . '/../../autoloader.php');

$img = new FileItem("image", "kawa");
$video = new FileItem("video", "kawa");
$audio = new FileItem("audio", "kawa");
var_dump(BoxFactory::createBox($img)->getHtml());
var_dump(BoxFactory::createBox($video)->getHtml());
var_dump(BoxFactory::createBox($audio)->getHtml());
