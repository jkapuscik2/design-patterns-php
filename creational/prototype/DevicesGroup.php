<?php

namespace creational\prototype;

class DevicesGroup {

    public $name;
    public $location;

    public function __construct (string $name, string $location) {
        $this->name = $name;
        $this->location = $location;
    }

    public function getName (): string {
        return $this->name;
    }

    public function getLocation (): string {
        $this->location;
    }
}