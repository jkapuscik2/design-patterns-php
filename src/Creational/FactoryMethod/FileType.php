<?php
declare(strict_types=1);

namespace App\Creational\FactoryMethod;

enum FileType: string
{
    case Image = 'image';
    case Video = 'video';
    case Audio = 'audio';
}


