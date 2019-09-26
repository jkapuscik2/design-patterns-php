<?php

namespace structural\flyweight;

class DeviceType {

    protected $location;
    protected $resolution;
    protected $producer;
    protected $operatingSystem;

    public function __construct (
        string $location,
        string $resolution,
        string $producer,
        string $operatingSystem
    ) {
        $this->location = $location;
        $this->resolution = $resolution;
        $this->producer = $producer;
        $this->operatingSystem = $operatingSystem;
    }

    public function reportType () {
        return "Working on device in {$this->location} with resolution {$this->resolution} crated by {$this->producer} and running {$this->operatingSystem}";
    }
}