<?php

namespace Creational\FactoryMethod;


class ImgBox extends Box {

    function getHtml (): string {
        return "<img src='{$this->file->getFilePath()}' />";
    }
}
