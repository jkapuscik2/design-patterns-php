<?php

namespace Behavioral\NullObject;

class DummyCache implements Cache
{
    public function get(string $key)
    {
    }

    public function set(string $key, $data): void
    {
    }

    public function has(string $key): bool
    {
        return false;
    }
}