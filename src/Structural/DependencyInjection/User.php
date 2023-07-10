<?php

namespace App\Structural\DependencyInjection;

class User
{
    protected Storage $userStorage;

    public function __construct(Storage $userStorage)
    {
        $this->userStorage = $userStorage;
    }

    protected function validate($email, $password): bool
    {
        if (strlen($email) > 3 && strlen($password) > 3) {
            return true;
        } else {
            return false;
        }
    }

    public function register(string $email, string $password): bool
    {
        if ($this->validate($email, $password)
            && $this->userStorage->save($email, $password)) {

            return true;
        } else {
            return false;
        }
    }
}
