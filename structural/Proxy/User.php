<?php

namespace Structural\Proxy;

class User {

    public function login ($name) {
        echo "Logging in as {$name}" . PHP_EOL;
        $_SESSION["username"] = $name;
    }

    public function logOut () {
        echo "Logging out" . PHP_EOL;
        unset($_SESSION["username"]);
    }

}