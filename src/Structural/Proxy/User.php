<?php
declare(strict_types=1);

namespace App\Structural\Proxy;

class User
{
    public function login(string $name): void
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
