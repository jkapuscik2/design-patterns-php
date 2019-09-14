<?php

namespace behavioral\iterator;

class Employee {

	public $name;
	public $position;

	public function __construct (string $name, string $position) {
		$this->name = $name;
		$this->position = $position;
	}
}