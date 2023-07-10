<?php

namespace App\Behavioral\Strategy;

class Context
{
    private OutputFormatter $formatter;

    public function __construct(string $outputType)
    {
        $this->formatter = match ($outputType) {
            "json" => new JSONFormatter(),
            "xml" => new XMLFormatter(),
            "string" => new StringFormatter(),
            default => throw new \InvalidArgumentException("{$outputType} is not supported"),
        };
    }

    public function formatData(array $data): string
    {
        return $this->formatter->format($data);
    }
}
