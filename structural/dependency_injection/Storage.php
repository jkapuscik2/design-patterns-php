<?php

namespace structural\dependency_injection;

interface Storage {

    public function save($email, $password): bool ;
}