<?php
declare(strict_types=1);

namespace App\Behavioral\Strategy;

class Context
{
    public function __construct(private readonly OutputFormatter $formatter)
    {
    }

    public function formatData(array $data): string
    {
        return $this->formatter->format($data);
    }
}
