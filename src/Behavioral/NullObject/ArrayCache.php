<?php

namespace App\Behavioral\NullObject;

class ArrayCache implements Cache
{
    private array $data = [];

    public function get(string $key): string
    {
        if ($this->has($key)) {
            return $this->data[$key];
        }
        return false;
    }

    public function set(string $key, string $data): void
    {
        $this->data[$key] = $data;
    }

    public function has(string $key): bool
    {
        return array_key_exists($key, $this->data);
    }
}
