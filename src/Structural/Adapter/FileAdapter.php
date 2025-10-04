<?php
declare(strict_types=1);

namespace App\Structural\Adapter;

interface FileAdapter
{
    public function get(string $path): File;

    public function save(string $path, string $name): void;

    public function delete(string $name): bool;
}
