<?php

namespace Creational\FactoryMethod;


use InvalidArgumentException;

class BoxFactory implements Factory {

    public static function createBox (FileItem $item): Box {

        switch ($item->getType()) {
            case FileItem::TYPE_IMG:
                return new ImgBox($item);
                break;
            case FileItem::TYPE_VIDEO:
                return new VideoBox($item);
                break;
            case FileItem::TYPE_AUDIO:
                return new AudioBox($item);
                break;
            default:
                throw new InvalidArgumentException("Wrong file type provided: {$item->getType()}");
                break;
        }
    }
}