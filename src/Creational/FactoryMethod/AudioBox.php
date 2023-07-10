<?php

namespace App\Creational\FactoryMethod;

class AudioBox extends Box
{
    public function getHtml(): string
    {
        return "<audio controls src='{$this->file->getFilePath()}' />";
    }
}
