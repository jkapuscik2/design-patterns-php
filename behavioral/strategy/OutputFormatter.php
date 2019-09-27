<?php

namespace behavioral\strategy;

interface OutputFormatter {

    public function format (array $data): string;

}