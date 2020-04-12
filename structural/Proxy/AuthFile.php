<?php

namespace Structural\Proxy;

class AuthFile implements File {

    const ALLOWED_USERS = [
        "Jan",
        "John"
    ];
    private $file;

    public function __construct (File $file) {
        $this->file = $file;
    }

    public function add (string $name, string $path): void {
        if ($this->loggedIn()) {
            $this->file->add($name, $path);
        }
    }

    public function get (string $name): void {
        if ($this->loggedIn()) {
            $this->file->get($name);
        }
    }

    public function remove (string $name): void {
        if ($this->loggedIn()) {
            $this->file->remove($name);
        }
    }

    private function loggedIn () {
        if (isset($_SESSION["username"]) && in_array($_SESSION["username"], self::ALLOWED_USERS)) {
            echo "User can perform action" . PHP_EOL;

            return true;
        } else {
            echo "User can not perform action" . PHP_EOL;

            return false;
        }
    }
}