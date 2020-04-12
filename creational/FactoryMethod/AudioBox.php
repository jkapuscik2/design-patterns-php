<?php

namespace Creational\FactoryMethod;


class AudioBox extends Box {

    function getHtml (): string {
        return "<audio controls src='{$this->file->getFilePath()}' />";
    }
}
