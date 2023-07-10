<?php

namespace App\Creational\FactoryMethod;

abstract class Box
{
    protected $file;

    public function __construct(FileItem $file)
    {
        $this->file = $file;
    }

    abstract public function getHtml(): string;
}
