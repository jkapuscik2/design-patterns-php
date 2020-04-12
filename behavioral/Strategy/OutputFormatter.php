<?php

namespace Behavioral\Strategy;

interface OutputFormatter {

    public function format (array $data): string;

}