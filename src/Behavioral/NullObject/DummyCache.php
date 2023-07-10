<?php

namespace App\Behavioral\NullObject;

class DummyCache implements Cache
{
    public function get(string $key): string
    {
        return "";
    }

    public function set(string $key, string $data): void
    {
    }

    public function has(string $key): bool
    {
        return false;
    }
}
