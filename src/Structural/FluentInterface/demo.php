<?php
declare(strict_types=1);

namespace App\Structural\FluentInterface;

require(__DIR__ . '/../../../vendor/autoload.php');

echo (new QueryBuilder())
    ->select(["name", "surname"])
    ->from("users")
    ->where(["name = 'John'", "city = 'Warsaw'"])
    ->orderBy("date ASC")
    ->limit(10)
    ->getQuery();
