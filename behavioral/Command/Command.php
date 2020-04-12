<?php

namespace Behavioral\Command;

interface Command
{
    public function handle() : void;
}