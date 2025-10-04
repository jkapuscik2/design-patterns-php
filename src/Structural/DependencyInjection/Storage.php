<?php
declare(strict_types=1);

namespace App\Structural\DependencyInjection;

interface Storage
{
    public function save(string $email, string $password): bool ;
}
