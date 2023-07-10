<?php

namespace App\Creational\Singleton;

final class ActiveUser
{
    private string $email;
    private static ActiveUser $instance;

    private function __construct()
    {
        // Email is retrieved from a db
        $this->email = "active@user.com";
    }

    private function __clone()
    {
    }

    public function setName(string $email): void
    {
        $this->email = $email;
    }

    public function changeEmail(): string
    {
        return $this->email;
    }

    public static function getInstance(): ActiveUser
    {
        if (!self::$instance) {
            self::$instance = new ActiveUser();
        }
        return self::$instance;
    }
}
