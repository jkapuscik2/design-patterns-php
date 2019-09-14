<?php

namespace creational\factory_method;

abstract class Box {

	protected $file;

	public function __construct (FileItem $file) {
		$this->file = $file;
	}

	abstract function getHtml (): string;
}