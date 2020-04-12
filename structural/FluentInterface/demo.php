<?php

namespace Structural\FluentInterface;

require(__DIR__ . '/../../vendor/autoload.php');

echo (new QueryBuilder())
    ->select(["name", "surname"])
    ->from("users")
    ->where(["name = 'John'", "city = 'Warsaw'"])
    ->orderBy("date ASC")
    ->limit(10)
    ->getQuery();

