<?php
declare(strict_types=1);

namespace App\Behavioral\Strategy;

final class FormatterFactory
{
    public static function from(OutputType $type): OutputFormatter
    {
        return match ($type) {
            OutputType::Json => new JSONFormatter(),
            OutputType::Xml => new XMLFormatter(),
            OutputType::String => new StringFormatter(),
        };
    }
}


