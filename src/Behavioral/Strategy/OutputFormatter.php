<?php
declare(strict_types=1);

namespace App\Behavioral\Strategy;

interface OutputFormatter
{
    public function format(array $data): string;
}
