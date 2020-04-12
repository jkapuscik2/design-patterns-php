<?php

namespace Behavioral\NullObject;

class ArrayCache implements Cache
{
    private $data = [];

    public function get(string $key)
    {
        if ($this->has($key)) {
            return $this->data[$key];
        }
        return false;
    }

    public function set(string $key, $data): void
    {
        $this->data[$key] = $data;
    }

    public function has(string $key): bool
    {
        return array_key_exists($key, $this->data);
    }
}