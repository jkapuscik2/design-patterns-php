<?php

namespace structural\adapter;

class File {

	private $name;
	private $content;

	public function __construct ($name, $content) {
		$this->name = $name;
		$this->content = $content;
	}

	public function getContent () {
		return $this->content;
	}

	public function getName () {
		return $this->name;
	}
}