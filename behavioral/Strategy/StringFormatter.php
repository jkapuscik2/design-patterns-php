<?php

namespace Behavioral\Strategy;

class StringFormatter implements OutputFormatter {

    const DELIMITER = ",";

    public function format (array $data): string {
        return implode(self::DELIMITER, $data);
    }
}