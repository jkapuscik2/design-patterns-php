<?php

namespace creational\prototype;

class Computer implements Device {

	private $uid;
	private $group;

	public function __construct (DevicesGroup $group) {
		$this->group = $group;
	}

	public function setUid (string $uid): void {
		$this->uid = $uid;
	}

	public function save (): void {
		echo "Saving device with UID {$this->uid} to group {$this->group->getName()}" . PHP_EOL;
	}
}