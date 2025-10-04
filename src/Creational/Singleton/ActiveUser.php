<?php
declare(strict_types=1);

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

    private function __wakeup(): void
    {
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public static function getInstance(): self
    {
        if (!self::$instance) {
            self::$instance = new ActiveUser();
        }
        return self::$instance;
    }
}
