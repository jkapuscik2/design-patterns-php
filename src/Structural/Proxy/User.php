<?php

namespace App\Structural\Proxy;

class User
{
    public function login($name): void
    {
        echo "Logging in as {$name}" . PHP_EOL;
        $_SESSION["username"] = $name;
    }

    public function logOut(): void
    {
        echo "Logging out" . PHP_EOL;
        unset($_SESSION["username"]);
    }

}
