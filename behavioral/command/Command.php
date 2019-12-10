<?php

namespace behavioral\command;

interface Command
{
    public function handle() : void;
}