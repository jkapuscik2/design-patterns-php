<?php

namespace behavioral\chain_of_responsibility;

class Request {

    private $params;
    private $server;

    public function __construct (array $params, array $server) {
        $this->params = $params;
        $this->server = $server;
    }

    public function getParam ($name) {
        return $this->params[$name];
    }

    public function getParams () {
        return $this->params;
    }

    public function hasParam (string $name) {
        return array_key_exists($name, $this->params);
    }

    public function getServerParam (string $name) {
        return $this->server[$name];
    }

    public function hasServerParam (string $name) {
        return array_key_exists($name, $this->server);
    }
}