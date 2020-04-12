<?php

namespace Creational\FactoryMethod;


interface Factory {
    public static function createBox (FileItem $item): Box;
}