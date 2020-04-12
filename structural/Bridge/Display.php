<?php

namespace Structural\Bridge;


abstract class Display {

    protected $content;

    public function __construct (Content $content) {
        $this->content = $content;
    }

    abstract public function render (): string;

}