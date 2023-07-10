<?php

namespace App\Creational\FactoryMethod;

interface Factory
{
    public static function createBox(FileItem $item): Box;
}
