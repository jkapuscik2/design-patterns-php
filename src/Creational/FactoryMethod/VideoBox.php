<?php

namespace App\Creational\FactoryMethod;

class VideoBox extends Box
{
    public function getHtml(): string
    {
        return "<video autoplay loop src='{$this->file->getFilePath()}' />";
    }
}
