<?php
declare(strict_types=1);

namespace App\Structural\DependencyInjection;

class UserStorage implements Storage
{
    protected function connectDb(): void
    {
        echo "Making connection to DB" . PHP_EOL;
    }

    public function save(string $email, string $password): bool
    {
        $this->connectDb();
        echo "Inserting new user record with email: {$email} and password {$password}";

        return true;
    }
}
