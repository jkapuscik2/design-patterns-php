<?php

namespace Behavioral\Strategy;

class Context {

    private $formatter;

    public function __construct (string $outputType) {
        switch ($outputType) {
            case "json":
                $this->formatter = new JSONFormatter();
                break;
            case "xml":
                $this->formatter = new XMLFormatter();
                break;
            case "string":
                $this->formatter = new StringFormatter();
                break;
            default:
                throw new \InvalidArgumentException("{$outputType} is not supported");
        }
    }

    public function formatData (array $data): string {
        return $this->formatter->format($data);
    }
}