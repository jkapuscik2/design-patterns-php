<?php
declare(strict_types=1);

namespace App\Behavioral\Strategy;

class StringFormatter implements OutputFormatter
{
    public const DELIMITER = ",";

    public function format(array $data): string
    {
        return implode(self::DELIMITER, $data);
    }
}
