<?php

namespace creational\factory_method;

class ImgBox extends Box {

    function getHtml (): string {
        return "<img src='{$this->file->getFilePath()}' />";
    }
}
