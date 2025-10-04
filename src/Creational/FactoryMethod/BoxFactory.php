<?php
declare(strict_types=1);

namespace App\Creational\FactoryMethod;

use InvalidArgumentException;

class BoxFactory implements Factory
{
    public static function createBox(FileItem $item): Box
    {
        return match ($item->getType()) {
            FileType::Image => new ImgBox($item),
            FileType::Video => new VideoBox($item),
            FileType::Audio => new AudioBox($item),
        };
    }
}
