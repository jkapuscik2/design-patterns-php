<?php
declare(strict_types=1);

namespace App\Creational\FactoryMethod;

abstract class Box
{
    protected FileItem $file;

    public function __construct(FileItem $file)
    {
        $this->file = $file;
    }

    abstract public function getHtml(): string;
}
