<?php
declare(strict_types=1);

namespace App\Creational\FactoryMethod;

class ImgBox extends Box
{
    public function getHtml(): string
    {
        $src = htmlspecialchars($this->file->getFilePath(), ENT_QUOTES, 'UTF-8');
        return "<img src='{$src}' />";
    }
}
