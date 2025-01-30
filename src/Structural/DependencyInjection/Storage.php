<?php

namespace App\Structural\DependencyInjection;

interface Storage
{
    public function save(string $email, string $password): bool ;
}
