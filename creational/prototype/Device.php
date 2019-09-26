<?php

namespace creational\prototype;

interface Device {

    public function __construct (DevicesGroup $group);

    public function setUid (string $uid): void;

    public function save (): void;
}