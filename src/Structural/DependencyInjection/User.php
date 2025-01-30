<?php

namespace App\Structural\DependencyInjection;

class User
{
    public function __construct(private Storage $userStorage)
    {
    }

    protected function validate(string $email, string $password): bool
    {
        if (mb_strlen($email) > 3 && mb_strlen($password) > 3) {
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
