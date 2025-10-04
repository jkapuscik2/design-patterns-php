<?php
declare(strict_types=1);

namespace App\Structural\Proxy;

interface File
{
    public function add(string $name, string $path): void;

    public function get(string $name): void;

    public function remove(string $name): void;
}
