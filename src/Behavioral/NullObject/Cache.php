<?php

namespace App\Behavioral\NullObject;

interface Cache
{
    public function has(string $key): bool;

    public function get(string $key): string;

    public function set(string $key, string $data): void;
}
