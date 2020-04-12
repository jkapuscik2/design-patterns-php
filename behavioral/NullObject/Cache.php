<?php

namespace Behavioral\NullObject;

interface Cache
{
    public function has(string $key): bool;

    public function get(string $key);

    public function set(string $key, $data): void;
}