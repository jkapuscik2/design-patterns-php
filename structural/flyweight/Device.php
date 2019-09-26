<?php

namespace structural\flyweight;

class Device {

    protected $uid;
    protected $ip;
    protected $type;

    public function __construct (
        string $uuid,
        string $ip,
        DeviceType $type
    ) {
        $this->uid = $uuid;
        $this->ip = $ip;
        $this->type = $type;
    }

    public function ping () {
        echo "Checking if device {$this->uid} is active" . PHP_EOL;
        $this->type->reportType() . PHP_EOL;
        echo "Calling it on ip {$this->ip}" . PHP_EOL;
    }
}