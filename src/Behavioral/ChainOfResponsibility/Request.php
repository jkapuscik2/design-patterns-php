<?php

namespace App\Behavioral\ChainOfResponsibility;

final readonly class Request
{
    public function __construct(private array $params, private array $server)
    {
    }

    public function getParam($name)
    {
        return $this->params[$name];
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function hasParam(string $name): bool
    {
        return array_key_exists($name, $this->params);
    }

    public function getServerParam(string $name)
    {
        return $this->server[$name];
    }

    public function hasServerParam(string $name): bool
    {
        return array_key_exists($name, $this->server);
    }
}
