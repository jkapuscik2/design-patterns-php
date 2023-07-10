<?php

namespace App\Behavioral\Strategy;

class StringFormatter implements OutputFormatter
{
    public const DELIMITER = ",";

    public function format(array $data): string
    {
        return implode(self::DELIMITER, $data);
    }
}
