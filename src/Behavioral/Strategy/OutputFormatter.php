<?php

namespace App\Behavioral\Strategy;

interface OutputFormatter
{
    public function format(array $data): string;
}
