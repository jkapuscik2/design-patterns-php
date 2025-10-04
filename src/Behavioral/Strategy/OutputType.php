<?php
declare(strict_types=1);

namespace App\Behavioral\Strategy;

enum OutputType: string
{
    case Json = 'json';
    case Xml = 'xml';
    case String = 'string';
}


