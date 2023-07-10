<?php

namespace App\Structural\DependencyInjection;

interface Storage
{
    public function save($email, $password): bool ;
}
