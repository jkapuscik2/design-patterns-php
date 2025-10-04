<?php
declare(strict_types=1);

namespace App\Creational\FactoryMethod;

interface Factory
{
    public static function createBox(FileItem $item): Box;
}
