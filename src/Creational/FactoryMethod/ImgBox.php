<?php

namespace App\Creational\FactoryMethod;

class ImgBox extends Box
{
    public function getHtml(): string
    {
        return "<img src='{$this->file->getFilePath()}' />";
    }
}
