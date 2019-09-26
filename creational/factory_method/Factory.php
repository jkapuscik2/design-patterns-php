<?php

namespace creational\factory_method;

interface Factory {
    public static function createBox (FileItem $item): Box;
}