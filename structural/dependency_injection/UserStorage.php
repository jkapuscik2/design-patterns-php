<?php

namespace structural\dependency_injectionDependencyInjection;

class UserStorage implements Storage {

    protected function connectDb () {
        echo "Making connection to DB" . PHP_EOL;
    }

    public function save ($email, $password): bool {
        $this->connectDb();
        echo "Inserting new user record with email: {$email} and password {$password}";

        return true;
    }
}