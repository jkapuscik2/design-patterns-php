<?php

namespace App\Creational\FactoryMethod;

use InvalidArgumentException;

class BoxFactory implements Factory
{
    public static function createBox(FileItem $item): Box
    {
        return match ($item->getType()) {
            FileItem::TYPE_IMG => new ImgBox($item),
            FileItem::TYPE_VIDEO => new VideoBox($item),
            FileItem::TYPE_AUDIO => new AudioBox($item),
            default => throw new InvalidArgumentException("Wrong file type provided: {$item->getType()}"),
        };
    }
}
