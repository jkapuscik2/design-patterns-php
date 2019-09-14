<?php

namespace structural\bridge;

abstract class Content {

	protected $filePath;

	public function __construct (string $filePath) {
		$this->filePath = $filePath;
	}

	abstract public function getHtml (): string;

	abstract public function getCss (): string;

}