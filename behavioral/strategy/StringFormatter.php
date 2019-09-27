<?php

namespace behavioral\strategy;

class StringFormatter implements OutputFormatter {

    const DELIMITER = ",";

    public function format (array $data): string {
        return implode(self::DELIMITER, $data);
    }
}