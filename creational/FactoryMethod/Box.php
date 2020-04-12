<?php

namespace Creational\FactoryMethod;


abstract class Box {

    protected $file;

    public function __construct (FileItem $file) {
        $this->file = $file;
    }

    abstract function getHtml (): string;
}