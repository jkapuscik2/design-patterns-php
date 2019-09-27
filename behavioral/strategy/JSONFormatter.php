<?php

namespace behavioral\strategy;

class JSONFormatter implements OutputFormatter {

    public function format (array $data): string {
        return json_encode($data);
    }
}