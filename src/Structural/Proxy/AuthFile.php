<?php

namespace App\Structural\Proxy;

class AuthFile implements File
{
    public const ALLOWED_USERS = [
        "Jan",
        "John"
    ];

    public function __construct(
        private readonly File $file)
    {
    }

    public function add(string $name, string $path): void
    {
        if ($this->loggedIn()) {
            $this->file->add($name, $path);
        }
    }

    public function get(string $name): void
    {
        if ($this->loggedIn()) {
            $this->file->get($name);
        }
    }

    public function remove(string $name): void
    {
        if ($this->loggedIn()) {
            $this->file->remove($name);
        }
    }

    private function loggedIn(): bool
    {
        if (isset($_SESSION["username"]) && in_array($_SESSION["username"], self::ALLOWED_USERS)) {
            echo "User can perform action" . PHP_EOL;

            return true;
        } else {
            echo "User can not perform action" . PHP_EOL;

            return false;
        }
    }
}
