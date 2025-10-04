<?php
declare(strict_types=1);

namespace App\Behavioral\Strategy;

class JSONFormatter implements OutputFormatter
{
    public function format(array $data): string
    {
        return json_encode($data);
    }
}
